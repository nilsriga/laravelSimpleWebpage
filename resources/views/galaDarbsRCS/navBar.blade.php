<div class="navbar-fixed">
    <nav class="sidenav-trigger">
        <div class="nav-wrapper">
            <a href="/" class="brand-logo hide-on-small-and-down">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="{{{ (Request::is('/') ? 'active' : '') }}}"><a href="/">Home</a></li>
                @auth
                    <li class="{{{ (Request::is('logout') ? 'active' : '') }}}"><a href="/logout">Logout </a></li>
                    <li class="{{{ (Request::is('userData') ? 'active' : '') }}}"><a href="/userData">{{ucfirst(auth()->user()->name)}}'s Account</a></li>
                @else
                    <li class="{{{ (Request::is('login') ? 'active' : '') }}}"><a href="/login">Login</a></li>
                    <li class="{{{ (Request::is('register') ? 'active' : '') }}}"><a href="/register">Register</a></li>
                @endauth
                <li class="{{{ (Request::is('articles') ? 'active' : '') }}}"><a href="/articles">Articles</a></li>
                <li class="{{{ (Request::is('clicker') || Request::is('calculator') ? 'active' : '') }}}"><a class="dropdown-trigger" href="#!" data-target="dropdown1">Js things<i class="material-icons right">arrow_drop_down</i></a></li>
                <li class="{{{ (Request::is('chat') ? 'active' : '') }}}"><a href="/chat">Chat</a></li>
                <li class="{{{ (Request::is('aboutUs') ? 'active' : '') }}}"><a href="/aboutUs">About Us</a></li>

                {{-- @if (Route::has('login'))
                    @auth
                    <li class="{{{ (Request::is('register') ? 'active' : '') }}}"><a href="/register">Your Data</a></li>
                    @else
                    <li class="{{{ (Request::is('register') ? 'active' : '') }}}"><a href="/register">Register</a></li>
                    @endauth
                @endif --}}
            </ul>
        </div>
    </nav>
</div>

<ul id="dropdown1" class="dropdown-content">
    <li><a href="/clicker">Clicker</a></li>
    <li><a href="/calculator">Calculator</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
    <li><a href="/clicker">Clicker</a></li>
    <li><a href="/calculator">Calculator</a></li>
</ul>

<ul class="sidenav" id="mobile-demo">
    <li class="{{{ (Request::is('home') || Request::is('/') ? 'active' : '') }}}"><a href="/">Home</a></li>
    @auth
    <li class="{{{ (Request::is('logout') ? 'active' : '') }}}"><a href="logout">Logout </a></li>
    <li class="{{{ (Request::is('userData') ? 'active' : '') }}}"><a href="userData">Your Account</a></li>
    @else
    <li class="{{{ (Request::is('login') ? 'active' : '') }}}"><a href="login">Login</a></li>
    <li class="{{{ (Request::is('register') ? 'active' : '') }}}"><a href="register">Register</a></li>
    @endauth
    <li class="{{{ (Request::is('articles') ? 'active' : '') }}}"><a href="articles">Articles</a></li>
    <li class="{{{ (Request::is('clicker') || Request::is('calculator') ? 'active' : '') }}}"><a class="dropdown-trigger" href="#!" data-target="dropdown2">Js things<i class="material-icons right">arrow_drop_down</i></a></li>
    <li class="{{{ (Request::is('chat') ? 'active' : '') }}}"><a href="chat">Chat</a></li>
    <li class="{{{ (Request::is('register') ? 'active' : '') }}}"><a href="register">Register</a></li>
    <li class="{{{ (Request::is('aboutUs') ? 'active' : '') }}}"><a href="aboutUs">About Us</a></li>
</ul>