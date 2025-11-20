<tr>
    <td>
        <form wire:submit="saveTopicName()">
            <input wire:model.lazy="title" type="text" class="form-control" value="{{ $topic->title }}">
            <input type="submit" class="btn btn-primary" value="Talenna">
        </form>
    </td>
    <td>
        <form wire:submit="deleteTopic">
            <button type="submit" class="btn btn-primary">Poista</button>
        </form>
    </td>
    <td>
        <form wire:submit="activateTopic">
            <button type="submit" class="btn btn-primary">Valitse</button>
        </form>
    </td>
</tr>