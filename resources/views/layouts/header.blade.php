  <!-- Top Bar Start -->
  <div class="topbar d-print-none">
        <div class="container-xxl">
            <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">    
        

                <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">                        
                    <li>
                        <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                            <i class="iconoir-menu-scale"></i>
                        </button>
                    </li> 
                    <li class="mx-3 welcome-text">
                        <h3 class="mb-0 fw-bold text-truncate">Good Morning, James!</h3>
                        <!-- <h6 class="mb-0 fw-normal text-muted text-truncate fs-14">Here's your overview this week.</h6> -->
                    </li>                   
                </ul>
                <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                    <li class="hide-phone app-search">
                        <form role="search" action="#" method="get">
                            <input type="search" name="search" class="form-control top-search mb-0" placeholder="Search here...">
                            <button type="submit"><i class="iconoir-search"></i></button>
                        </form>
                    </li>     
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/flags/us_flag.jpg" alt="" class="thumb-sm rounded-circle">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/us_flag.jpg" alt="" height="15" class="me-2">English</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="15" class="me-2">Spanish</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="15" class="me-2">German</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="15" class="me-2">French</a>
                        </div>
                    </li><!--end topbar-language-->
        
                    <li class="topbar-item">
                        <a class="nav-link nav-icon" href="javascript:void(0);" id="light-dark-mode">
                            <i class="icofont-moon dark-mode"></i>
                            <i class="icofont-sun light-mode"></i>
                        </a>                    
                    </li>
    
                    <li class="dropdown topbar-item">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="icofont-bell-alt"></i>
                            <span class="alert-badge"></span>
                        </a>
                        <div class="dropdown-menu stop dropdown-menu-end dropdown-lg py-0">
                        
                            <h5 class="dropdown-item-text m-0 py-3 d-flex justify-content-between align-items-center">
                                Notifications <a href="#" class="badge text-body-tertiary badge-pill">
                                    <i class="iconoir-plus-circle fs-4"></i>
                                </a>
                            </h5>
                            <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified mb-1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mx-0 active" data-bs-toggle="tab" href="#All" role="tab" aria-selected="true">
                                        All <span class="badge bg-primary-subtle text-primary badge-pill ms-1">24</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mx-0" data-bs-toggle="tab" href="#Projects" role="tab" aria-selected="false" tabindex="-1">
                                        Projects
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mx-0" data-bs-toggle="tab" href="#Teams" role="tab" aria-selected="false" tabindex="-1">
                                        Team
                                    </a>
                                </li>
                            </ul>
                            <div class="ms-0" style="max-height:230px;" data-simplebar>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="All" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">2 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-wolf fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">10 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-apple-swift fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Meeting with designers</h6>
                                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">40 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">                                                    
                                                    <i class="iconoir-birthday-cake fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">UX 3 Task complete.</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">1 hr ago</small>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-drone fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-user fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                    </div>
                                    <div class="tab-pane fade" id="Projects" role="tabpanel" aria-labelledby="projects-tab" tabindex="0">
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">40 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">                                                    
                                                    <i class="iconoir-birthday-cake fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">UX 3 Task complete.</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">1 hr ago</small>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-drone fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-user fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                    </div>
                                    <div class="tab-pane fade" id="Teams" role="tabpanel" aria-labelledby="teams-tab" tabindex="0">
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">1 hr ago</small>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-drone fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-user fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                    </div>
                                </div>
                            
                            </div>
                            <!-- All-->
                            <a href="pages-notifications.html" class="dropdown-item text-center text-dark fs-13 py-2">
                                View All <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>
    
                    <li class="dropdown topbar-item">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-lg rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0">
                            <div class="d-flex align-items-center dropdown-item py-2 bg-secondary-subtle">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                    <h6 class="my-0 fw-medium text-dark fs-13">William Martin</h6>
                                    <small class="text-muted mb-0">Front End Developer</small>
                                </div><!--end media-body-->
                            </div>
                            <div class="dropdown-divider mt-0"></div>
                            <small class="text-muted px-2 pb-1 d-block">Account</small>
                            <a class="dropdown-item" href="pages-profile.html"><i class="las la-user fs-18 me-1 align-text-bottom"></i> Profile</a>
                            <a class="dropdown-item" href="pages-faq.html"><i class="las la-wallet fs-18 me-1 align-text-bottom"></i> Earning</a>
                            <small class="text-muted px-2 py-1 d-block">Settings</small>                        
                            <a class="dropdown-item" href="pages-profile.html"><i class="las la-cog fs-18 me-1 align-text-bottom"></i>Account Settings</a>
                            <a class="dropdown-item" href="pages-profile.html"><i class="las la-lock fs-18 me-1 align-text-bottom"></i> Security</a>
                            <a class="dropdown-item" href="pages-faq.html"><i class="las la-question-circle fs-18 me-1 align-text-bottom"></i> Help Center</a>                       
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item text-danger" href="auth-login.html"><i class="las la-power-off fs-18 me-1 align-text-bottom"></i> Logout</a>
                        </div>
                    </li>
                </ul><!--end topbar-nav-->
            </nav>
            <!-- end navbar-->
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- leftbar-tab-menu -->
    <div class="startbar d-print-none">
        <!--start brand-->
        <div class="brand">
            <a href="index.html" class="logo">
            <span>
        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
    </span>
    <span class="">
        <img src="{{ asset('assets/images/logo-light.png') }}" alt="logo-large" class="logo-lg logo-light">
        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
    </span>
            </a>
        </div>
        <!--end brand-->
        <!--start startbar-menu-->
        <div class="startbar-menu" >
            <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                <div class="d-flex align-items-start flex-column w-100">
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-auto w-100">
                        <li class="menu-label pt-0 mt-0">
                            <!-- <small class="label-border">
                                <div class="border_left hidden-xs"></div>
                                <div class="border_right"></div>
                            </small> -->
                            <span>Main Menu</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="iconoir-home-simple menu-icon"></i>
                                <span>Dashboards</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarApplications" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApplications">
                                <i class="iconoir-view-grid menu-icon"></i>
                                <span>Party</span>
                            </a>
                            <div class="collapse " id="sidebarApplications">
                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="/add-party" class="nav-link ">Add Party</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a href="{{ route('parties.index') }}" class="nav-link ">View Party</a>
                                                </li><!--end nav-item-->
                                            </ul><!--end nav-->
                            </div><!--end startbarApplications-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarApplications" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApplications">
                                <i class="iconoir-view-grid menu-icon"></i>
                                <span>Memeber</span>
                            </a>
                            <div class="collapse " id="sidebarApplications">
                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="{{ route('members.create') }}" class="nav-link ">Add Memeber</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a href="{{ route('members.index') }}" class="nav-link ">View Memeber</a>
                                                </li><!--end nav-item-->
                                            </ul><!--end nav-->
                            </div><!--end startbarApplications-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarApplications" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApplications">
                                <i class="iconoir-view-grid menu-icon"></i>
                                <span>District / Division</span>
                            </a>
                            <div class="collapse " id="sidebarApplications">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                                            aria-expanded="false" aria-controls="sidebarAnalytics">                                        
                                            <span>District</span>
                                        </a>
                                        <div class="collapse " id="sidebarAnalytics">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="{{ route('districts.create') }}" class="nav-link ">Add District</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a href="{{ route('districts.index') }}" class="nav-link ">View District</a>
                                                </li><!--end nav-item-->
                                            </ul><!--end nav-->
                                        </div>
                                    </li><!--end nav-item-->                                
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button"
                                            aria-expanded="false" aria-controls="sidebarProjects">                                        
                                            <span>Division</span>
                                        </a>
                                        <div class="collapse " id="sidebarProjects">
                                        <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="{{ route('divisions.create') }}" class="nav-link ">Add Division</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a href="{{ route('divisions.index') }}" class="nav-link ">Add Division</a>
                                                </li><!--end nav-item-->
                                            </ul><!--end nav-->
                                        </div>
                                    </li><!--end nav-item-->                             
                                </ul><!--end nav-->
                            </div><!--end startbarApplications-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarApplications" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApplications">
                                <i class="iconoir-view-grid menu-icon"></i>
                                <span>Result</span>
                            </a>
                            <div class="collapse " id="sidebarApplications">
                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="{{ route('results.create') }}" class="nav-link ">Add Result</a>
                                                </li><!--end nav-item-->
                                            </ul><!--end nav-->
                            </div><!--end startbarApplications-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
    <a class="nav-link" href="#sidebarApplications" data-bs-toggle="collapse" role="button"
       aria-expanded="false" aria-controls="sidebarApplications">
        <i class="iconoir-view-grid menu-icon"></i>
        <span>Election Result</span>
    </a>
    <div class="collapse" id="sidebarApplications">
        <ul class="nav flex-column">
            @foreach($districts as $district)
                <!-- District Header -->
                <li class="nav-item">
                    <a class="nav-link" href="#district-{{ $district->id }}" data-bs-toggle="collapse"
                       role="button" aria-expanded="false" aria-controls="district-{{ $district->id }}">
                        {{ $district->district_name }}
                    </a>
                    <!-- Sub-header for divisions -->
                    <div class="collapse" id="district-{{ $district->id }}">
                        <ul class="nav flex-column">
                            @foreach($district->divisions as $division)
                                <li class="nav-item">
                                    <a href="{{ route('division.results', $division->id) }}" class="nav-link">
                                        {{ $division->division_name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</li>

                    </ul><!--end navbar-nav--->
                    
                </div>
            </div><!--end startbar-collapse-->
        </div><!--end startbar-menu-->    
    </div><!--end startbar-->
    <div class="startbar-overlay d-print-none"></div>
    <!-- end leftbar-tab-menu-->
