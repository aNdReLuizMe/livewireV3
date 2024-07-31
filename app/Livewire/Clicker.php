<?php

namespace App\Livewire;

use App\Models\User;
use Faker\Guesser\Name;
use Livewire\Component;

class Clicker extends Component
{
    public ?string $name = null;
    public ?string $email = null;
    public ?string $password = null;

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
        $title = "Test";
        $users = User::all();

        return view('livewire.clicker', [
            'users' => $users,
            'title' => $title
        ]);
    }
}
