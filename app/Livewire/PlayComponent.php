<?php

namespace App\Livewire;

use App\Models\Score;
use App\Models\Topic;
use Livewire\Component;
use Livewire\Attributes\On;


class PlayComponent extends Component
{
    public $state; //start, reg, play, score
    public $activeTeacherId;
    public $activeTopicId;
    public $activeTopicName;
    public $playerName;
    public $difficulty = 5;
    public $question;
    public $points = 0;

    public function next(){
        switch ($this->state) {
            case 'start':
                $this->state = 'reg';
                break;
            case 'reg':
                $this->state = 'play';
                break;
            case 'play':
                $this->state = 'score';
                break;
        }
    }
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
    }

    #[On('selectTopic')]
    public function selectTopic($id){        
        $this->activeTopicId = $id;
        $this->activeTopicName = Topic::find($id)->title;
    }

    #[On('sendResult')]
    public function getResult($points, $difficulty){
        $this->points = $points;
        $this->state = 'score';
        $score = new Score();
        $score->topic_id = $this->activeTopicId;
        $score->name = $this->playerName;
        $score->number_of_questions = $difficulty;
        $score->number_of_questions = $points;
        $score->save();
    }
}
