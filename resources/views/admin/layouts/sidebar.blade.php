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
        <nav class="sidebar-nav scroll-sidebar " data-simplebar="">
            <ul id="sidebarnav">

                <li class="nav-small-cap ">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <a class="text-decoration-none text-dark fs-6" href="{{ route('admin.dashboard') }}">
                        <span class="hide-menu ">ड्यासबोर्ड</span>
                    </a>
                </li>
                <hr>
                <li class="sidebar-item">
                    <a class="sidebar-link text-dark  text-decoration-none " href="{{ route('admin.officeSetting.index') }}">
                        <span>
                            <i class="ti ti-settings "></i>
                        </span>
                        <span class="hide-menu">कार्यालय सेटिङ</span>
                    </a>
                </li>
                <li class="sidebar-item mt-2">
                    <a class="sidebar-link text-decoration-none" href="{{ route('admin.introduction.index') }}">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu ">परिचय</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a class="sidebar-link text-decoration-none" href="{{ route('admin.slider.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-slideshow "></i>
                        </span>
                        <span class="hide-menu">स्लाइडर</span>
                    </a>
                </li>
                <button class="btn dropdown-toggle mt-2 " type="button" data-toggle="collapse" data-target="#dropdown-container" aria-expanded="false">
                    <span>
                        <i class="ti ti-users me-2"></i>
                    </span>
                    <span class="hide-menu ">कर्मचारीहरु</span>

                </button>
                <div class="collapse" id="dropdown-container">
                    <ul class="list-group">
                        <li class="sidebar-item">
                            <a class="sidebar-link text-decoration-none" href="{{ route('admin.employee.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">कर्मचारी</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link text-decoration-none" href="{{ route('admin.department.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-building"></i>
                                </span>
                                <span class="hide-menu">विभाग</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link text-decoration-none" href="{{ route('admin.designation.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-building"></i>
                                </span>
                                <span class="hide-menu">पद</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <button class="btn dropdown-toggle mt-2 " type="button" data-toggle="collapse" data-target="#dropdown-container1" aria-expanded="false">
                    <span>
                        <i class="ti ti-article me-2"></i>
                    </span>
                    <span class="hide-menu">सूचना</span>

                </button>
                <div class="collapse" id="dropdown-container1">
                    <ul class="list-group">
                        <li class="sidebar-item">
                            <a class="sidebar-link text-decoration-none" href="{{ route('admin.information.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">वर्ग थाप्नुहोस</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link text-decoration-none" href="{{ route('admin.news.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-building"></i>
                                </span>
                                <span class="hide-menu">सूचना</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="btn dropdown-toggle mt-2 " type="button" data-toggle="collapse" data-target="#dropdown-container2" aria-expanded="false">
                    <span>
                        <i class="ti ti-article me-2"></i>
                    </span>
                    <span class="hide-menu">प्रकाशन</span>

                </button>
                <div class="collapse" id="dropdown-container2">
                    <ul class="list-group">
                        <li class="sidebar-item">
                            <a class="sidebar-link text-decoration-none" href="{{ route('admin.document.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">वर्ग थाप्नुहोस</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link text-decoration-none" href="{{ route('admin.publication.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">प्रकाशन</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="btn dropdown-toggle mt-2" type="button" data-toggle="collapse" data-target="#dropdown-container3" aria-expanded="false">
                    <span>
                        <i class="ti ti-gavel me-2"></i>
                    </span>
                    <span class="hide-menu">कानुन</span>

                </button>
                <div class="collapse" id="dropdown-container3">
                    <ul class="list-group">
                        <li class="sidebar-item">
                            <a class="sidebar-link text-decoration-none" href="{{ route('admin.lawCategory.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">वर्ग थाप्नुहोस</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link text-decoration-none" href="{{ route('admin.law.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">कानुन</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="sidebar-item mt-2">
                    <a class="sidebar-link text-decoration-none" href="{{ route('admin.feedback.index') }}">
                        <span>
                            <i class="ti ti-phone"></i>
                        </span>
                        <span class="hide-menu ">सम्पर्क</span>
                    </a>
                </li>
                <li class="sidebar-item mt-2">
                    <a class="sidebar-link text-decoration-none" href="{{ route('admin.link.index') }}">
                        <span>
                            <i class="ti ti-link "></i>
                        </span>
                        <span class="hide-menu ">लिङ्क</span>
                    </a>
                </li>

            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>