<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Halaman Utama
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/barangs*') ? 'active' : '' }}" href="/dashboard/barangs">
                    <span data-feather="shopping-cart"></span>
                    Barang
                </a>
            </li>

            @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>
                        Administrator
                    </span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">
                            <span data-feather="users"></span>
                            Pengguna
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                            href="/dashboard/categories">
                            <span data-feather="file-text"></span>
                            Kategori
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/vbarangs*') ? 'active' : '' }}"
                            href="/dashboard/vbarangs">
                            <span data-feather="shopping-cart"></span>
                            Verifikasi Barang
                        </a>
                    </li>
                </ul>
            @endcan
        </ul>
    </div>
</nav>
