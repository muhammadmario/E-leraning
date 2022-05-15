<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Conversation;

class UserListKontak extends Component
{
    public function render()
    {
        $users = User::where('role', 2)->latest()->paginate(7);

        return view('livewire.user-list-kontak',['users'=>$users]);
    }

    public function startConversation($userId)
    {
      $conversation = Conversation::firstOrCreate([
            'sender_id'=>auth()->id(),
            'receiver_id'=>$userId,
        ]);

        return redirect('/chat')->with('selectedConversation', $conversation);
    }
}
