<?php

namespace App\Livewire\Play;

use App\Models\Topic;
use Livewire\Component;

class TopicComponent extends Component
{
    public $activeTeacherId;
    public $topics = [];
    public $selectedTopic;

    public function mount(){
        $this->topics = Topic::all()->where('user_id','=', $this->activeTeacherId);
    }
    public function render()
    {
        return view('livewire.play.topic-component');
    }
    public function selectTopic(){
        $this->dispatch("selectTopic", id: $this->selectedTopic);
    }
}
