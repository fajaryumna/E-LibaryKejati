<!-- Topbar -->
<div style="display:flex; justify-content: space-between; align-items: center;
     padding:0 30px; height:70px; background-color: #D98E04;">
    <img src="images/logo-kejati.png" width="17%">
    <form action="{{ route('logout') }}" method="post" class="d-none" s>
        @csrf
        <a type="submit" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" style="color: black;"></i>
            Logout
        </a>
    </form>

</div>
{{-- <nav class="navbar navbar-expand navbar-light topbar static-top shadow" style="background-color: #D98E04">


    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav" style="display: flex; justify-content: space-between; margin:auto 10px;">
        <!-- Nav Item - User Information -->
        <li>LOGO</li>
        <li class="nav-item dropdown no-arrow">
            <form action="" method="post">
                @csrf
                <a href="#" type="submit" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" style="color: black;"></i>
                    Logout
                </a>
            </form>
        </li>
    </ul>

</nav> --}}
<!-- End of Topbar -->