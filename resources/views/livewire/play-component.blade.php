<div>
    @switch ($state)

        @case('start')
        test
            <livewire:play.teacher-component></livewire:user.topics-component>
            @if ($activeTeacherId)
                <livewire:play.topic-component :activeTeacherId="$activeTeacherId"></livewire:user.topics-component>          
            @endif
        @break

        @case('reg')
        <h1>1</h1>
            
        @break
        
        @case('play')
            <h1>1</h1>
        @break
        
        @case('score')
            <h1>1</h1>
        @break

    @endswitch
    <h1>play</h1>
    @json($this)
    
    
</div>
