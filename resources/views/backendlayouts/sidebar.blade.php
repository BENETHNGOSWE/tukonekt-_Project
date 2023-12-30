<div class="app-menu">
        <!-- Sidebar -->

        <div class="navbar-vertical navbar nav-dashboard">
            <div class="h-100" data-simplebar>
                <!-- Brand logo -->
                <a class="navbar-brand" href="index.html">
                    <h3>DASHBOARD</h3>
                    <!-- <img src="assets/images/brand/logo/logo-2.svg" alt="dash ui - bootstrap 5 admin dashboard template"> -->
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link  " href="{{ route('dashboard')}}">
                            <i data-feather="home" class="nav-icon me-2 icon-xxs"> </i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link   collapsed  " href="#!" data-bs-toggle="collapse" data-bs-target="#navProject" aria-expanded="false" aria-controls="navProject">
                            <i class="nav-icon me-2 icon-xxs" data-feather="file"></i> Members
                        </a>
                        <div id="navProject" class="collapse  " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('list.dashboard')}}">
                                        Registered List
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " href="{{ URL('formbuilder') }}">

                            <i data-feather="folder-plus" class="nav-icon me-2 icon-xxs"> </i>Create Form
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " href="{{ URL('form-builder') }}">

                            <i data-feather="folder-plus" class="nav-icon me-2 icon-xxs"> </i>List Form
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " href="{{ URL('form-data') }}">

                            <i data-feather="folder-plus" class="nav-icon me-2 icon-xxs"> </i>Form Data
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " href="{{ route('attendance.table')}}">

                            <i data-feather="folder-plus" class="nav-icon me-2 icon-xxs"> </i>Attendance Data
                        </a>
                    </li>


                    <!-- Nav item -->

            </div>
        </div>
    </div>