<div>
    <select wire:model.live="selectedTeacher" wire:change="selectTeacher">
        <option value="null" disabled>Valitse opettäjä</option>   
        @foreach ($teachers as $teacher)
            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>            
        @endforeach
    </select>
</div>