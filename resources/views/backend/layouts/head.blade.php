<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> @yield('title') | {{ config('app.name') }}</title>
<meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
<meta name="description" content="laravel, laravel-boilerplate">
<meta name="author" content="Riyadh Ahmed">
<meta name="msapplication-tap-highlight" content="no">
<meta name="robots" content="index, follow">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicons -->
<link rel="shortcut icon" href="{{ asset('/assets/images/favicon.png') }}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">

<!-- Override CSS file - add your own CSS rules -->
<link rel="stylesheet" href="{{ asset('/assets/css/custom_admin_style.css') }}">


<!-- jQuery 3.4.1 -->
<script src="{{ asset('/assets/js/jquery-3.4.1.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>


<script>
    var CSRF_TOKEN = "{{ csrf_token() }}";
</script>

















<script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<!-- Main Theme Js -->
<script src="../assets/js/main.js"></script>
<!-- Bootstrap Css -->
<link id="style" href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet" />
<!-- Style Css -->
<link href="{{ asset('/assets/css/styles.min.css') }}" rel="stylesheet" />
<!-- Icons Css -->
<link href="{{ asset('/assets/css/icons.css') }}" rel="stylesheet" />
<!-- Node Waves Css -->
<link href="{{ asset('/assets/css/waves.min.css') }}" rel="stylesheet" />
<!--
<link href="{{ asset('/assets/css/simplebar.min.css') }}" rel="stylesheet" />
 
<link rel="stylesheet" href="../assets/libs/flatpickr/flatpickr.min.css" />
<link rel="stylesheet" href="../assets/libs/%40simonwep/pickr/themes/nano.min.css" />
 
<link rel="stylesheet" href="../assets/libs/choices.js/public/assets/styles/choices.min.css" />
 
<link rel="stylesheet" href="../assets/libs/jsvectormap/css/jsvectormap.min.css" />
 -->
