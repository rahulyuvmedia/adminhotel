
<?php 

$user = Auth::user();
?>

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center " id="layout-navbar">
     <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
         <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
             <i class="ti ti-menu-2 ti-sm"></i>
         </a>
     </div>

     <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
         <!-- Search -->
         <!-- <div class="navbar-nav align-items-center">
             <div class="nav-item navbar-search-wrapper mb-0">
                 <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                     <i class="ti ti-search ti-md me-2"></i>
                     <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                 </a>
             </div>
         </div> -->
         <!-- /Search -->

         <ul class="navbar-nav flex-row align-items-center ms-auto">
             <!-- Language -->
             <!-- <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                 <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                     <i class="ti ti-language rounded-circle ti-md"></i>
                 </a>
                 <ul class="dropdown-menu dropdown-menu-end">
                     <li>
                         <a class="dropdown-item" href="javascript:void(0);" data-language="en"
                             data-text-direction="ltr">
                             <span class="align-middle">English</span>
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item" href="javascript:void(0);" data-language="fr"
                             data-text-direction="ltr">
                             <span class="align-middle">French</span>
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item" href="javascript:void(0);" data-language="ar"
                             data-text-direction="rtl">
                             <span class="align-middle">Arabic</span>
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item" href="javascript:void(0);" data-language="de"
                             data-text-direction="ltr">
                             <span class="align-middle">German</span>
                         </a>
                     </li>
                 </ul>
             </li> -->
             <!--/ Language -->

             <!-- Style Switcher -->
           <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                 <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                     <i class="ti ti-md"></i>
                 </a>
                 <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                     <li>
                         <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                             <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                             <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                             <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                         </a>
                     </li>
                 </ul>
             </li>  
             <!-- / Style Switcher-->

             <!-- Quick links  -->
             <!-- <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                 <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown"
                     data-bs-auto-close="outside" aria-expanded="false">
                     <i class="ti ti-layout-grid-add ti-md"></i>
                 </a>
                 <div class="dropdown-menu dropdown-menu-end py-0">
                     <div class="dropdown-menu-header border-bottom">
                         <div class="dropdown-header d-flex align-items-center py-3">
                             <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                             <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body"
                                 data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i
                                     class="ti ti-sm ti-apps"></i></a>
                         </div>
                     </div>
                     <div class="dropdown-shortcuts-list scrollable-container">
                         <div class="row row-bordered overflow-visible g-0">
                             <div class="dropdown-shortcuts-item col">
                                 <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                     <i class="ti ti-calendar fs-4"></i>
                                 </span>
                                 <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                 <small class="text-muted mb-0">Appointments</small>
                             </div>
                             <div class="dropdown-shortcuts-item col">
                                 <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                     <i class="ti ti-file-invoice fs-4"></i>
                                 </span>
                                 <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                                 <small class="text-muted mb-0">Manage Accounts</small>
                             </div>
                         </div>
                         <div class="row row-bordered overflow-visible g-0">
                             <div class="dropdown-shortcuts-item col">
                                 <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                     <i class="ti ti-users fs-4"></i>
                                 </span>
                                 <a href="app-user-list.html" class="stretched-link">User App</a>
                                 <small class="text-muted mb-0">Manage Users</small>
                             </div>
                             <div class="dropdown-shortcuts-item col">
                                 <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                     <i class="ti ti-lock fs-4"></i>
                                 </span>
                                 <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                                 <small class="text-muted mb-0">Permission</small>
                             </div>
                         </div>
                         <div class="row row-bordered overflow-visible g-0">
                             <div class="dropdown-shortcuts-item col">
                                 <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                     <i class="ti ti-chart-bar fs-4"></i>
                                 </span>
                                 <a href="index.html" class="stretched-link">Dashboard</a>
                                 <small class="text-muted mb-0">User Profile</small>
                             </div>
                             <div class="dropdown-shortcuts-item col">
                                 <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                     <i class="ti ti-settings fs-4"></i>
                                 </span>
                                 <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                                 <small class="text-muted mb-0">Account Settings</small>
                             </div>
                         </div>
                         <div class="row row-bordered overflow-visible g-0">
                             <div class="dropdown-shortcuts-item col">
                                 <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                     <i class="ti ti-help fs-4"></i>
                                 </span>
                                 <a href="pages-faq.html" class="stretched-link">FAQs</a>
                                 <small class="text-muted mb-0">FAQs & Articles</small>
                             </div>
                             <div class="dropdown-shortcuts-item col">
                                 <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                     <i class="ti ti-square fs-4"></i>
                                 </span>
                                 <a href="modal-examples.html" class="stretched-link">Modals</a>
                                 <small class="text-muted mb-0">Useful Popups</small>
                             </div>
                         </div>
                     </div>
                 </div>
             </li> -->
             <!-- Quick links -->

























             <!-- Notification -->
              <!-- <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                 <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown"
                     data-bs-auto-close="outside" aria-expanded="false">
                     <i class="ti ti-bell ti-md"></i>
                     <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                 </a>
                 <ul class="dropdown-menu dropdown-menu-end py-0">
                     <li class="dropdown-menu-header border-bottom">
                         <div class="dropdown-header d-flex align-items-center py-3">
                             <h5 class="text-body mb-0 me-auto">Notification</h5>
                             <a href="javascript:void(0)" class="dropdown-notifications-all text-body"
                                 data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i
                                     class="ti ti-mail-opened fs-4"></i></a>
                         </div>
                     </li>
                     <li class="dropdown-notifications-list scrollable-container">
                         <ul class="list-group list-group-flush" > 
                             <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                 <div class="d-flex">
                                     <div class="flex-shrink-0 me-3">
                                         <div class="avatar">
                                             <img src="../../assets/img/avatars/1.png" alt
                                                 class="h-auto rounded-circle" />
                                         </div>
                                     </div>
                                     <div class="flex-grow-1">
                                         <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                         <p class="mb-0">
                                             Won the monthly best seller gold badge
                                         </p>
                                         <small class="text-muted">1h ago</small>
                                     </div>
                                     <div class="flex-shrink-0 dropdown-notifications-actions">
                                         <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                 class="badge badge-dot"></span></a>
                                         <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                 class="ti ti-x"></span></a>
                                     </div>
                                 </div>
                             </li>
                              
                         </ul>
                     </li>
                     <li class="dropdown-menu-footer border-top">
                         <a href="javascript:void(0);"
                             class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                             View all notifications
                         </a>
                     </li>
                 </ul>
             </li>   -->
             <!-- Notification -->


























             
             <!-- User -->
             <li class="nav-item navbar-dropdown dropdown-user dropdown">
                 <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                     <div class="avatar avatar-online">


                     <?php
                        $userImage = '/uploads/' . $user->idproff;
                        $defaultImage = '/assets/images/default.jpg';
                        if (file_exists(public_path($userImage))) {
                            $imagePath = $userImage;
                        } else {
                            $imagePath = $defaultImage;
                        }
                        
                        ?>
                       


                         <img src="{{ URL::to($imagePath) }}" alt class="h-100% rounded-circle d-block w-100% " />
                     </div>
                 </a>
                 <ul class="dropdown-menu dropdown-menu-end">
                     <li>
                         <div class="dropdown-item" href="">
                             <div class="d-flex">
                                 <div class="flex-shrink-0 me-3">
                                     <div class="avatar avatar-online">
                                         <img src="{{ URL::to($imagePath) }}" alt
                                             class="h-100% rounded-circle d-block w-100%  " />
                                     </div>
                                 </div>
                                 <div class="flex-grow-1">

                                     <span class="fw-medium d-block">{{ Auth::user()->name }}</span>
                                     <small class="text-muted">{{ Auth::user()->role }}</small>
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li>
                         <div class="dropdown-divider"></div>
                     </li>
                     <li>
                         <a class="dropdown-item" href="{{ URL::to('/admin/profile') }}">
                             <i class="ti ti-user-check me-2 ti-sm"></i>
                             <span class="align-middle">My Profile</span>
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item" href="pages-account-settings-account.html">
                             <i class="ti ti-settings me-2 ti-sm"></i>
                             <span class="align-middle">Settings</span>
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item" href="pages-account-settings-billing.html">
                             <span class="d-flex align-items-center align-middle">
                                 <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                                 <span class="flex-grow-1 align-middle">Billing</span>
                                 <span
                                     class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
                             </span>
                         </a>
                     </li>
                     <li>
                         <div class="dropdown-divider"></div>
                     </li>
                     <li>
                         <a class="dropdown-item" href="pages-faq.html">
                             <i class="ti ti-help me-2 ti-sm"></i>
                             <span class="align-middle">FAQ</span>
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item" href="pages-pricing.html">
                             <i class="ti ti-currency-dollar me-2 ti-sm"></i>
                             <span class="align-middle">Pricing</span>
                         </a>
                     </li>
                     <li>
                         <div class="dropdown-divider"></div>
                     </li>
                     <li>
                         <a class="dropdown-item" href="{{ URL::to('/admin_login/logout') }}">
                             <i class="ti ti-logout me-2 ti-sm"></i>
                             <span class="align-middle">Log Out</span>
                         </a>
                     </li>
                     <!-- <li>
                         <a class="dropdown-item" href="{{ URL::to('/admin/change_password') }}">
                             <i class="ti ti-logout me-2 ti-sm"></i>
                             <span class="align-middle"> Change Password</span>
                         </a>
                     </li> -->
                 </ul>

             </li>
             <!--/ User -->
         </ul>

     </div>

     <!-- Search Small Screens -->
     <!-- <div class="navbar-search-wrapper search-input-wrapper d-none">
         <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
             aria-label="Search..." />
         <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
     </div> -->
 </nav>

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
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<script>
   

   
    // function formatDate(dateString) {
    //     const date = new Date(dateString);
    //     return date.toLocaleString();
    // }

   
    // function generateNotificationItems(data) {
    //     console.log(data);
    //     let itemsHtml = '';

    //     data.forEach(value => {
    //         itemsHtml += `
    //             <li class="list-group-item list-group-item-action dropdown-notifications-item">
    //                 <div class="d-flex">
    //                     <div class="flex-shrink-0 me-3">
    //                         <div class="avatar">
    //                             <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
    //                         </div>
    //                     </div>
    //                     <div class="flex-grow-1">
    //                         <h6 class="mb-1">${value.name}</h6>
    //                         <p class="mb-0">
    //                             Check-in: ${formatDate(value.check_in)}<br>
    //                             Check-out: ${formatDate(value.check_out)}
    //                         </p>
    //                         <small class="text-muted">${value.status}</small>
    //                     </div>
    //                     <div class="flex-shrink-0 dropdown-notifications-actions">
    //                         <!-- Additional actions if needed -->
    //                     </div>
    //                 </div>
    //             </li>`;
    //     });

    //     return itemsHtml;
    // }

   
    // const notificationData = @ json($ expiryReseration);

   
    // const notificationCount = notificationData.length;
    // document.querySelector('.badge-notifications').innerText = notificationCount;

   
    // const notificationsList = document.querySelector('.dropdown-notifications-list ul');
    // notificationsList.innerHTML = generateNotificationItems(notificationData);
</script>