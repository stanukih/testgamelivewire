<?php

namespace App\Livewire\Play;

use Livewire\Component;

class QuestionsComponent extends Component
{
    public $activeTopicId;
    public $difficulty = 5;
    public function render()
    {
        return view('livewire.play.questions-component');
    }
}
