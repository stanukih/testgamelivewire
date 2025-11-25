<?php

namespace App\Livewire\User;

use App\Models\Question;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class QuestionComponent extends Component
{
    public $question;
    public $title;
    public $question_text;
    public $answer1;
    public $answer2;
    public $answer3;
    public $answer4;
    public $correct;
    public $comment;
    
    public $topicUserId;
    public function render()
    {
        return view('livewire.user.question-component');
    }
    public function mount(){
        $this->topicUserId = Topic::firstWhere('id', $this->question->topic_id)->user_id;
        if ($this->topicUserId == Auth::user()->id) {
            $this->title = $this->question->title;
            $this->question_text = $this->question->question;
            $this->answer1 = $this->question->answer1;
            $this->answer2 = $this->question->answer2;
            $this->answer3 = $this->question->answer3;
            $this->answer4 = $this->question->answer4;
            $this->correct = $this->question->correct ?? 1;
            $this->comment = $this->question->comment ?? '';
        }
        
    }
    public function save(){
        
        $validated = $this->validate([
            'question_text' => 'required',
            'answer1' => 'required',
            'answer2' => 'required',
            'answer3' => 'required',
            'answer4' => 'required',
            'correct' => 'required',
            'comment' => 'required',
        ]);        
        
        $questionT = Question::find($this->question->id);
        $questionT->question = $validated['question_text'];
        $questionT->answer1 = $validated['answer1'];
        $questionT->answer2 = $validated['answer2'];
        $questionT->answer3 = $validated['answer3'];
        $questionT->answer4 = $validated['answer4'];
        $questionT->correct = $validated['correct'];
        $questionT->comment = $validated['comment'];
        if ($this->topicUserId == Auth::user()->id) {
            $questionT->save();
            $this->dispatch("questionSave");
        }

        
    }
}
