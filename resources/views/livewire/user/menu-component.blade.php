<div>
    @guest
        <a wire:navigate href="{{ route('auth') }}" class="nav-link">Kirjaudu</a>
    @endguest

    @auth
        <a wire:navigate href="{{ route('logout') }}" class="nav-link">Kirjaudu ulos</a>
    @endauth
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
</div>