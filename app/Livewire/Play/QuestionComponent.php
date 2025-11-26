<?php

namespace App\Livewire\Play;

use Livewire\Component;

class QuestionComponent extends Component
{
    public $question;
    public $answer = 1;
    public function render()
    {
        return view('livewire.play.question-component');
    }
    public function send(){
        $this->dispatch("sendAnswer", answer: intval($this->answer));
    }
}
