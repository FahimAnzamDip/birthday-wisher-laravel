<header class="app-header">
    <a class="app-header__logo" href="{{ url('/') }}">Tiptop Plus</a>
    <!-- Sidebar toggle button-->
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown">
            <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                <i class="fa fa-user fa-lg pr-1"></i> <strong>{{ Auth::user()->name }}</strong>
            </a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <!--<li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                <li>-->
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item" href=""><i class="fa fa-sign-out fa-lg"></i> Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</header>
