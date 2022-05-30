<?php

namespace App\Http\Livewire;

use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;

class ListUser extends Component
{
    public function render()
    {
        $GuruandUser = User::where('role',3)->orWhere('role', 2)->latest()->paginate(7);
        $users = User::where('role',3)->latest()->paginate(7);
        return view('livewire.list-user', ['GuruandUser'=>$GuruandUser, 'users'=>$users]);
    }

    public function startConversation($userId)
    {
      $conversation = Conversation::firstOrCreate([
            'sender_id'=>auth()->id(),
            'receiver_id'=>$userId,
        ]);

        return redirect('/dashboard/pesan')->with('selectedConversation', $conversation);
    }
}
