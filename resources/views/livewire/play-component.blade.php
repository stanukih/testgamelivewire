@push('styles')
<link rel="stylesheet" href="{{ asset('css/play.css') }}">
@endpush

<div class="play-cont">
    <div class="play-form">
    @switch ($state)

        @case("start")
        <h1>Aloita peli</h1>
            <livewire:play.teacher-component></livewire:user.topics-component>
            @if ($activeTeacherId)
                <livewire:play.topic-component :activeTeacherId="$activeTeacherId" :key="'$activeTeacherId'.$activeTeacherId"></livewire:user.topics-component> 
                @if ($activeTopicId)
                    <label for="form-check-input">Kysymysten määrä</label>
                    <label><input type="radio" wire:model="difficulty" value="5" class="form-check-input"/> 5 Kysymystä </label>
                    <label><input type="radio" wire:model="difficulty" value="10" class="form-check-input" /> 10 Kysymystä </label>
                    <label><input type="radio" wire:model="difficulty" value="15" class="form-check-input"/> 15 Kysymystä </label>
                    <button wire:click="next">Jatka</button>                    
                @endif
            @endif
        @break

        @case("reg")
        <h1>Valittu aihe: {{ $activeTopicName }}</h1>
            <form wire:submit='next'>                
                <label for="playerName" class="form-label">Nimimerkki</label>
                <input type="text" wire:model="playerName"  id="playerName">
                <button type="submit" value="Jatka">Jatka</button>
            </form>
        @break
        
        @case("play")
            <livewire:play.questions-component :activeTopicId="$activeTopicId" :difficulty="$difficulty">
        @break
        
        @case("score")            
            <livewire:play.score-component :activeTopicId="$activeTopicId" :key="'activeTopicId'.$activeTopicId">
        @break

    @endswitch
    
    
    </div>
</div>
