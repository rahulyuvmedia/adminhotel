<aside class="app-sidebar sticky" id="sidebar">

    <div class="main-sidebar-header">
        <a href="{{ URL::to('/admin/dashboard') }}" class="header-logo">
            <img src="{{ asset('/assets/images/desktop-logo.png') }}" alt="logo" class="desktop-logo" />
            <img src="{{ asset('/assets/images/toggle-logo.png') }}" alt="logo" class="toggle-logo" />
            <img src="{{ asset('/assets/images/desktop-white.png') }}" alt="logo" class="desktop-white" />
            <img src="{{ asset('/assets/images/toggle-white.png') }}" alt="logo" class="toggle-white" />
        </a>
    </div>
    <!-- End::main-sidebar-header -->
    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: -8px 0px -80px">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                        style="height: 100%; overflow: hidden scroll">
                        <div class="simplebar-content" style="padding: 8px 0px 80px">
                            <!-- Start::nav -->
                            <nav class="main-menu-container nav nav-pills flex-column sub-open active">
                                <div class="slide-left active d-none" id="slide-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z">
                                        </path>
                                    </svg>
                                </div>
                                <ul class="main-menu active" style="margin-left: 0px; margin-right: 0px">
                                    <!-- Start::slide__category -->
                                    <li class="slide__category">
                                        <span class="category-name"></span>
                                    </li>
                                    <!-- End::slide__category -->
                                    <!-- Start::slide -->

                                    
                                    <li class="slide active">
                                        <a href="{{ URL::to('/admin/dashboard') }}" class="side-menu__item active">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Dashboard</span>

                                        </a>
                                    </li>

                                    <li  class='zoom-on-hover'>
                                         <a href="{{ URL::to('/admin/master') }}"  class="side-menu__item " Style="color:red">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z">
                                                </path>
                                            </svg>
                                         <span class="side-menu__label">Master</span>
                                         </a>
                                    </li> 

                                    <li  class='zoom-on-hover'>
                                    <a href="{{ URL::to('/admin/submaster') }}"  class="side-menu__item " Style="color:red">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z">
                                                </path>
                                            </svg>
                                       
                                         <span class="side-menu__label">SubMaster</span>

                                        </a>
                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide__category -->
                                    <li class="slide__category">
                                        <span class="category-name">Reservation Management</span>
                                    </li>
                                    <!-- End::slide__category -->
                                    <!-- Start::slide -->

                                    <!-- End::slide -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Charts</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1" style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 294px);
                            " data-popper-placement="bottom">
                                            <li class="slide side-menu__label1">
                                                <a href="javascript:void(0);">Charts</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child2">
                                                    <li class="slide">
                                                        <a href="apex-line-charts.html" class="side-menu__item">Line
                                                            Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-area-charts.html" class="side-menu__item">Area
                                                            Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-column-charts.html" class="side-menu__item">Column
                                                            Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-bar-charts.html" class="side-menu__item">Bar
                                                            Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-mixed-charts.html" class="side-menu__item">Mixed
                                                            Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-rangearea-charts.html"
                                                            class="side-menu__item">Range Area Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-timeline-charts.html"
                                                            class="side-menu__item">Timeline Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-candlestick-charts.html"
                                                            class="side-menu__item">CandleStick Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-boxplot-charts.html"
                                                            class="side-menu__item">Boxplot Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-bubble-charts.html" class="side-menu__item">Bubble
                                                            Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-scatter-charts.html"
                                                            class="side-menu__item">Scatter Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-heatmap-charts.html"
                                                            class="side-menu__item">Heatmap Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-treemap-charts.html"
                                                            class="side-menu__item">Treemap Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-pie-charts.html" class="side-menu__item">Pie
                                                            Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-radialbar-charts.html"
                                                            class="side-menu__item">Radialbar Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-radar-charts.html" class="side-menu__item">Radar
                                                            Charts</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="apex-polararea-charts.html"
                                                            class="side-menu__item">Polararea Charts</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slide">
                                                <a href="chartjs-charts.html" class="side-menu__item">Chartjs
                                                    Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="echarts.html" class="side-menu__item">Echart Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide__category -->
                                    <li class="slide__category">
                                        <span class="category-name">Billing and Invoicing</span>
                                    </li>
                                    <!-- End::slide__category -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="{{ URL::to('/admin/rooms') }}" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Rooms</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>

                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide -->

                                    <!-- End::slide -->
                                    <!-- Start::slide -->

                                    <!-- End::slide -->
                                    <!-- Start::slide__category -->
                                    <li class="slide__category">
                                        <span class="category-name">User Managment</span>
                                    </li>
                                    
                                    <!-- End::slide__category -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="{{ URL::to('/admin/guest') }}" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path
                                                    d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Guests</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>

                                    </li>

                                    <li class="slide has-sub">
                                        <a href="{{ URL::to('/admin_login/logout') }}" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path
                                                    d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Logout</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>

                                    </li>


                                </ul>
                                <div class="slide-right d-none" id="slide-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                        </path>
                                    </svg>
                                </div>
                            </nav>
                            <!-- End::nav -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 954px"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden">
            <div class="simplebar-scrollbar" style="width: 0px; display: none"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible">
            <div class="simplebar-scrollbar" style="
                height: 591px;
                transform: translate3d(0px, 0px, 0px);
                display: block;
              ">
            </div>
        </div>
    </div>
    <!-- End::main-sidebar -->
</aside>


<!--
<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
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
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li>
                    <a href="{{ URL::to('/admin/dashboard') }}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/admin/users') }}">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Users
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/admin/blogs') }}">
                        <i class="metismenu-icon pe-7s-bookmarks"></i>
                        Blogs
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-menu"></i>
                        Examples
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li class="treeview">
                            <a href="{{ URL::to('/admin/passport') }}">
                                <i class="metismenu-icon"></i><span>Laravel Passport</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Admin Settings
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ URL::to('/admin/roles') }}">
                                <i class="metismenu-icon"></i>
                                Roles
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/admin/permissions') }}">
                                <i class="metismenu-icon"></i>
                                Permission
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/admin/settings') }}">
                                <i class="metismenu-icon pe-7s-tools"></i>
                                Settings
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{ URL::to('/admin/backups') }}">
                                <i class="metismenu-icon pe-7s-download"></i><span>Backup</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</div>

-->
<!-- /.sidebar -->
<script type="text/javascript">
    $(document).ready(function () {
        $('.app-sidebar__inner ul li').each(function () {
            if (window.location.href.indexOf($(this).find('a:first').attr('href')) > -1) {
                $(this).closest('ul').closest('li').attr('class', 'mm-active');
                $(this).addClass('mm-active').siblings().removeClass('mm-active');
            }
        });
    });
</script>