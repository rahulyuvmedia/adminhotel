<!doctype html>
<html>

<head>
    @include('backend.layouts.head')
</head>

<body>
    <div class="page">
        @include('backend.layouts.topbar')
        @include('backend.layouts.sidebar')
        <div class="main-content app-content">

            <div class="container-fluid">

                @yield('content')

            </div>
        </div>
        @include('backend.layouts.footer')
        <div class="app-wrapper-footer">

            @include('backend.layouts.modal')
            @include('backend.layouts.datatable')
        </div>
    </div>
</body>

</html>
