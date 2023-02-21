<!-- start: SIDEBAR -->
<div class="main-navigation navbar-collapse collapse">
    <!-- start: MAIN MENU TOGGLER BUTTON -->
    <div class="navigation-toggler">
        <i class="clip-chevron-left"></i>
        <i class="clip-chevron-right"></i>
    </div>
    <!-- end: MAIN MENU TOGGLER BUTTON -->
    <!-- start: MAIN NAVIGATION MENU -->
    <ul class="main-navigation-menu">

        @if (Auth::user()->role == 'admin')
        <!-- start: ADMIN -->
        <li class="{{ Request::segment(1) === 'dashboard-pemohon' ? 'active' : '' }}">
            <a href="/dashboard-pemohon"><i class="clip-home-3"></i>
                <span class="title"> Dashboard </span><span class="selected"></span>
            </a>
        </li>
        <li class="menu-header">
            <a class="menu-header">
                <span class="title"> Data Master </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'kbli' ? 'active' : '' }}">
            <a href="{{ route('kbli.index') }}">
                <i class="clip-code"></i>
                <span class="title"> Kode KBLI </span>
                <span class="selected"></span>
            </a>
        </li>
        <li >
            <a href="javascript:void(0)">
                <i class="clip-file"></i>
                <span class="title"> Dokumen </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="menu-header">
            <a class="menu-header">
                <span class="title"> Data Pengguna </span>
                <span class="selected"></span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <i class="clip-user-4"></i>
                <span class="title"> Pengawas </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'petugas' ? 'active' : '' }}">
            <a href="{{ route('petugas.index')}}">
                <i class="clip-user-5"></i>
                <span class="title"> Petugas </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="menu-header">
            <a class="menu-header">
                <span class="title"> Data Permohonan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'perusahaan-pemohon' ? 'active' : '' }}">
            <a href="/perusahaan-pemohon"><i class="clip-pencil"></i>
                <span class="title"> Perusahaan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'kendaraan-pemohon' ? 'active' : '' }}">
            <a href="/kendaraan-pemohon"><i class="clip-truck"></i>
                <span class="title"> Angkutan </span><span class="selected"></span>
            </a>
        </li>
        <!-- end: ADMIN -->

        @elseif (Auth::user()->role == 'petugas')
        <!-- start: PETUGAS -->
        <li class="{{ Request::segment(1) === 'dashboard-pemohon' ? 'active' : '' }}">
            <a href="/dashboard-pemohon"><i class="clip-home-3"></i>
                <span class="title"> Dashboard </span><span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'dashboard-pemohon' ? 'active' : '' }}">
            <a href="/dashboard-pemohon"><i class="clip-user-3"></i>
                <span class="title"> Data Diri </span><span class="selected"></span>
            </a>
        </li>
        <li class="menu-header">
            <a class="menu-header">
                <span class="title"> Data Permohonan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'perusahaan-pemohon' ? 'active' : '' }}">
            <a href="/perusahaan-pemohon"><i class="clip-pencil"></i>
                <span class="title"> Perusahaan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'kendaraan-pemohon' ? 'active' : '' }}">
            <a href="/kendaraan-pemohon"><i class="clip-truck"></i>
                <span class="title"> kendaraan </span><span class="selected"></span>
            </a>
        </li>
        <!-- end: PETUGAS -->

        @elseif (Auth::user()->role == 'pengawas')
        <!-- start: PENGAWAS -->
        <li class="{{ Request::segment(1) === 'dashboard-pemohon' ? 'active' : '' }}">
            <a href="/dashboard-pemohon"><i class="clip-home-3"></i>
                <span class="title"> Dashboard </span><span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'dashboard-pemohon' ? 'active' : '' }}">
            <a href="/dashboard-pemohon"><i class="clip-user-3"></i>
                <span class="title"> Data Diri </span><span class="selected"></span>
            </a>
        </li>
        <li class="menu-header">
            <a class="menu-header">
                <span class="title"> Data Penerbitan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'perusahaan-pemohon' ? 'active' : '' }}">
            <a href="/perusahaan-pemohon"><i class="clip-pencil"></i>
                <span class="title"> Perusahaan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'kendaraan-pemohon' ? 'active' : '' }}">
            <a href="/kendaraan-pemohon"><i class="clip-truck"></i>
                <span class="title"> kendaraan </span><span class="selected"></span>
            </a>
        </li>
        <!-- end: PENGAWAS -->

        @elseif (Auth::user()->role == 'pemohon')
        <!-- start: PEMOHON -->
        <li class="{{ Request::segment(1) === 'dashboard-pemohon' ? 'active' : '' }}">
            <a href="/dashboard-pemohon"><i class="clip-home-3"></i>
                <span class="title"> Dashboard </span><span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'dashboard-pemohon' ? 'active' : '' }}">
            <a href="/dashboard-pemohon"><i class="clip-user-3"></i>
                <span class="title"> Data Diri </span><span class="selected"></span>
            </a>
        </li>
        <li class="menu-header">
            <a class="menu-header">
                <span class="title"> Data Permohonan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'perusahaan-pemohon' ? 'active' : '' }}">
            <a href="/perusahaan-pemohon"><i class="clip-pencil"></i>
                <span class="title"> Perusahaan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'kendaraan-pemohon' ? 'active' : '' }}">
            <a href="/kendaraan-pemohon"><i class="clip-truck"></i>
                <span class="title"> kendaraan </span><span class="selected"></span>
            </a>
        </li>
        <!-- end: PEMOHON -->
        @endif

    </ul>
    <!-- end: MAIN NAVIGATION MENU -->
</div>
<!-- end: SIDEBAR -->
