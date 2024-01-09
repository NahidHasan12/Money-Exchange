<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('admin/super_admin.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="{{ asset('admin/user.jpeg') }}" alt="Developer Nahid" />
            </div>
            <h4 class="name">Nahid</h4>
            {{-- <h4 class="name">{{ Auth::user()->name }}</h4> --}}
            <a href="{{ route('admin.logout') }}">
            {{-- <a href="{{ route('admin.logout') }}"> --}}
                {{ __('Logout') }}
            </a>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{ route('admin.home') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="{{ route('admin.create.user') }}">
                        <i class="fas fa-tachometer-alt"></i>User List
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
