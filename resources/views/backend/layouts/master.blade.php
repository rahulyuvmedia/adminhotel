<!doctype html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    @include('backend.layouts.head')
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('backend.layouts.sidebar')
            <div class="layout-page">
                @include('backend.layouts.topbar')

                <div class="content-wrapper">

                    <div class="container-xxl flex-grow-1 container-p-y">

                        @yield('content')

                    </div>
                </div>
                @include('backend.layouts.footer')
            </div>


            <div class="app-wrapper-footer">

                @include('backend.layouts.modal')

            </div>
        </div>
    </div>
</body>

</html>
