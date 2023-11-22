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
<div class="app-page-title mt-5">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="bi bi-newspaper icon-gradient bg-mean-fruit"> </i>
            </div>
            <div>Edit Guest</div>

        </div>
    </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-body">

        <form id='edit' action="{{ Route('admin.guest.update', $model->id) }}" enctype="multipart/form-data"
            method="post" accept-charset="utf-8" class="needs-validation">
            @csrf
            <div id="status"></div> {{ method_field('PATCH') }}
            <div class="row">




                <div class="clearfix"></div>



                <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                    <label for=""> Name </label>
                    <input type="text" name='name' class='form-control' value='{{ $model->name }}' />
                    <span id="error_title" class="has-error"></span>
                </div>


                <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                    <label for=""> email </label>
                    <input type="text" name='email' class='form-control' value='{{ $model->email }}' />
                    <span id="error_title" class="has-error"></span>
                </div>

                <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                    <label for=""> phoneNumber </label>
                    <input type="text" name='mobile' class='form-control' value='{{ $model->mobile }}' />
                    <span id="error_title" class="has-error"></span>
                </div>


                <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                    <label for=""> Room Number </label>
                    <input type="text" name='roomNumber' class='form-control' value='{{ $model->rooms->roomNumber }}' />
                    <span id="error_title" class="has-error"></span>
                </div>


                <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                    <label for=""> address </label>
                    <input type="text" name='address' class='form-control' value='{{ $model->address }}' />
                    <span id="error_title" class="has-error"></span>
                </div>


                <br />

                <div class="col-xl-6 col-md-6 col-sm-12 mb-4">

                    <div class="input-group mt-3">


                        <input id="photo" type="file" name="idproff" style="display:none">
                        <div class="input-group-prepend">
                            <a class="btn btn-dark text-white" onclick="$('input[id=photo]').click();">idproff</a>
                        </div>
                        <input type="text" name="idproff" class="form-control" id="SelectedFileName" value="" readonly>


                    </div>
                    @if ($model->idproff)
                    <img class="img-thumbnail img-fluid tool-img-edit"
                        src="{{ URL::to('/uploads/' . $model->idproff) }}" style="max-width: 10%; margin-top: 10px;" />
                    @endif
                    @error('idproff')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                    <script type="text/javascript">
                    $('input[id=photo]').change(function() {
                        $('#SelectedFileName').val($(this).val());
                    });
                    </script>
                    @error('idproff')
                    <div class="has-error mt-2 ">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Your form code... -->
                <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                    <label for="check_in">Check-in:</label>
                    <input type="datetime-local" id="check_in" name="check_in"
                        value="{{ $model->reservations->checkin_date }}" class="form-control">
                    @error('check_in')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                    <label for="check_out">Check-out:</label>
                    <input type="datetime-local" id="check_out" name="check_out"
                        value="{{ $model->reservations->checkout_date }}" class="form-control">
                    @error('check_out')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Your remaining form fields... -->



                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-success button-submit" data-loading-text="Loading..."><span
                            class="fa fa-save fa-fw"></span> Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop