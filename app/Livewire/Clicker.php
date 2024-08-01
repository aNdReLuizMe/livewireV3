<?php

namespace App\Livewire;

use App\Models\User;
use Faker\Guesser\Name;
use Livewire\Component;

class Clicker extends Component
{
    public $name = null;
    public $email = null;
    public $password = null;

    public function createNewUser()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        $this->name = null;
        $this->email = null;
        $this->password = null;
    }
    public function render()
    {
        $users = User::all();

        return view('livewire.clicker', [
            'users' => $users,
            
        ]);
    }
}
