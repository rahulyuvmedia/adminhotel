@extends('backend.layouts.master')
@section('content')


<div class="card">
    <h5 class="card-header">SubMaster</h5>
    <div class="card-body">
        <form id='create' action="{{ Route('admin.guest.store') }}" enctype="multipart/form-data" method="post"
            accept-charset="utf-8" class="needs-validation">
            @csrf
            <div id="status"></div>
            <div class="form-row">




                <div class="clearfix"></div>
                <div class="form-group col-md-12 col-sm-12">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="" placeholder="" required>
                    @error('name')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-12 col-sm-12">
                    <label for=""> Email </label>
                    <input type="text" class="form-control" id="email" name="email" value="" placeholder="" required>
                    @error('email')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-12 col-sm-12">
                    <label for="">Phone Number </label>
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value=" " placeholder=""
                        required>
                    @error('phoneNumber')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-12 col-sm-12">
                    <label for=""> Room Number </label>
                    <input type="text" class="form-control" id="roomNumber" name="roomNumber" value=" " placeholder=""
                        required>
                    @error('roomNumber')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-12 col-sm-12">
                    <label for=""> Address </label>
                    <input type="text" class="form-control" id="address" name="address" value=" " placeholder=""
                        required>
                    @error('address')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>
                <div class="clearfix"></div>


                <label for="photo">Doc. (File must be jpg, jpeg, png)</label>
                <div class="input-group">
                    <input id="photo" type="file" name="image" style="display:none">
                    <div class="input-group-prepend">
                        <a class="btn btn-dark text-white" onclick="$('input[id=photo]').click();">Image</a>
                    </div>
                    <input type="text" name="image" class="form-control" id="SelectedFileName" value="" readonly>


                </div>
                @error('image')
                    <div class="has-error mt-2">{{ $message }}</div>
                @enderror



                
                <div class="form-group col-md-12 mb-3 mt-4">
                    <button type="submit" class="btn btn-success button-submit" data-loading-text="Loading..."><span
                            class="fa fa-save fa-fw"></span> Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop