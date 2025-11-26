<div>
    <h2>{{ $question->question }}</h2>
    <label><input type="radio" wire:model="answer" value=1 > {{ $question->answer1 }} </label><br>
    <label><input type="radio" wire:model="answer" value=2 > {{ $question->answer2 }} </label><br>
    <label><input type="radio" wire:model="answer" value=3 > {{ $question->answer3 }} </label><br>
    <label><input type="radio" wire:model="answer" value=4 > {{ $question->answer4 }} </label><br>
    <button wire:click='send'>Vastaa</button>
</div>
