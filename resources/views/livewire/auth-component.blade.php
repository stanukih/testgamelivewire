<div class="container-md">

    @error('loginError')
        <div class="alert alert-danger">
            Sähkoposti + salasanaa ei löytynyt
        </div>
    @enderror
    <form wire:submit="login">        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sähköposti</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                wire:model="email" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Salasana</label>
            <input type="password" class="form-control" id="exampleInputPassword1" wire:model="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>