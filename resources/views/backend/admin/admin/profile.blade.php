@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('content')

<?php 
use Carbon\Carbon;

?>

<style>
    
    .card {
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease-in-out;
}

.card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.btn-secondary {
    border-radius: 50%;
    overflow: hidden;
}

.image {
    text-align: center;
}

.name {
    font-size: 1.5em;
    font-weight: bold;
}

.email, .mobile {
    color: #777;
}

.number {
    font-size: 1.2em;
}

.business-name {
    color: #3498db;
}

.btn-dark {
    background-color: #2c3e50;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
}

.btn-dark:hover {
    background-color: #1a242f;
}

.text {
    margin-top: 20px;
    text-align: center;
    color: #777;
}

.icons span {
    font-size: 24px;
    color: #3498db;
    cursor: pointer;
}

.icons span:hover {
    color: #1a242f;
}

.date {
    background-color: #3498db;
    color: #fff;
    padding: 5px;
    border-radius: 5px;
    text-align: center;
    margin-top: 20px;
}

.join {
    font-size: 14px;
}

    </style>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit"> </i>
            </div>
            <div>Admin's Profile</div>
        </div>
    </div>
</div>
<!-- <div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card profile-card">
            <div class="card-body">
                <div class="profile-header">
                    <div class="profile-cover"></div>
                    <div class="profile-avatar">
                                                <img src="{{ URL::to('/uploads/' . $user->idproff) }}" alt="Profile Picture">
                    </div>
                </div>
                <div class="profile-info">
                    <h2 class="profile-name">{{ $user->name }}</h2>
                    <p class="profile-email">{{ $user->email }}</p>
                    <p class="profile-status">
                        @php
                        $status = $user->status ? '<span class="label label-success">Active</span>' :
                        '<span class="label label-danger">Inactive</span>';
                        @endphp
                        {!! $status !!}
                    </p>
                </div>
                <div class="profile-details">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Address:</strong>
                            <p>{{ $user->address }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Mobile:</strong>
                            <p>{{ $user->mobile }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <strong>Business Name:</strong>
                            <p>{{ $user->business_name }}</p>
                        </div>
                    </div>
                </div>
                <div class="profile-actions mt-4">
                    <a href="{{ URL::to('/admin/edit_profile') }}" class="btn btn-primary btn-animated">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="col-md-12">
    <div class="card p-4">
        <div class="image d-flex flex-column justify-content-center align-items-center">
            <button class="btn btn-secondary">
                <img src="{{ URL::to('/uploads/' . $user->idproff) }}" height="100" width="100" />
            </button>
            <span class="name mt-3">{{ $user->name }}</span>
            <span class="email">{{ $user->email }}</span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                <span class="mobile">{{ $user->mobile }}</span>
                <span><i class="fa fa-copy"></i></span>
            </div>
            <div class="d-flex mt-2">
                <a href="{{ URL::to('/admin/edit_profile') }}" class="btn btn-dark">Edit Profile</a>
            </div>
            <div class="px-2 rounded mt-4 date">
                <span class="join">{{ Carbon::parse($user->created_at)->format('d/m/yy') }}
</span>
            </div>
        </div>
    </div>
</div>



@endsection