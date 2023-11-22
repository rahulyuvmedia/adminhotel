@extends('backend.layouts.master')
@section('title', 'Dashboard')
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
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <!-- <div class="table-responsive"> -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <p class="panel-title"> Update Profile</p>
                    </div>
                    <div class="box-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <form id='edit' action="" enctype="multipart/form-data" method="post"
                                    accept-charset="utf-8">
                                    @csrf
                                    <div class="row">

                                        {{method_field('PATCH')}}
                                        <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                                            <label for=""> Name </label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{$user->name}}" placeholder="" required>
                                            <span id="error_name" class="has-error"></span>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                                            <label for=""> Number </label>
                                            <input type="text" class="form-control" id="mobile" name="mobile"
                                                value="{{$user->mobile}}" placeholder="" required>
                                            <span id="error_name" class="has-error"></span>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                                            <label for=""> Business Name </label>
                                            <input type="text" class="form-control" id="business_name"
                                                name="business_name" value="{{$user->business_name}}" placeholder=""
                                                required>
                                            <span id="error_name" class="has-error"></span>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                                            <label for=""> Address </label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                value="{{$user->address}}" placeholder="" required>
                                            <span id="error_name" class="has-error"></span>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                                            <label for=""> Email </label>
                                            <input type="text" class="form-control" id="email" name="email"
                                                value="{{$user->email}}" placeholder="">
                                            <span id="error_email" class="has-error"></span>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 mb-4">

                                            <div class="input-group mt-3">


                                                <input id="photo" type="file" name="idproff" style="display:none">
                                                <div class="input-group-prepend">
                                                    <a class="btn btn-dark text-white"
                                                        onclick="$('input[id=photo]').click();">idproff</a>
                                                </div>
                                                <input type="text" name="idproff" class="form-control"
                                                    id="SelectedFileName" value="" readonly>


                                            </div>
                                            @if ($user->idproff)
                                            <img class="img-thumbnail img-fluid tool-img-edit"
                                                src="{{ URL::to('/uploads/' . $user->idproff) }}"
                                                style="max-width: 10%; margin-top: 10px;" />
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

                                       
                                        <div class="clearfix"></div>
                                        <br /> <br />
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-success" id="submit"><span
                                                    class="fa fa-save fa-fw"></span> Save
                                            </button>
                                        </div> <br />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {

    $('#loader').hide();

    $('#edit').validate({ // <- attach '.validate()' to your form
        // Rules for form validation
        rules: {
            name: {
                required: true
            },
            phone: {
                required: true,
                number: true
            }
        },
        // Messages for form validation
        messages: {
            name: {
                required: 'Enter name'
            }
        },
        submitHandler: function(form) {

            var myData = new FormData($("#edit")[0]);
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            myData.append('_token', CSRF_TOKEN);

            $.ajax({
                url: 'edit_profile',
                type: 'POST',
                data: myData,
                dataType: 'json',
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]')
                        .attr('content'));
                    $('#loader').show();
                    $("#submit").prop('disabled', true);
                },
                success: function(data) {
                    if (data.type === 'success') {
                        notify_view(data.type, data.message);
                        $('#loader').hide();
                        $("#submit").prop('disabled', false); // disable button
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        $('#myModal').modal('hide'); // hide bootstrap modal
                        $('.has-error').html('');

                    } else if (data.type === 'error') {
                        $('.has-error').html('');
                        if (data.errors) {
                            $.each(data.errors, function(key, val) {
                                $('#error_' + key).html(val);
                            });
                        }
                        $("#status").html(data.message);
                        $('#loader').hide();
                        $("#submit").prop('disabled', false); // disable button

                    }
                }
            });
        }
        // <- end 'submitHandler' callback
    }); // <- end '.validate()'

});
</script>
@endsection