<div>    
    <select wire:model.live="selectedTopic" wire:change="selectTopic">
        <option value="null" disabled>Valitse aihe</option> 
        @foreach ($topics as $topic)
            <option value="{{ $topic->id }}">{{ $topic->title }}</option>            
        @endforeach
    </select>
</div>