<tr>
    <td>        
        <form wire:submit="saveQuestionName">
            <input wire:model.lazy="title" type="text" class="form-control" value="{{ $question->title }}">
            <input type="submit" class="btn btn-primary" value="Talenna">
        </form>
    </td>
    <td>
        <form wire:submit="deleteQuestion">
            <button type="submit" class="btn btn-primary">Poista</button>
        </form>
    </td>
    <td>
        <form wire:submit="activateQuestion">
            <button type="submit" class="btn btn-primary">Valitse</button>
        </form>
    </td>
</tr>