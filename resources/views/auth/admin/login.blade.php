@extends('auth.layouts.app')
@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/login/css/util.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/login/css/main.css') }}" rel="stylesheet">



    <!-- Main Theme Js -->
    <script src="../assets/js/authentication-main.js"></script>
    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- Style Css -->
    <link href="{{ asset('assets/css/styles.min.css') }}" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" />

    <div class="container-fluid custom-page">
        <div class="row bg-white">

            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent-3">
                <div class="row w-100 mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto w-100">
                        <img src="{{ asset('assets/images/5.png') }}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto"
                            alt="logo" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white py-4">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex">
                                        <a href="index.html" class="header-logo"><img
                                                src="{{ asset('assets/images/desktop-logo.png') }}"
                                                class="desktop-logo ht-40" alt="logo" />
                                            <img src="{{ asset('assets/images/desktop-white.png') }}"
                                                class="desktop-white ht-40" alt="logo" />
                                        </a>
                                    </div>
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <h3>Welcome back!</h3>
                                            <h6 class="fw-medium mb-4 fs-17">
                                                Please sign in to continue.
                                            </h6>
                                            <form method="POST" action="{{ route('admin.auth.loginAdmin') }}">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Email</label>
                                                    @if ($errors->has('email'))
                                                        <span class="is-invalid">{{ $errors->first('email') }}</span>
                                                    @endif
                                                    <input class="form-control" name="email" value="{{ old('email') }}"
                                                        placeholder="Enter your email" type="text" />
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Password</label>
                                                    <input class="form-control" name="password"
                                                        placeholder="Enter your password" type="password" />
                                                </div>
                                                <input type="submit" value="Sign In"
                                                    class="btn btn-primary btn-block w-100" />

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>

    <style>
        .is-invalid {
            color: red;
        }
    </style>
@endsection
