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









         <!-- Apps & Pages -->
         <li class="menu-header small text-uppercase">
             <span class="menu-header-text" data-i18n="Guest Management">Guest Management</span>
         </li>
         <li class="menu-item @if (request()->is('admin/guest')) active @endif">
             <a href="{{ URL::to('/admin/guest') }}" class="menu-link">
                 <i class="menu-icon tf-icons ti ti-mail"></i>
                 <div data-i18n="Guest List">Guest List</div>
             </a>
         </li>


         <li class="menu-item @if (request()->is('admin/guestHistory')) active @endif">
             <a href="{{ URL::to('/admin/guestHistory') }}" class="menu-link">
                 <i class="menu-icon tf-icons ti ti-mail"></i>
                 <div data-i18n="Guest History">Guest History</div>
             </a>
         </li>



         <li class="menu-item @if (request()->is('admin/rooms')) active @endif">
             <a href="{{ URL::to('/admin/rooms') }}" class="menu-link">
                 <i class="menu-icon tf-icons ti ti-messages"></i>
                 <div data-i18n="Room">Room</div>
             </a>
         </li>


         @if (Auth::user()->role === 'SUPERADMIN')
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
         @endif
     </ul>
 </aside>
