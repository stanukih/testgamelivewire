<?php

namespace App\Livewire\Play;

use App\Models\Question;
use Livewire\Component;
use Livewire\Attributes\On;

class QuestionsComponent extends Component
{
    public $activeTopicId;
    public $difficulty = 5;
    public $questions = [];
    public $points = 0;
    public function render()
    {
        return view('livewire.play.questions-component');
    }

    public function mount(){
        $this->questions = Question::where('topic_id', $this->activeTopicId)->get();        
    }

    #[On('sendAnswer')]
    public function getAnswer($answer){
        if ($answer === $this->questions[0]->correct){
            $this->points++;
        }
        if (!$this->questions->shift()){
            $this->dispatch("sendResult", points: $this->points);
        }
    }
}
