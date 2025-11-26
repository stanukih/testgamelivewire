<div>
    @switch ($state)

        @case("start")
        <h1>Mitä haluat tänään</h1>
            <livewire:play.teacher-component></livewire:user.topics-component>
            @if ($activeTeacherId)
                <livewire:play.topic-component :activeTeacherId="$activeTeacherId" :key="'$activeTeacherId'.$activeTeacherId"></livewire:user.topics-component> 
                @if ($activeTopicId)
                    <label><input type="radio" wire:model="difficulty" value="5" /> 5 Kysymystä </label>
                    <label><input type="radio" wire:model="difficulty" value="10" checked/> 10 Kysymystä </label>
                    <label><input type="radio" wire:model="difficulty" value="15"/> 15 Kysymystä </label>
                    <button wire:click="next">Seurava</button>                    
                @endif
            @endif
        @break

        @case("reg")
        <h1>Valitettu aihe {{ $activeTopicName }}</h1>
        <h1>Kuka sinä olet</h1>
            <form wire:submit='next'>                
                <label for="playerName" class="form-label">Nimi</label>
                <input type="text" wire:model="playerName" class="form-control" id="playerName">
                <input type="submit" value="Seurava">
            </form>
        @break
        
        @case("play")
            <livewire:play.questions-component :activeTopicId="$activeTopicId" :difficulty="$difficulty">
        @break
        
        @case("score")
            <livewire:play.score-component :activeTopicId="$activeTopicId">
        @break

    @endswitch
    
    @json($this)
    
    
</div>
