<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="{{ url('dashboard') }}" class="nav-link d-flex align-items-center @if(Request::segment(1) === 'dashboard') active @endif">
            <i class="nav-icon bx bx-home-alt"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-header my-1">MENU UTAMA</li>
    <li class="nav-item">
        <a href="{{ url('daftar-pelanggan') }}" class="nav-link d-flex align-items-center @if(Request::segment(1) === 'daftar-pelanggan') active @endif">
            <i class="nav-icon bx bx-group"></i>
            <p>Daftar Pelanggan</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('verification-request') }}" class="nav-link d-flex align-items-center @if(Request::segment(1) === 'verification-request') active @endif">
            <i class="nav-icon bx bx-repost"></i>
            <p>Verification Request
                {{-- <span class="right badge badge-danger">New</span> --}}
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link d-flex align-items-center">
                    <p>New</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link d-flex align-items-center">
                    <p>Process</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link d-flex align-items-center">
                    <p>List</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{ url('verification-order') }}" class="nav-link d-flex align-items-center @if(Request::segment(1) === 'verification-order') active @endif">
            <i class="nav-icon bx bxs-inbox"></i>
            <p>Verification Order
                {{-- <span class="right badge badge-danger">New</span> --}}
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('laporan-surveyor') }}" class="nav-link d-flex align-items-center @if(Request::segment(1) === 'laporan-surveyor') active @endif">
            <i class="nav-icon bx bx-file"></i>
            <p>Laporan Surveyor
                {{-- <span class="right badge badge-danger">New</span> --}}
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="javascript:void(0)" class="nav-link d-flex align-items-center">
            <i class="nav-icon bx bx-data"></i>
            <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link d-flex align-items-center">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kode HS</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link d-flex align-items-center">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kamus KBLI</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link d-flex align-items-center">
            <i class="nav-icon bx bx-cog"></i>
            <p>Pengaturan Akun</p>
        </a>
    </li>
</ul>
