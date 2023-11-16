<aside class="app-sidebar sticky" id="sidebar">

    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
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
                                        <span class="category-name">Main</span>
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
                                    <!-- End::slide -->
                                    <!-- Start::slide__category -->
                                    <li class="slide__category">
                                        <span class="category-name">Reservation Management</span>
                                    </li>
                                    <!-- End::slide__category -->
                                    <!-- Start::slide -->
                                    <li class="slide">
                                        <a href="icons.html" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path
                                                    d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z"
                                                    opacity=".3"></path>
                                                <circle cx="15.5" cy="9.5" r="1.5"></circle>
                                                <circle cx="8.5" cy="9.5" r="1.5"></circle>
                                                <path
                                                    d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Icons</span>
                                        </a>
                                    </li>
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
                                        <ul class="slide-menu child1"
                                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 294px);
                            "
                                            data-popper-placement="bottom">
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
                                                        <a href="apex-bubble-charts.html"
                                                            class="side-menu__item">Bubble Charts</a>
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
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Apps</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1"
                                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 388px);
                            "
                                            data-popper-placement="bottom">
                                            <li class="slide side-menu__label1">
                                                <a href="javascript:void(0);">Apps</a>
                                            </li>
                                            <li class="slide">
                                                <a href="cards.html" class="side-menu__item">Cards</a>
                                            </li>
                                            <li class="slide">
                                                <a href="draggable-cards.html" class="side-menu__item">Draggable
                                                    Cards</a>
                                            </li>
                                            <li class="slide">
                                                <a href="full-calendar.html" class="side-menu__item">Calendar</a>
                                            </li>
                                            <li class="slide">
                                                <a href="contacts.html" class="side-menu__item">Contacts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="notifications.html" class="side-menu__item">Notifications</a>
                                            </li>
                                            <li class="slide">
                                                <a href="widgets.html" class="side-menu__item">Widgets</a>
                                            </li>
                                            <li class="slide">
                                                <a href="widget-notification.html"
                                                    class="side-menu__item">Widget-notification</a>
                                            </li>
                                            <li class="slide">
                                                <a href="treeview.html" class="side-menu__item">Treeview</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">File Manager
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child2">
                                                    <li class="slide">
                                                        <a href="file-manager.html"
                                                            class="side-menu__item">File-Manager</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="file-manager-list.html"
                                                            class="side-menu__item">File-Manager-List</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="file-manager-details.html"
                                                            class="side-menu__item">File-Manager-details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"></path>
                                                <path
                                                    d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Elements</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1 mega-menu"
                                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 430px);
                            "
                                            data-popper-placement="bottom">
                                            <li class="slide side-menu__label1">
                                                <a href="javascript:void(0);">Elements</a>
                                            </li>
                                            <li class="slide">
                                                <a href="alerts.html" class="side-menu__item">Alerts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="avatars.html" class="side-menu__item">Avatar</a>
                                            </li>
                                            <li class="slide">
                                                <a href="breadcrumb.html" class="side-menu__item">Breadcrumb</a>
                                            </li>
                                            <li class="slide">
                                                <a href="buttons.html" class="side-menu__item">Buttons</a>
                                            </li>
                                            <li class="slide">
                                                <a href="buttongroup.html" class="side-menu__item">Button Group</a>
                                            </li>
                                            <li class="slide">
                                                <a href="badge.html" class="side-menu__item">Badge</a>
                                            </li>
                                            <li class="slide">
                                                <a href="dropdowns.html" class="side-menu__item">Dropdown</a>
                                            </li>
                                            <li class="slide">
                                                <a href="listgroup.html" class="side-menu__item">List Group</a>
                                            </li>
                                            <li class="slide">
                                                <a href="navbar.html" class="side-menu__item">Navbar</a>
                                            </li>
                                            <li class="slide">
                                                <a href="images-figures.html" class="side-menu__item">Images &amp;
                                                    Figures</a>
                                            </li>
                                            <li class="slide">
                                                <a href="pagination.html" class="side-menu__item">Pagination</a>
                                            </li>
                                            <li class="slide">
                                                <a href="popovers.html" class="side-menu__item">Popovers</a>
                                            </li>
                                            <li class="slide">
                                                <a href="progress.html" class="side-menu__item">Progress</a>
                                            </li>
                                            <li class="slide">
                                                <a href="spinners.html" class="side-menu__item">Spinners</a>
                                            </li>
                                            <li class="slide">
                                                <a href="typography.html" class="side-menu__item">Typography</a>
                                            </li>
                                            <li class="slide">
                                                <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                                            </li>
                                            <li class="slide">
                                                <a href="toasts.html" class="side-menu__item">Toasts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="tags.html" class="side-menu__item">Tags</a>
                                            </li>
                                            <li class="slide">
                                                <a href="navs-tabs.html" class="side-menu__item">Tabs</a>
                                            </li>
                                            <li class="slide">
                                                <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                                            </li>
                                            <li class="slide">
                                                <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 10 6.5 10s1.5.67 1.5 1.5S7.33 13 6.5 13zm3-4C8.67 9 8 8.33 8 7.5S8.67 6 9.5 6s1.5.67 1.5 1.5S10.33 9 9.5 9zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 6 14.5 6s1.5.67 1.5 1.5S15.33 9 14.5 9zm4.5 2.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.21-.64-1.67-.08-.09-.13-.21-.13-.33 0-.28.22-.5.5-.5H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9zm4 13h-1.77c-1.38 0-2.5 1.12-2.5 2.5 0 .61.22 1.19.63 1.65.06.07.14.19.14.35 0 .28-.22.5-.5.5-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.14 8 7c0 2.21-1.79 4-4 4z">
                                                </path>
                                                <circle cx="6.5" cy="11.5" r="1.5"></circle>
                                                <circle cx="9.5" cy="7.5" r="1.5"></circle>
                                                <circle cx="14.5" cy="7.5" r="1.5"></circle>
                                                <circle cx="17.5" cy="11.5" r="1.5"></circle>
                                            </svg>
                                            <span class="side-menu__label">Advanced Ui</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1"
                                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 472px);
                            "
                                            data-popper-placement="bottom">
                                            <li class="slide side-menu__label1">
                                                <a href="javascript:void(0);">Advanced Ui</a>
                                            </li>
                                            <li class="slide">
                                                <a href="accordions-collpase.html"
                                                    class="side-menu__item">Accordions</a>
                                            </li>
                                            <li class="slide">
                                                <a href="carousel.html" class="side-menu__item">Carousel</a>
                                            </li>
                                            <li class="slide">
                                                <a href="modals-closes.html" class="side-menu__item">Modals</a>
                                            </li>
                                            <li class="slide">
                                                <a href="timeline.html" class="side-menu__item">Timeline</a>
                                            </li>
                                            <li class="slide">
                                                <a href="sweet-alerts.html" class="side-menu__item">Sweet Alerts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="ratings.html" class="side-menu__item">Ratings</a>
                                            </li>
                                            <li class="slide">
                                                <a href="search.html" class="side-menu__item">Search</a>
                                            </li>
                                            <li class="slide">
                                                <a href="userlist.html" class="side-menu__item">Userlist</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Blog Pages
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child2">
                                                    <li class="slide">
                                                        <a href="blog.html" class="side-menu__item">Blog</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="blog-details.html" class="side-menu__item">Blog
                                                            Details</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="blog-post.html" class="side-menu__item">Blog Post</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slide">
                                                <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                                            </li>
                                            <li class="slide">
                                                <a href="placeholders.html" class="side-menu__item">Placeholders</a>
                                            </li>
                                            <li class="slide">
                                                <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide__category -->
                                    <li class="slide__category">
                                        <span class="category-name">User Managment</span>
                                    </li>
                                    <!-- End::slide__category -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="{{ URL::to('/admin/users') }}" class="side-menu__item">
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
                                        <ul class="slide-menu child1"
                                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 566px);
                            "
                                            data-popper-placement="bottom">
                                            <li class="slide side-menu__label1">
                                                <a href="javascript:void(0);">Menu Levels</a>
                                            </li>
                                            <li class="slide">
                                                <a href="javascript:void(0);" class="side-menu__item">Level-1</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Level-2
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child2">
                                                    <li class="slide">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Level-2-1</a>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Level-2-2
                                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child3">
                                                            <li class="slide">
                                                                <a href="javascript:void(0);"
                                                                    class="side-menu__item">Level-2-2-1</a>
                                                            </li>
                                                            <li class="slide">
                                                                <a href="javascript:void(0);"
                                                                    class="side-menu__item">Level-2-2-2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Forms</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>

                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Tables</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1"
                                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 702px);
                            "
                                            data-popper-placement="bottom">
                                            <li class="slide side-menu__label1">
                                                <a href="javascript:void(0);">Tables</a>
                                            </li>
                                            <li class="slide">
                                                <a href="tables.html" class="side-menu__item">Tables</a>
                                            </li>
                                            <li class="slide">
                                                <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                                            </li>
                                            <li class="slide">
                                                <a href="data-tables.html" class="side-menu__item">Data Tables</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide -->
                                    <li class="slide">
                                        <a href="landing-page.html" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M12 4.02C7.6 4.02 4.02 7.6 4.02 12S7.6 19.98 12 19.98s7.98-3.58 7.98-7.98S16.4 4.02 12 4.02zM11.39 19v-5.5H8.25l4.5-8.5v5.5h3L11.39 19z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M12 2.02c-5.51 0-9.98 4.47-9.98 9.98s4.47 9.98 9.98 9.98 9.98-4.47 9.98-9.98S17.51 2.02 12 2.02zm0 17.96c-4.4 0-7.98-3.58-7.98-7.98S7.6 4.02 12 4.02 19.98 7.6 19.98 12 16.4 19.98 12 19.98zM12.75 5l-4.5 8.5h3.14V19l4.36-8.5h-3V5z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Landing Page</span>
                                        </a>
                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path
                                                    d="M12 4C9.24 4 7 6.24 7 9c0 2.85 2.92 7.21 5 9.88 2.11-2.69 5-7 5-9.88 0-2.76-2.24-5-5-5zm0 7.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z">
                                                </path>
                                                <circle cx="12" cy="9" r="2.5"></circle>
                                            </svg>
                                            <span class="side-menu__label">Maps</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1"
                                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 744px);
                            "
                                            data-popper-placement="top">
                                            <li class="slide side-menu__label1">
                                                <a href="javascript:void(0);">Maps</a>
                                            </li>
                                            <li class="slide">
                                                <a href="google-maps.html" class="side-menu__item">Google Maps</a>
                                            </li>
                                            <li class="slide">
                                                <a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a>
                                            </li>
                                            <li class="slide">
                                                <a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                                            </li>
                                        </ul>
                                    </li>


                                    <!-- End::slide__category -->
                                    <!-- Start::slide -->

                                    <!-- End::slide -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="{{ URL::to('/admin_login/logout') }}" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path
                                                    d="M10.9 19.91c.36.05.72.09 1.1.09 2.18 0 4.16-.88 5.61-2.3L14.89 13l-3.99 6.91zm-1.04-.21l2.71-4.7H4.59c.93 2.28 2.87 4.03 5.27 4.7zM8.54 12L5.7 7.09C4.64 8.45 4 10.15 4 12c0 .69.1 1.36.26 2h5.43l-1.15-2zm9.76 4.91C19.36 15.55 20 13.85 20 12c0-.69-.1-1.36-.26-2h-5.43l3.99 6.91zM13.73 9h5.68c-.93-2.28-2.88-4.04-5.28-4.7L11.42 9h2.31zm-3.46 0l2.83-4.92C12.74 4.03 12.37 4 12 4c-2.18 0-4.16.88-5.6 2.3L9.12 11l1.15-2z"
                                                    opacity=".3"></path>
                                                <path
                                                    d="M12 22c5.52 0 10-4.48 10-10 0-4.75-3.31-8.72-7.75-9.74l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10zm0-2c-.38 0-.74-.04-1.1-.09L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20zm8-8c0 1.85-.64 3.55-1.7 4.91l-4-6.91h5.43c.17.64.27 1.31.27 2zm-.59-3h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM12 4c.37 0 .74.03 1.1.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4zm-8 8c0-1.85.64-3.55 1.7-4.91L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12zm6.27 3h2.3l-2.71 4.7c-2.4-.67-4.35-2.42-5.28-4.7h5.69z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Logout</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1"
                                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 880px);
                            "
                                            data-popper-placement="top" data-popper-reference-hidden=""
                                            data-popper-escaped="">
                                            <li class="slide side-menu__label1">
                                                <a href="javascript:void(0);">Utilities</a>
                                            </li>
                                            <li class="slide">
                                                <a href="borders.html" class="side-menu__item">Borders</a>
                                            </li>
                                            <li class="slide">
                                                <a href="breakpoints.html" class="side-menu__item">Breakpoints</a>
                                            </li>
                                            <li class="slide">
                                                <a href="colors.html" class="side-menu__item">Colors</a>
                                            </li>
                                            <li class="slide">
                                                <a href="columns.html" class="side-menu__item">Columns</a>
                                            </li>
                                            <li class="slide">
                                                <a href="flex.html" class="side-menu__item">Flex</a>
                                            </li>
                                            <li class="slide">
                                                <a href="gutters.html" class="side-menu__item">Gutters</a>
                                            </li>
                                            <li class="slide">
                                                <a href="helpers.html" class="side-menu__item">Helpers</a>
                                            </li>
                                            <li class="slide">
                                                <a href="position.html" class="side-menu__item">Position</a>
                                            </li>
                                            <li class="slide">
                                                <a href="more.html" class="side-menu__item">Additional Content</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End::slide -->
                                </ul>
                                <div class="slide-right d-none" id="slide-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                                        height="24" viewBox="0 0 24 24">
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
            <div class="simplebar-scrollbar"
                style="
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
    $(document).ready(function() {
        $('.app-sidebar__inner ul li').each(function() {
            if (window.location.href.indexOf($(this).find('a:first').attr('href')) > -1) {
                $(this).closest('ul').closest('li').attr('class', 'mm-active');
                $(this).addClass('mm-active').siblings().removeClass('mm-active');
            }
        });
    });
</script>
