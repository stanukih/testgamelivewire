<?php

namespace App\Livewire\Play;

use App\Models\Score;
use Livewire\Component;

class ScoreComponent extends Component
{
    public $activeTopicId;
    public $quantity;
    public $page = 1;
    public $scores = [];
    public function render()
    {
        return view('livewire.play.score-component');
    }
    public function mount(){
        $quantity = Score::where('id', $this->activeTopicId)->count('*');
        $this->load();
    }

    public function load($page = 1){
        $this->scores = Score::where('id', $this->activeTopicId)
        ->orderBy("number_of_questions","desc")
        ->orderBy("number_of_correct","desc")->get();  
        dump($this->activeTopicId);        
    }
}
