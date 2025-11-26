<?php

namespace App\Livewire\Play;

use App\Models\Score;
use Livewire\Component;

class ScoreComponent extends Component
{
    public $activeTopicId;
    public $quantity = 0;
    public $page = 1;
    public $scores = [];
    public function render()
    {
        return view('livewire.play.score-component');
    }
    public function mount(){
        $this->quantity = Score::where('topic_id', $this->activeTopicId)->count('*');  
        $this->load();
    }

    public function load($page = 1){
        $this->scores = Score::where('topic_id', intval($this->activeTopicId))
        ->orderBy("number_of_questions","desc")
        ->orderBy("number_of_correct","desc")
        ->get();  
        //$this->scores = Score::all();
          
    }
}
