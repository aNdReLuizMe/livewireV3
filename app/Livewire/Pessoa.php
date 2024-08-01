<?php

namespace App\Livewire;

use Livewire\Component;

class Pessoa extends Component
{
    public $nome;
    public $idade;
    public function mount()
    {
        $this->nome = 'Rodrigo';
        $this->idade = 23;
    }
    public function render()
    {
        return view('livewire.pessoa')
            ->layout('livewire.pessoa');
    }
}
