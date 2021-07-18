<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-header">MAIN MENU</li>
        <li class="nav-item">
        <a href="/" class="nav-link @yield('home_active')">
            <i class="nav-icon fas fa-home"></i>
            <p>Home</p>
        </a>
        </li>
        @can('manage_suppliers')
        <li class="nav-item">
            <a href="{{ route('suppliers.index') }}" class="nav-link {{ request()->is('suppliers*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-truck"></i>
                <p>Suppliers</p>
            </a>
        </li>
        @endcan
        @can('manage_barang')
        <li class="nav-item {{ request()->is('iphone*', 'samsung*', 'oppo*', 'vivo*', 'realme*', 'huawei*',
            'poco*', 'redmi*') ? 'menu-open' : '' }}">
            <a class="nav-link {{ request()->is('iphone*', 'samsung*', 'oppo*', 'vivo*', 'realme*', 'huawei*',
            'poco*', 'redmi*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-mobile"></i>
                <p>
                Handphone
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item @yield('barang_open')">
                    <a href="{{ route('iphone.index') }}" class="nav-link {{ request()->is('iphone*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-mobile-alt"></i>
                    <p>Iphone</p>
                    </a>
                </li>
                <li class="nav-item @yield('barang_open')">
                    <a href="{{ route('samsung.index') }}" class="nav-link {{ request()->is('samsung*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-mobile-alt"></i>
                    <p>Samsung</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('oppo.index') }}" class="nav-link {{ request()->is('oppo*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-mobile-alt"></i>
                    <p>Oppo</p>
                    </a>
                </li>
                <li class="nav-item @yield('barang_open')">
                    <a href="{{ route('vivo.index') }}" class="nav-link {{ request()->is('vivo*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-mobile-alt"></i>
                    <p>Vivo</p>
                    </a>
                </li>
                <li class="nav-item @yield('barang_open')">
                    <a href="{{ route('realme.index') }}" class="nav-link {{ request()->is('realme*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-mobile-alt"></i>
                    <p>Realme</p>
                    </a>
                </li>
                <li class="nav-item @yield('barang_open')">
                    <a href="{{ route('huawei.index') }}" class="nav-link {{ request()->is('huawei*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-mobile-alt"></i>
                    <p>Huawei</p>
                    </a>
                </li>
                <li class="nav-item @yield('xiaomi_open')">
                    <a href="#" class="nav-link {{ request()->is('poco*', 'redmi*') ? 'active' : '' }}">
                      <i class="nav-icon fas fa-mobile"></i>
                      <p>
                        Xiaomi
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item @yield('barang_open')@yield('xiaomi_open')">
                        <a href="{{ route('redmi.index') }}" class="nav-link {{ request()->is('redmi*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-mobile-alt"></i>
                          <p>Redmi</p>
                        </a>
                      </li>
                      <li class="nav-item @yield('barang_open')@yield('xiaomi_open')">
                        <a href="{{ route('poco.index') }}" class="nav-link {{ request()->is('poco*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-mobile-alt"></i>
                          <p>Poco</p>
                        </a>
                      </li>
                    </ul>
                </li>
            </ul>
        </li>
        @endcan
        @can('manage_karyawan')
        <li class="nav-item ">
            <a href="{{ route('karyawan.index') }}" class="nav-link {{ request()->is('karyawan*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-friends"></i>
                <p>Karyawan</p>
            </a>
        </li>
        @endcan
        @can('manage_users')
        <li class="nav-header">USER CONTROLL</li>
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ request()->is('users*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>user</p>
            </a>
        </li>
        @endcan
        @can('manage_roles')
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link {{ request()->is('roles*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-tag"></i>
                <p>Role</p>
            </a>
        </li>
        @endcan
    </ul>
</nav>
<!-- /.sidebar-menu -->

