<div>
    @if ($questions->count()>0)
        <livewire:play.question-component :question="$questions[0]" :key="'$question_title' .$questions[0]->id"></livewire:play.question-component>
    @endif
    
</div>
