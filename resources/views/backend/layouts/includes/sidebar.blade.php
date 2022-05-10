<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="img\myicon\icons8-jake-48.png" alt="home">
        </div>
        <div class="sidebar-brand-text mx-3">Pollution Control System</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-home" aria-hidden="true"></i>
            <span>Homepage</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('userpost.show') }}">
            <i class="fa fa-table" aria-hidden="true"></i>
            <span>User Posting Index</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block"><li class="nav-item active">
        <a class="nav-link" href="{{ route('site.settings') }}">
            <i class="fa fa-gear" aria-hidden="true"></i>
            <span>Site Settings</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block"><li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fa fa-gear" aria-hidden="true"></i>
            <span>User Login Information</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
