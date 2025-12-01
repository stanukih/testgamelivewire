<?php

namespace App\Livewire\Play;

use App\Models\User;
use Livewire\Component;

class TeacherComponent extends Component
{
    public $teachers = [];
    public $selectedTeacher;
    public function mount(){
        $this->teachers = User::all()->where('role', 'user')->where('isActive', true);
    }
    public function render()
    {
        return view('livewire.play.teacher-component');
    }
    public function selectTeacher(){
        $this->dispatch("selectTeacher", id: $this->selectedTeacher);
    }

}
