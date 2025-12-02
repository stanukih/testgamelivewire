<tr>
    <td>        
        <form wire:submit="saveQuestionName">
            <input wire:model.lazy="title" type="text" class="form-control" value="{{ $question->title }}">
            <td>
            <button type="submit" class="btn btn-outline-secondary btn-icon">
            <span class="material-icons">mode_edit</span>
            </button>
            <td>
        </form>
    </td>
    <td>
        <form wire:submit="deleteQuestion">
            <button type="submit" class="btn btn-outline-danger btn-icon">
            <span class="material-icons">remove_circle_outline</span>
            </button>
        </form>
    </td>
    <td>
        <form wire:submit="activateQuestion">
            <button type="submit" class="btn btn-outline-primary btn-icon">
            <span class="material-icons">build</span>
            </button>
        </form>
    </td>
</tr>