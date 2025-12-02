<div>
    <label for="teacherSelect">Valitse opettaja</label>
    <select class="select-style" wire:model.live="selectedTeacher" id="teacherSelect" wire:change="selectTeacher">
        <option value="null" disabled></option>   
        @foreach ($teachers as $teacher)
            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>            
        @endforeach
    </select>
</div>