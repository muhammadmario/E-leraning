<?php

namespace App\Http\Livewire;

use App\Models\Conversation;
use App\Models\Message;
use Livewire\Component;

class ListConversationAndMessages extends Component
{
    public $body;
    public $selectedConversation;

    public function mount()
    {
        if (session()->has('selectedConversation')) {
            return $this->selectedConversation = session('selectedConversation');
        }

       $this->selectedConversation= Conversation::query()->where('sender_id', auth()->id())->orWhere('receiver_id', auth()->id())->first();
        // dd($conversations);
    }

    public function sendMessage()
    {
        Message::create([
            'conversation_id'=>$this->selectedConversation->id,
            'user_id'=>auth()->id(),
            'body'=>$this->body
        ]);

        $this->reset('body');

        $this->viewMessage($this->selectedConversation->id);
    }

    public function viewMessage($conversationId)
    {
        $this->selectedConversation = Conversation::findOrFail($conversationId);
        
    }

    public function render()
    {
        $conversations = Conversation::query()->where('sender_id', auth()->id())->orWhere('receiver_id', auth()->id())->get();
        // dd($conversations);
        return view('livewire.list-conversation-and-messages', [
            'conversations'=> $conversations,
        ]);
    }
}
