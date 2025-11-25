<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form wire:submit='savePassword'>

        <label for="newPassword" class="form-label">Uusi salasana</label>
        <input type="text" wire:model='password' id='newPassword' class="form-control">
        <label for="newPasswordRe" class="form-label">Uusi salasana</label>
        <input type="text" wire:model='passwordRe' id='newPasswordRe' class="form-control">
        <button type="submit" class="btn btn-primary">Päivitä salasana</button>
    </form>
</div>