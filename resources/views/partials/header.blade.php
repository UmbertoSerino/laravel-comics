<header class="header-top">
    <section class="container">
        <div class=logo>
            <img src="{{ Vite::asset('resources/assets/dc-logo.png') }}" alt="logo DC">
        </div>
        <nav>
            <ul>
                @for ($i = 0; $i < count($navBar); $i++) <li class="fs-5">{{ $navBar[$i] }}</li>
                    @endfor
            </ul>
        </nav>
    </section>
</header>