<?php

namespace App\Livewire\User;

use App\Models\User;
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
            'password' => 'required',
            'passwordRe' => 'required|same:password'
        ]);
        
            $user_id = Auth::user()->id;
            $user = User::find($user_id);
            $user->password = $validated['passwordRe'];
            $user->save();
        
    }
}
