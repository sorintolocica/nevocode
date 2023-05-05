<nav id="sidebar">
    <div class="sidebar-header">
        <img src="https://res.cloudinary.com/net-ninja/image/upload/v1616052315/Net%20Ninja%20Pro/no-circle-white-logo_gwmg67.png" alt="Logo NevoCode">
    </div>

    <ul class="list-unstyled components">
        @auth
            <li>
                <p class="text-white mb-0"><i class="fas fa-user"></i> {{ auth()->user()->name }}</p>
            </li>
            <li>
                <a href="{{ route('logout') }}" class="download" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Deconectare
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endauth
        @guest
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="{{ route('login') }}" class="download">
                        <i class="fas fa-sign-in-alt"></i> Autentificare
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="article">
                        <i class="fas fa-user-plus"></i> Înregistrare
                    </a>
                </li>
            </ul>
        @endguest
    </ul>

    <ul class="list-unstyled components">
        <li class="active">
        <li>
            <a href="/"><i class="fas fa-home"></i> Acasa</a>
        </li>
        </li>
        <li>
            <a href="/about"><i class="fas fa-info-circle"></i> Despre noi</a>
        </li>
        <li>
            <a href="/courses"><i class="fas fa-book"></i> Cursurile noastre</a>
        </li>
        <li>
            <a href="#"><i class="fas fa-comments"></i> Părerile clienților</a>
        </li>
        <li>
            <a href="#"><i class="fas fa-envelope"></i> Contactează-ne</a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="#" class="article">
                <img class="discord-icon" src="./assets/images/discord.png" alt="Discord">
                Discord
            </a>
        </li>

    </ul>
</nav>
