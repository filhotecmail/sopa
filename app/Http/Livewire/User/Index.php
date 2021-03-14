<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    public function delete(User $user)
    {
        $user->delete();
    }

    public function render()
    {
        $users = User::paginate(10);

        return view('livewire.user.index', compact('users'));
    }
}
