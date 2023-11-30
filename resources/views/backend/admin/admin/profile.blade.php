@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">My Profile /</span> View Profile
</h4>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Profile Details</h5>
            <!-- Account -->
            <div class="card-body">
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <?php
                        $userImage = '/uploads/' . $user->idproff;
                        $defaultImage = '/uploads/default.jpg';
                        if (file_exists(public_path($userImage))) {
                            $imagePath = $userImage;
                        } else {
                            $imagePath = $defaultImage;
                        }
                        ?>
                    <img src="{{ URL::to($imagePath) }}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded"
                        id="uploadedAvatar" />
                </div>
            </div>
            <hr class="my-0">
            <div class="card-body">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="name" class="form-label"> Name</label>
                        <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}"
                            disabled />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="business_name" class="form-label">Business Name</label>
                        <input class="form-control" type="text" id="business_name" name="business_name"
                            value="{{ $user->business_name }}" disabled />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="mobile" class="form-label">Mobile Number</label>
                        <input class="form-control" type="text" id="mobile" name="mobile" value="{{ $user->mobile }}"
                            disabled />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input class="form-control" type="text" id="address" name="address" value="{{ $user->address }}"
                            disabled />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="text" id="email" name="email" value="{{ $user->email }}"
                            disabled />
                    </div>
                    <div class="mt-2">
                        <button type="button" onclick="window.location='{{ URL::to('/admin/dashboard') }}'"
                            class="btn btn-primary me-2">
                            ← Go Homepage
                        </button>
                        <button type="button" onclick="window.location= '{{ URL::to('/admin/edit_profile/' . $user->id) }}'"
                            class="btn btn-primary me-2">
                             Edit Profile →
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection