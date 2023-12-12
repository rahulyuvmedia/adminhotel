<style>
.sidebar li .submenu {
    list-style: none;
    margin: 0;
    padding: 0;
    padding-left: 1rem;
    padding-right: 1rem;
}

.bg-menu-theme.menu-vertical .menu-item .nav-link.active:not(.menu-toggle) {
    background: linear-gradient(72.47deg, #7367f0 22.16%, rgba(115, 103, 240, 0.7) 76.47%);
    box-shadow: 0px 2px 6px 0px rgba(115, 103, 240, 0.48);
    color: #fff !important;
}
</style>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ URL::to('/admin/dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('/assets/img/icon.svg') }}" class="img-fluid" />
            </span>
            <span class="app-brand-text demo menu-text fw-bold">Yuvmedia</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>




    <ul class="menu-inner py-1">
        <li class="menu-item @if (request()->is('admin/dashboard')) active @endif">
            <a href="{{ URL::to('/admin/dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fas fa-users" style="font-size: 15px;"></i>
                <div data-i18n="Guest Management">Guest Management</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ URL::to('/admin/guest') }}"
                        class=" nav-link menu-link @if (request()->is('admin/guest')) active @endif">
                        <div data-i18n="Guest">Guest</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('/admin/upcomingBooking') }}"
                        class=" nav-link menu-link  @if (request()->is('admin/upcomingBooking')) active @endif">
                        <div data-i18n="Upcoming Booking">Upcoming Booking</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('/admin/extendedStay') }}"
                        class="nav-link menu-link @if (request()->is('admin/extendedStay')) active @endif">
                        <div data-i18n="Extended Stay">Extended Stay</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('/admin/guestHistory') }}"
                        class="nav-link menu-link @if (request()->is('admin/guestHistory')) active @endif">
                        <div data-i18n="Guest History">Guest History</div>
                    </a>
                </li>
            </ul>
        </li>


        <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fas fa-bed" style="font-size: 15px;"></i>
                <div data-i18n="Room Management">Room Management</div>


            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ URL::to('/admin/rooms') }}"
                        class="nav-link  menu-link @if (request()->is('admin/rooms')) active @endif">
                        <div data-i18n="Rooms">Rooms</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('/admin/availableRooms') }}"
                        class="nav-link menu-link  @if (request()->is('admin/availableRooms')) active @endif">
                        <div data-i18n="Available Rooms">Available Rooms</div>
                    </a>
                </li>

            </ul>
        </li>

















        <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fas fa-file-invoice" style="font-size: 15px;"></i>
                <div data-i18n="Invoice">Invoice</div>


            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ URL::to('admin/invoice') }}"
                        class="nav-link  menu-link @if (request()->is('admin/invoice')) active @endif">
                        <div data-i18n="List">List</div>
                    </a>
                </li>
                <!-- <li class="menu-item">
                    <a href="{{ URL::to('admin/invoice/create') }}"
                        class="nav-link menu-link  @if (request()->is('admin/invoice/create')) active @endif">
                        <div data-i18n="Add">Add</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ URL::to('admin/invoice/edit') }}"
                        class="nav-link menu-link  @if (request()->is('admin/invoice/edit')) active @endif">
                        <div data-i18n="Edit">Edit</div>
                    </a>
                </li> -->

            </ul>
        </li>












        @if (Auth::user()->role === 'SUPERADMIN')
        <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fas fa-cog" style="font-size: 15px;"></i>
                <div data-i18n="Admin Setting">Admin Setting</div>

            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ URL::to('/admin/master') }}"
                        class="nav-link  menu-link   @if (request()->is('admin/master')) active @endif">
                        <div data-i18n="Master">Master</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('/admin/submaster') }}"
                        class="nav-link menu-link  @if (request()->is('admin/submaster')) active @endif">
                        <div data-i18n="Submaster">Submaster</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('/admin/users') }}"
                        class="nav-link menu-link  @if (request()->is('admin/users')) active @endif">
                        <div data-i18n="Create Admin">Create Admin</div>
                    </a>
                </li>

            </ul>
        </li>
        @endif

        <!-- <li class="nav-item has-submenu">
            <span class="menu-header text nav-link small text-uppercase" data-i18n="Guest Management">
                Guest Management
            </span>
            <ul class="submenu collapse">
                <li class="menu-item ">
                    <a class="nav-link menu-link @if (request()->is('admin/guest')) active @endif"
                        href="{{ URL::to('/admin/guest') }}">
                        <i class="menu-icon tf-icons ti ti-user"></i>
                        <div data-i18n="Guest">Guest</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="nav-link menu-link @if (request()->is('admin/upcomingBooking')) active @endif"
                        href="{{ URL::to('/admin/upcomingBooking') }}">
                        <i class="menu-icon tf-icons ti ti-calendar" style="font-size: 20px;"></i>Upcoming
                        Booking
                    </a>
                </li>
                <li class="menu-item">
                    <a class="nav-link menu-link @if (request()->is('admin/extendedStay')) active @endif"
                        href="{{ URL::to('/admin/extendedStay') }}">
                        <i class="menu-icon tf-icons ti ti-clock" style="font-size: 20px;"></i>Extended Stay
                    </a>
                </li>
                <li class="menu-item">
                    <a class="nav-link menu-link @if (request()->is('admin/guestHistory')) active @endif"
                        href="{{ URL::to('/admin/guestHistory') }}">
                        <i class="menu-icon tf-icons ti ti-archive" style="font-size: 20px;"></i>Guest History
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <span class="menu-header text nav-link small text-uppercase" data-i18n="Room Management">
                Room Management
            </span>
            <ul class="submenu collapse">
                <li class="menu-item">
                    <a class="nav-link  menu-link @if (request()->is('admin/rooms')) active @endif"
                        href="{{ URL::to('/admin/rooms') }}">
                        <i class="menu-icon tf-icons ti ti-home" style="font-size: 20px;"></i>Room
                    </a>
                </li>
                <li class="menu-item">
                    <a class="nav-link menu-link  @if (request()->is('admin/availableRooms')) active @endif"
                        href="{{ URL::to('/admin/availableRooms') }}">
                        <i class="menu-icon tf-icons ti ti-checkbox" style="font-size: 20px;"></i>Available
                        Rooms
                    </a>
                </li>
            </ul>
        </li>

        @if (Auth::user()->role === 'SUPERADMIN')
        <li class="nav-item has-submenu">
            <span class="menu-header text nav-link small text-uppercase" data-i18n="Admin Setting">
                Admin Setting
            </span>
            <ul class="submenu collapse">
                <li class="menu-item">
                    <a class="nav-link menu-link  @if (request()->is('admin/master')) active @endif"
                        href="{{ URL::to('/admin/master') }}">
                        <i class="menu-icon tf-icons ti ti-key" style="font-size: 20px;"></i>Master
                    </a>
                </li>
                <li class="menu-item">
                    <a class="nav-link menu-link  @if (request()->is('admin/submaster')) active @endif"
                        href="{{ URL::to('/admin/submaster') }}">
                        <i class="menu-icon tf-icons ti ti-wand" style="font-size: 20px;"></i>Submaster
                    </a>
                </li>
                <li class="menu-item">
                    <a class="nav-link menu-link  @if (request()->is('admin/users')) active @endif"
                        href="{{ URL::to('/admin/users') }}">
                        <i class="menu-icon tf-icons ti ti-pencil" style="font-size: 20px;"></i>Create Admin
                    </a>
                </li>
            </ul>
        </li>
        @endif -->





    </ul>
