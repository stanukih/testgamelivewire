<?php

namespace App\Livewire\User;

use App\Models\Topic;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TopicsComponent extends Component
{
    public $topic;
    public $title;
    public function render()
    {
        return view('livewire.user.topics-component');
    }
    public function mount(){
        $this->title = $this->topic->title;
    }
    public function saveTopicName(): void{
        $validated = $this->validate([
            'title' => 'required',
        ]);

        //$this->topics = Topic::all()->where('user_id',Auth::user()->id); 
        $this->topic->title = $validated['title'];
        if ($this->topic->user_id == Auth::user()->id) {
            $this->topic->save();
        }
        else redirect('logout');
        
    }

    public function deleteTopic(): void{
        
        //$this->topic->();
        $id = $this->topic->id;
        if ($this->topic->user_id == Auth::user()->id) {
            Topic::destroy($this->topic->id);
            $this->dispatch("topicDelete", id: $id);
        }
        
    }

    public function activateTopic(): void{        
        if ($this->topic->user_id == Auth::user()->id) {
            $this->dispatch("activateTopic", id: $this->topic->id);
        }
        
    }


    
    /*public function saveTopicName(): void{
        $validated = $this->validate([
            'title' => 'required',
        ]);
        $this->topic->title = $validated['title'];
        $this->topic->save();
    }*/
}
