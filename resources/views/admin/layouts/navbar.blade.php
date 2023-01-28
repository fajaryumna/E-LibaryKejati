<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light topbar static-top shadow" style="background-color: #D98E04">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li>LOGO</li>
        <li class="nav-item dropdown no-arrow">
            {{-- <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Eko</span>
                <img class="img-profile rounded-circle" src="/img/undraw_profile.svg">
            </a> --}}
            <form action="" method="post">
                @csrf
                <a href="#" type="submit" class="dropdown-item"
                 data-toggle="modal" data-target="#logoutModal"
                 style="margin-right: 10px;">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </form>
            <!-- Dropdown - User Information -->
            {{-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <form action="" method="post">
                    @csrf
                    <a href="#" type="submit" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </form>
            </div> --}}
        </li>
    </ul>

</nav>
<!-- End of Topbar -->