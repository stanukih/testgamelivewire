<div>
    
    <form wire:submit='savePassword'>
        
        <label for="newPassword" class="form-label">Uusi salasana</label>
        <input type="text" wire:model='password' id='password' class="form-control" >
        <label for="newPasswordRe" class="form-label">Uusi salasana</label>
        <input type="text" wire:model='passwordRe' id='passwordRe' class="form-control" >
        <button type="submit" class="btn btn-primary">Päivitä salasana</button>
    </form>
</div>
