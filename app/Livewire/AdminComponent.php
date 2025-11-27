<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminComponent extends Component
{
    public $name;
    public $email;
    public $role;

    public $users;

    /*function __construct() {
        $this->mount();
    }*/

    public function save(){
        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);
        $validated['password'] = "0000";
        $user = User::query()->create($validated);
        $this->users = User::all();
    }
    public function render()
    {
        return view('livewire.admin-component');
    }

    public function mount(): void{
        $this->users = User::all();
    }

    public function resetPassword($id){
        $user = User::find($id);
        $user->password = '0000';
        $user->save();
    }

    public function block($id){
        $user = User::find($id);
        $user->isActive = false;
        $user->save();
        $this->users = User::all();
    }

    public function unblock($id){
        $user = User::find($id);
        $user->isActive = true;
        $user->save();
        $this->users = User::all();
    }

    public function doAdmin($id){
        $user = User::find($id);
        $user->role = 'admin';
        $user->save();
        $this->users = User::all();
    }
    
}
