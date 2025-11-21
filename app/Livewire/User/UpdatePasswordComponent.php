<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpdatePasswordComponent extends Component
{
    public $password;
    public $passwordRe;
    
    public function render()
    {
        return view('livewire.user.update-password-component');
    }

    public function savePassword(){
        $validated = $this->validate([
            'password'=> 'required',
            'passwordRe'=> 'required'
        ]);
        if ($validated['password']==$validated['$passwordRe']){
            $user = Auth::user();
            $user->password = $validated['password'];
            $user->save();
        }
    }
}
