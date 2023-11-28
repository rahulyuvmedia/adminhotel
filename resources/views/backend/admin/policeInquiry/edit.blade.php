@extends('backend.layouts.master')

@section('content')
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<h5 class="mb-4">Edit Guest</h5>

<div class="ant-col ant-col-17" style="padding-left: 8px; padding-right: 8px;">
    <div class="card mb-4">
        <form id='edit' action="{{ Route('admin.policeInquiry.update', $policeinquiry->id) }}" enctype="multipart/form-data"
            method="post" accept-charset="utf-8" class="needs-validation">
            @csrf
            {{ method_field('PATCH') }}

            <div class="d-flex flex-wrap justify-content-between align-items-center p-4">
                <!-- Include existing guest information fields here -->

                <!-- Additional Fields -->

                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label for="address">address</label>
                    <input type="text" class="form-control" id="address" name="address"
                        value="{{ old('address', $policeinquiry->address) }}" placeholder="" required>
                    @error('address')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" name="state"
                        value="{{ old('state', $policeinquiry->state) }}" placeholder="" required>
                    @error('state')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label for="address">City</label>
                    <input type="text" class="form-control" id="city" name="city"
                        value="{{ old('city', $policeinquiry->city) }}" placeholder="" required>
                    @error('city')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label for="zipCode">ZipCode</label>
                    <input type="text" class="form-control" id="zipCode" name="zipCode"
                        value="{{ old('zipCode', $policeinquiry->zipCode) }}" placeholder="" required>
                    @error('zipCode')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label for="arrivedFrom">Arrived From</label>
                    <input type="text" class="form-control" id="arrivedFrom" name="arrivedFrom"
                        value="{{ old('arrivedFrom', $policeinquiry->arrivedFrom) }}" placeholder="" required>
                    @error('arrivedFrom')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>


        </form>
    </div>

</div>
@stop