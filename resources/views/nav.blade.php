<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <i class="fas fa-warehouse"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-left small">
            Silambat
            <br />
            Expres
        </div>
    </a>

    <hr class="sidebar-divider my-0" />

    <li class="nav-item {{ ($active === " home") ? 'active' : '' }}">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>
    @if (Session::get('level_user') === "administrator")
    <li class="nav-item {{ ($active === " data-pegawai") ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataMahasiswa" aria-expanded="true"
            aria-controls="dataMahasiswa">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Pegawai dan Divisi</span>
        </a>
        <div id="dataMahasiswa" class="collapse" aria-labelledby="dataMahasiswa" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/idatpeg">Data Pegawai</a>
                <a class="collapse-item" href="/idatdiv">Data Divisi</a>
            </div>
        </div>
    </li>

    <li class="nav-item {{ ($active === " rekapan" ) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataDosen" aria-expanded="true"
            aria-controls="collapsedataDosenTwo">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Rekapan pengiriman</span>
        </a>
        <div id="dataDosen" class="collapse" aria-labelledby="dataDosen" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/irekdat">Rekapan Data</a>
                <a class="collapse-item" href="/idatpengirim">Pengirim Surat</a>
            </div>
        </div>
    </li>
    @endif

    <li class="nav-item {{ ($active === " Laporan" ) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true"
            aria-controls="laporan">
            <i class="fas fa-fw fa-file"></i>
            <span>Laporan</span>
        </a>
        <div id="laporan" class="collapse" aria-labelledby="laporan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/showdatpeg">Data Pegawai</a>
                <a class="collapse-item" href="/showdatdiv">Data Divisi</a>
                <a class="collapse-item" href="/showrekdat">Data Rekapan Surat</a>
                <a class="collapse-item" href="/showdatpengirim">Data Pengiriman Surat</a>
            </div>
        </div>
    </li>

    @if (Session::get('level_user') === "administrator")
    <li class="nav-item {{ ($active ===" user" ) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user" aria-expanded="true"
            aria-controls="user">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span>
        </a>
        <div id="user" class="collapse" aria-labelledby="adduser" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/showuser">Data User</a>
                <a class="collapse-item" href="/adduser">Input User</a>
            </div>
        </div>
    </li>
    @endif

    <li class="nav-item">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-link btn btn-link">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span>
            </button>
        </form>
    </li>

    <hr class="sidebar-divider d-none d-md-block" />
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>