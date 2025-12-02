<tr>
    <td style="width: 70%">
        <form wire:submit="saveTopicName()">
            <input wire:model.lazy="title" type="text" class="form-control" value="{{ $topic->title }}">
            <td>
            <button type="submit" class="btn btn-outline-secondary btn-icon">
            <span class="material-icons">mode_edit</span>
            </button>
            <td>
        </form>
    </td>
    <td style="width: 10%">
        <form wire:submit="deleteTopic">
            <button type="submit" class="btn btn-outline-danger btn-icon">
            <span class="material-icons">remove_circle_outline</span>
            </button>
        </form>
    </td>
    <td  style="width: 10%">
        <form wire:submit="activateTopic">
            <button type="submit" class="btn btn-outline-primary btn-icon">
            <span class="material-icons">build</span>
            </button>
        </form>
    </td>
</tr>