<!-- resources/views/backend/admin/guestHistory/guest_information.blade.php -->

@extends('backend.layouts.master')
@section('content')

<div class="app-page-title mt-5">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="bi bi-newspaper icon-gradient bg-mean-fruit"> </i>
            </div>
            <div>Guest Information <span> - </span>
                <u>{{ \Carbon\Carbon::parse($model->created_at)->format('d/m/Y ') }}</u></div>
        </div>
    </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-body">

        <div class="row">
            <div class="col-md-6 mb-4">
                <label for="">Name:</label>
                <b>
                    <p>{{ $model->name }}</p>
                </b>
            </div>

            <div class="col-md-6 mb-4">
                <label for="">Email:</label>
                <b>
                    <p>{{ $model->email }}</p>
                </b>
            </div>

            <!-- Add other fields as needed -->

            <div class="col-md-6 mb-4">
                <label for="">Room Number:</label>
                @isset($model->rooms)
                <b>
                    <p>{{ $model->rooms->roomNumber }}</p>
                </b>
                @else
                <p>No Room Assigned</p>
                @endisset
            </div>

            <div class="col-md-6 mb-4">
                <label for="">Address:</label>
                <b>
                    <p>{{ $model->address }}</p>
                </b>
            </div>

            <div class="col-md-6 mb-4">
                <label for="">Check-in:</label>
                <b>
                    <p>
                        {{ $model->reservations->check_in }}
                    </p>
                </b>
            </div>






            <div class="col-md-6 mb-4">
                <label for="">Check-out:</label>
                <b>
                    <p>
                        {{ $model->reservations->check_out }}
                </b>
                </p>
            </div>

         
            <div class="col-md-6 mb-4">
                <label for="">Status:</label>
                <b>
                    <p>
                        {{ $model->reservations->status }}
                </b>
                </p>
            </div>


        </div>
    </div>
</div>

@stop