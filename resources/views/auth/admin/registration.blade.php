@extends('auth.layouts.app')
@section('content')
    
        <div class="authentication-inner row">

            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-7 p-0">
                <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
                    <img src="../../assets/img/illustrations/auth-register-illustration-light.png" alt="auth-register-cover"
                        class="img-fluid my-5 auth-illustration"
                        data-app-light-img="illustrations/auth-register-illustration-light.png"
                        data-app-dark-img="illustrations/auth-register-illustration-dark.html">

                    <img src="../../assets/img/illustrations/bg-shape-image-light.png" alt="auth-register-cover"
                        class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png"
                        data-app-dark-img="illustrations/bg-shape-image-dark.html">
                </div>
            </div>
            <!-- /Left Text -->

            <!-- Register -->
            <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
                <div class="w-px-400 mx-auto">
                    <!-- Logo -->
                    <div class="app-brand mb-4">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                        fill="#7367F0" />
                                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                        fill="#161616" />
                                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                        fill="#161616" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                        fill="#7367F0" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h3 class="mb-1">Adventure starts here 🚀</h3>
                    <p class="mb-4">Make your app management easy and fun!</p>

                    <form action="{{ route('user.auth.registration') }}" enctype="multipart/form-data" method="post"
                        accept-charset="utf-8" class="needs-validation" novalidate>
                        @csrf
                        <div class="row">


                            <div class="mb-3">
                                <label class="form-label" for="name">Name <span style="color:red">*</span></label>

                                <input type="text" id="name" name="name" class="form-control credit-card-mask"
                                    placeholder="Enter your name" />


                                @error('name')
                                    <div class="has-error mt-2" style="color: red"> Guest name required.</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for=""> Email </label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email address" required>
                                @error('email')
                                    <div class="has-error mt-2" style="color: red">Email is required.</div>
                                @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label>Password:</label>
                                <!-- <input type="password" name="password" placeholder="Password" class="form-control" required> -->


                                 <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password" />
                            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                        </div>


                                <span id="error_password" class="has-error"></span>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label>Confirm Password:</label>
                                 <div class="input-group input-group-merge">
                                <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                    class="form-control" required>
                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                </div>
                                <span id="error_confirm-password" class="has-error"></span>
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary d-grid w-100">
                                    Sign up
                                </button>
                            </div>
                        </div>
                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="{{ URL::to('/admin_login/login') }}">
                                <span>Sign in instead</span>
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    
@endsection
