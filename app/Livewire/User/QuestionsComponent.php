<?php

namespace App\Livewire\User;

use App\Models\Question;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class QuestionsComponent extends Component
{
    public $question;
    public $title;
    public $topicUserId;
    public function render()
    {
        return view('livewire.user.questions-component');
    }
    public function saveQuestionName(): void{
        $validated = $this->validate([
            'title' => 'required',
        ]);
        if ($this->topicUserId == Auth::user()->id) {
            $this->question->title = $validated['title'];
            $this->question->save();
        }
        
    }
    public function mount(){
        $this->title = $this->question->title;
        $this->topicUserId = Topic::firstWhere('id', $this->question->topic_id)->user_id;

    }

    public function deleteQuestion(): void{
        
        //$this->topic->();
        $id = $this->question->id;
        if ($this->topicUserId == Auth::user()->id) {
            Question::destroy($this->question->id);
            $this->dispatch("topicDelete", id: $id);
        }
        
    }

    public function activateQuestion(): void{        
        
        if ($this->topicUserId == Auth::user()->id) {
            $this->dispatch("activateQuestion", id: $this->question->id);
        }
    }
}
