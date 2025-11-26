<div>
    @if ($questions->count())
        <livewire:play.question-component :question="$questions[0]" :key="'$question_title' .$questions[0]->id"></livewire:play.question-component>
    @endif
</div>
