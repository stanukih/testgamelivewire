<?php

namespace App\Livewire;

use App\Models\Question;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;


class UserComponent extends Component
{
    public $topics;
    public $questions = [];
    public $activeTopic;
    public $activeQuestion;
    public $newTopic;
    public $newQuestion;
    public function render()
    {
        return view('livewire.user-component');
    }
    public function mount(): void{
        //$this->user_id = Auth::user()->id;
        $this->topics = Topic::all()->where('user_id',Auth::user()->id);        
    }    

    #[On('topicDelete')]
    public function updateTopics($id){
        $this->topics = Topic::all()->where('user_id',Auth::user()->id);  
        if ($id==$this->activeTopic->id){
            $this->activeTopic->id = null;
        }
    }

    #[On('activateTopic')]
    public function activateTopic($id){

        $this->activeTopic = Topic::find($id);
        $this->questions = [];
        $this->questions = Question::where('topic_id', $id)->get();
        $this->activeQuestion = null;
        $this->newQuestion = null;
    }

    #[On('questionDelete')]
    public function updateQuestions(){
        $this->questions = [];
        $this->questions = Question::where('topic_id', $this->activeTopic->id)->get();
    }

    #[On('activateQuestion')]
    public function activateQuestion($id){
        $this->activeQuestion = Question::find( $id );
    }

    #[On('questionSave')]
    public function questionSave(){
        $this->updateQuestions();
    }

    
    public function createTopic(){

        $topic = new Topic;
        $validated = $this->validate([
            'newTopic' => 'required',
        ]);
        $topic->title = $validated['newTopic'];
        $topic->user_id = Auth::user()->id;
        $topic->save();
        $this->topics = Topic::all()->where('user_id',Auth::user()->id);  
    }
    public function createQuestion(){

        $question = new Question();
        $validated = $this->validate([
            'newQuestion' => 'required',
        ]);
        $question->title = $validated['newQuestion'];
        $question->topic_id = $this->activeTopic->id;
        $question->save();
        $this->questions = Question::where('topic_id', $this->activeTopic->id)->get();
    }
    
}
