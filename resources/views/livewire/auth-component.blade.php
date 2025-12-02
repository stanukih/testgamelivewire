@push('styles')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endpush

<div class="main">
    <div class="login-cont">
        <div class="login-form">
            <form wire:submit="login">
                <h2>Kirjaudu sisään</h2>
                <input type="email" id="exampleInputEmail1" name="username" placeholder="Käyttäjätunnus" required wire:model="email">
                <input type="password" id="exampleInputPassword1" name="password" placeholder="Salasana" required wire:model="password">
                <button type="submit">Kirjaudu sisään</button>
            </form>
                <div class="login-alert">
                    @if (session()->has('message'))
                    {{ session('message') }}                                
                    @endif 
                </div>
        </div>
    </div>
</div>