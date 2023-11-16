<header class="app-header">
    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">
        <!-- Start::header-content-left -->
        <div class="header-content-left">
            <!-- Start::header-element -->
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="index.html" class="header-logo">
                        <img src="{{ asset('/assets/images/desktop-logo.png') }}" alt="logo" class="desktop-logo" />
                        <img src="{{ asset('/assets/images/toggle-logo.png') }}" alt="logo" class="toggle-logo" />
                        <img src="{{ asset('/assets/images/desktop-white.png') }}" alt="logo"
                            class="desktop-white" />
                        <img src="{{ asset('/assets/images/toggle-white.png') }}" alt="logo" class="toggle-white" />
                    </a>
                </div>
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link -->
                <a aria-label="Hide Sidebar"
                    class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                    data-bs-toggle="sidebar" href="javascript:void(0);">
                    <i class="header-icon fe fe-align-left"></i>
                </a>
                <div class="main-header-center d-none d-lg-block">
                    <input class="form-control" placeholder="Search for anything..." type="search" />
                    <button class="btn">
                        <i class="fa fa-search d-none d-md-block"></i>
                    </button>
                </div>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->
        </div>
        <!-- End::header-content-left -->
        <!-- Start::header-content-right -->
        <div class="header-content-right">
            <div class="header-element Search-element d-block d-lg-none">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                    data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="header-link-icon">
                        <path
                            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z">
                        </path>
                    </svg>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu dropdown-menu-end Search-element-dropdown"
                    data-popper-placement="none">
                    <li>
                        <div class="input-group w-100 p-2">
                            <input type="text" class="form-control" placeholder="Search...." />
                            <div class="btn btn-primary">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Start::header-element -->
             
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <!-- End::header-element -->
            <!-- Start::header-element -->
             
            <!-- End::header-element -->
            <!-- Start::header-element -->
             
            <!-- End::header-element -->
            <!-- Start::header-element -->
             
            <!-- End::header-element -->
            <!-- Start::header-element -->
            
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element headerProfile-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <img src="{{ asset('/assets/images/6.jpg') }}" alt="img" width="37" height="37"
                        class="rounded-circle" />
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end main-profile-menu"
                    aria-labelledby="mainHeaderProfile">
                    <li>
                        <div class="main-header-profile bg-primary menu-header-content text-fixed-white">
                            <div class="my-auto">
                                <h6 class="mb-0 lh-1 text-fixed-white">Petey Cruiser</h6>
                                <span class="fs-11 op-7 lh-1">Premium Member</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="profile.html"><i
                                class="bx bx-user-circle fs-18 me-2 op-7"></i>Profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="editprofile.html"><i
                                class="bx bx-cog fs-18 me-2 op-7"></i>Edit Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex border-block-end" href="mail.html"><i
                                class="bx bxs-inbox fs-18 me-2 op-7"></i>Inbox</a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="chat.html"><i
                                class="bx bx-envelope fs-18 me-2 op-7"></i>Messages</a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex border-block-end" href="editprofile.html"><i
                                class="bx bx-slider-alt fs-18 me-2 op-7"></i>Account
                            Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="signin.html"><i
                                class="bx bx-log-out fs-18 me-2 op-7"></i>Sign Out</a>
                    </li>
                </ul>
            </div>


            <!-- End::header-element -->
        </div>
        <!-- End::header-content-right -->
    </div>
    <!-- End::main-header-container -->
</header>

<!-- <div class="app-header">
    <div class="app-header__logo">
        <div class="logo-src"><h4 style="text-align:left;font-weight: bold;line-height:20px;">LARAVEL</h4></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                <span>
                    <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img class="rounded-circle" src="{{ asset('assets/images/users/default.png') }}"
                                         alt="" width="42">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                     class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ URL::to('/admin/profile') }}"> <i
                                                class="fa fa-user fa-1x fa-fw"></i> Profile</a>
                                    <a class="dropdown-item" href="{{ URL::to('/admin/change_password') }}"> <i
                                                class="fa fa-lock fa-1x fa-fw"></i> Change Password</a>
                                    <a class="dropdown-item" href="{{ URL::to('/admin_login/logout') }}"> <i
                                                class="fa fa-sign-out-alt fa-1x fa-fw"></i> Logout</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{ Auth::user()->name }}
                            </div>
                            <div class="widget-subheading">
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
