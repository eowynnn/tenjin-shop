<header class="header" id="header">
    <nav class="nav container">
        <a href="/" class="nav__logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" />
        </a>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="/all-product" class="{{ request()->is('all-product') ? 'ilang' : 'nav__link' }}">All
                        Products</a>
                </li>
                <li class="{{ request()->is('/') ? 'ilang' : 'nav__item' }}">
                    <a href="/" class="nav__link">Home</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="#m1-o" id="m1-c">Contact</a>
                </li>

                <li class="nav__item">
                @auth
                    <a class="{{ request()->is(['login','regist']) ? 'ilang' : 'nav__link' }}" href="#m__drp" id="m__a">Hi, {{auth()->user()->name}}</a>
                @else
                    <a href="/login" class="{{ request()->is(['login','regist']) ? 'ilang' : 'nav__link' }}">Login</a>
                @endauth
                </li>
            </ul>
        </div>
    </nav>
</header>
