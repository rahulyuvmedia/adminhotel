 <meta charset="utf-8" />
 <meta name="viewport"
     content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

 <title> @yield('title') | {{ config('app.name') }}</title>
 <meta name="viewport"
     content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
 <meta name="description" content="laravel, laravel-boilerplate">
 <meta name="author" content="Riyadh Ahmed">
 <meta name="msapplication-tap-highlight" content="no">
 <meta name="robots" content="index, follow">
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <!-- Favicons -->
 <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
 <!-- Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com" />
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
 <link
     href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
     rel="stylesheet" />

 <!-- Icons -->
 <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
 <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
 <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

 <!-- Core CSS -->
 <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
 <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core-dark.css') }}" class="template-customizer-core-dark-css" />
 <link rel="stylesheet" href="{{ URL::to('assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
 <link rel="stylesheet" href="{{ URL::to('assets/vendor/css/rtl/theme-default-dark.css') }}" class="template-customizer-theme-css" />
 
 <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />


 <!-- Vendors CSS -->
 <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
 <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
 <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
 <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
 <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
 <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
 <link type="text/css" rel="stylesheet"
     href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
 <link rel="stylesheet"
     href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />

 <!-- Page CSS -->
 <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-advance.css') }}" />

 <!-- Helpers -->
 <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>


  <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>

 <script src="{{ asset('assets/js/config.js') }}"></script>


 <script>
     var CSRF_TOKEN = "{{ csrf_token() }}";
 </script>


<!-- Add this before the DataTables script -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<!-- DataTables example CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

<!-- DataTables JavaScript -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
