<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
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
        $validated = $this->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        
        if (Auth::attempt($validated)){
            $user = Auth::user();
            if($user->role == 'admin'){
                $this->redirect('/admin'); 
            } else {
                $this->redirect('/user'); 
            }
                
        } else {
            session()->flash('message','Käyttäjätunnus+salasana ei löytynyt');
        } 
    }
}
