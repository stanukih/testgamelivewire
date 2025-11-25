<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;


class PlayComponent extends Component
{
    public $state; //start, reg, play, score
    public $activeTeacherId;
    public $topic;
    public $name;
    public $difficulty;
    public $question;
    public function render()
    {
        return view('livewire.play-component');
    }

    public function mount(){
        $this->state = 'start';
    }

    #[On('selectTeacher')]
    public function selectTeacher($id){
        
        $this->activeTeacherId = $id;
        $this->question = $id;
        /*$this->questions = [];
        $this->questions = Question::where('topic_id', $this->activeTopic->id)->get();
        $this->activeQuestion = null;
        $this->newQuestion = null;*/
    }
}
