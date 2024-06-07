<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
                <img src="{{ asset('assets/backend/images/logos/logo-removebg-preview.png') }}" width="120" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="hide-menu">Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.slider.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Slider</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.link.index') }}">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Link</span>
                    </a>
                </li>
                <div class="dropdown mt-3">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>
                            <i class="ti ti-users text-white me-2 fs-5"></i>
                        </span>
                        Employees
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('admin.designation.index') }}">Designation</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.department.index') }}">Department</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.employee.index') }}">Employee</a></li>
                    </ul>
                </div>

                <li class="sidebar-item mt-3">
                    <a class="sidebar-link" href="{{ route('admin.officeSetting.index') }}">
                        <span>
                            <i class="ti ti-users  fs-5"></i>
                        </span>
                        <span class="hide-menu">OfficeSetting</span>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>