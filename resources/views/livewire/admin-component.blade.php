<div>
<div class="row">

    <div class="col">
        <h1>
            Luo uusi käyttäjä
        </h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form wire:submit="save">
            <div class="mb-3">
                <label for="inputName" class="form-label">Nimi</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputName"
                    wire:model="name">
            </div>
            <div class="mb-3">
                <label for="inputEmail1" class="form-label">Sähköposti</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail1"
                    wire:model="email">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <div class="col">
        <h1>
            Käyttäjän lista
        </h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Käyttäjän nimi</th>
                    <th scope="col">Sähköposti</th>
                    <th scope="col">Rooli</th>
                    <th scope="col">Toiminnot</th>
                </tr>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <div>{{ $user->name }}</div>
                        </td>
                        <td>
                            <div>{{ $user->email }}</div>
                        </td>
                        <td>
                            <div>{{ $user->role }}</div>
                        </td>
                        <td>
                            <form wire:submit="resetPassword({{ $user->id }})">
                                <button type="submit" class="btn btn-primary">Salasanan palautus</button>
                            </form>
                        </td>
                        @if ($user->isActive)
                            <td>
                                <form wire:submit="block({{ $user->id }})">
                                    <button type="submit" class="btn btn-primary">Estä</button>
                                </form>
                            </td>
                        @else
                            <td>
                                <form wire:submit="unblock({{ $user->id }})">
                                    <button type="submit" class="btn btn-primary">Aktivoi</button>
                                </form>
                            </td>
                        @endif
                        @if ($user->role != 'admin')
                            <td>
                                <form wire:submit="doAdmin({{ $user->id }})">
                                    <button type="submit" class="btn btn-primary">Ylläpittäjäksi</button>
                                </form>
                            </td>
                        @endif

                    </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
    </div>



</div>
<div>
        <h1>
            Salasanan päivittäminen
            <livewire:user.update-password-component>
        </h1>
    </div>
</div>