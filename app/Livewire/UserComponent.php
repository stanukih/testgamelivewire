<?php

namespace App\Livewire;

use App\Models\Topic;
use Livewire\Component;

class UserComponent extends Component
{
    public $topics;
    public function render()
    {
        return view('livewire.user-component');
    }
    public function mount(): void{
        $this->topics = Topic::all();        
    }
}
