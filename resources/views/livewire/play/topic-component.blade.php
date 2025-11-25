<div>
    <select wire:model.live="selectedTopic">
        @foreach ($topics as $topic)
            <option value="{{ $topic->id }}">{{ $topic->title }}</option>            
        @endforeach
    </select>
</div>