</aside>

<!-- <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Guest Management">Guest Management</span>
        </li>



        <li class="menu-item @if (request()->is('admin/guest')) active @endif">
            <a href="{{ URL::to('/admin/guest') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Guest List">Guest List</div>
            </a>
        </li>

        <li class="menu-item @if (request()->is('admin/upcomingBooking')) active @endif">
            <a href="{{ URL::to('/admin/upcomingBooking') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Upcoming Booking">Upcoming Booking</div>
            </a>
        </li>

        <li class="menu-item @if (request()->is('admin/extendedStay')) active @endif">
            <a href="{{ URL::to('/admin/extendedStay') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Extended Stay">Extended Stay</div>
            </a>
        </li>

        <li class="menu-item @if (request()->is('admin/guestHistory')) active @endif">
            <a href="{{ URL::to('/admin/guestHistory') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Guest History">Guest History</div>
            </a>
        </li> -->


<!-- <li class="menu-item @if (request()->is('admin/policeInquiry')) active @endif">
             <a href="{{ URL::to('/admin/policeInquiry') }}" class="menu-link">
                 <i class="menu-icon tf-icons ti ti-mail"></i>
                 <div data-i18n="Police Inquiry">Police Inquiry</div>
             </a>
         </li> -->


<!-- 
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Room Management">Room Management</span>
        </li>
        <li class="menu-item @if (request()->is('admin/rooms')) active @endif">
            <a href="{{ URL::to('/admin/rooms') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div data-i18n="Room">Room</div>
            </a>
        </li>
        <li class="menu-item @if (request()->is('admin/availableRooms')) active @endif">
            <a href="{{ URL::to('/admin/availableRooms') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div data-i18n="Available Rooms">Available Rooms</div>
            </a>
        </li> -->
<!-- 
        @if (Auth::user()->role === 'SUPERADMIN')
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Admin Setting">Admin Setting</span>
        </li>
        <li class="menu-item @if (request()->is('admin/master')) active @endif">
            <a href="{{ URL::to('/admin/master') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div data-i18n="Master">Master</div>
            </a>
        </li>

        <li class="menu-item @if (request()->is('admin/submaster')) active @endif">
            <a href="{{ URL::to('/admin/submaster') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div data-i18n="Sub Master">Sub Master</div>
            </a>
        </li>

        <li class="menu-item @if (request()->is('admin/users')) active @endif">
            <a href="{{ URL::to('/admin/users') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div data-i18n="Create Admin">Create Admin</div>
            </a>
        </li>
        @endif -->





<!-- 


<script>
document.addEventListener("DOMContentLoaded", function() {
    let currentUrl = window.location.href;

    document.querySelectorAll('.sidebar .nav-link').forEach(function(element) {
        // Check if the current link's href matches the current page's URL
        if (element.getAttribute('href') === currentUrl) {
            element.classList.add('active');
            // Open the submenu if it's a submenu item
            let parentSubmenu = element.closest('.has-submenu');
            if (parentSubmenu) {
                let submenu = parentSubmenu.querySelector('.submenu');
                if (submenu) {
                    submenu.classList.add('show');
                }
            }
        }

        element.addEventListener('click', function(e) {
            let nextEl = element.nextElementSibling;
            let parentEl = element.parentElement;

            if (nextEl) {
                e.preventDefault();
                let mycollapse = new bootstrap.Collapse(nextEl);

                if (nextEl.classList.contains('show')) {
                    mycollapse.hide();
                } else {
                    mycollapse.show();
                    // find other submenus with class=show
                    var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                    // if it exists, then close all of them
                    if (opened_submenu) {
                        new bootstrap.Collapse(opened_submenu);
                    }
                }
            }
        });
    });
});
</script> -->