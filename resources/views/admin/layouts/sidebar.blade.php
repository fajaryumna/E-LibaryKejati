<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #d9d9d9; width:10rem!important">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('data_buku*') ? 'active' : '' }}" style="{{ Request::is('data_buku*')||Request::is('edit_buku*') ? 'background-color: #B7B7B7BF; margin: 10px 15px 10px 0; border-radius: 0 20px 20px 0' : '' }}">
        <a class="nav-link" href="/data_buku" style="color: black;">
            {{-- <i class="fas fa-user-injured"></i> --}}
            🕮
            <span>Daftar Buku</span></a>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('create_buku*') ? 'active' : '' }}" style="{{ Request::is('create_buku*') ? 'background-color: #B7B7B7BF; margin: 10px 15px 10px 0; border-radius: 0 20px 20px 0' : '' }}">
        <a class="nav-link" href="/create_buku" style="color: black;">
            {{-- <i class="fas fa-user-md"></i> --}}
            🕮
            <span>Entri Buku</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ Request::is('data_peminjaman*') ? 'active' : '' }}" style="{{ Request::is('data_peminjaman*') ? 'background-color: #B7B7B7BF; margin: 10px 15px 10px 0; border-radius: 0 20px 20px 0' : '' }}">
        <a class="nav-link" href="/data_peminjaman" style="color: black;">
            <i class="fas fa-poll-h" style="color: black;"></i>
            <span>Peminjaman</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->