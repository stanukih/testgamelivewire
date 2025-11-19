<?php

namespace App\Livewire;

use Livewire\Component;

class AuthComponent extends Component
{
    public $email = "";
    public $password = "";
    public function render()
    {
        return view('livewire.auth-component');
    }

    public function login(){
        $valid = $this->validate([
            'email'=> 'required|password',
            'password'=> 'required'
        ]);
        dump($valid);
    }
}
