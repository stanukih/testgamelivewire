<?php

namespace App\Livewire\User;

use App\Models\Question;
use Livewire\Component;

class QuestionsComponent extends Component
{
    public $question;
    public $title;
    public function render()
    {
        return view('livewire.user.questions-component');
    }
    public function saveQuestionName(): void{
        $validated = $this->validate([
            'title' => 'required',
        ]);
        $this->question->title = $validated['title'];
        $this->question->save();
    }
    public function mount(){
        $this->title = $this->question->title;
    }

    public function deleteQuestion(): void{
        
        //$this->topic->();
        $id = $this->question->id;
        Question::destroy($this->question->id);
        $this->dispatch("topicDelete", id: $id);
    }

    public function activateQuestion(): void{        
        $this->dispatch("activateQuestion", id: $this->question->id);
    }
}
