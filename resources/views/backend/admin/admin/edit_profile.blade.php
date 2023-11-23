@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('content')

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

















    new

    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">My Profile /</span> Update Profile
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
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                                <a onclick="$('input[id=photo]').click();">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="ti ti-upload d-block d-sm-none"></i>

                                </a>
                            </label>
                            <input type="file" id="upload" class="account-file-input" hidden
                                accept="image/png, image/jpeg" required />

                            <div class="text-muted">Allowed Max size of 800K</div>
                            @error('idproff')
                                <div class="has-error mt-2 ">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <div class="card-body">
                    <form id='edit' action="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        @csrf
                        <div class="row">
                            {{ method_field('PATCH') }}
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label"> Name</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value="{{ $user->name }}" autofocus required />
                                <span id="error_name" class="has-error"></span>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="business_name" class="form-label">Business Name</label>
                                <input class="form-control" type="text" id="business_name" name="business_name"
                                    value="{{ $user->business_name }}" autofocus required />
                                <span id="error_name" class="has-error"></span>
                            </div>


                            <div class="mb-3 col-md-6">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input class="form-control" type="text" id="mobile" name="mobile"
                                    value="{{ $user->mobile }}" autofocus required />
                                <span id="error_name" class="has-error"></span>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input class="form-control" type="text" id="address" name="address"
                                    value="{{ $user->address }}" autofocus required />
                                <span id="error_name" class="has-error"></span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" type="text" id="email" name="email"
                                    value="{{ $user->email }}" autofocus required />
                                <span id="error_name" class="has-error"></span>
                            </div>


                            <br />




                            <input id="photo" type="file" name="idproff" style="display:none">
                            <div class="input-group-prepend">






                               




                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                            </div>
                    </form>
                </div>
                <!-- /Account -->
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
                            xhr.setRequestHeader('X-CSRF-Token', $(
                                    'meta[name="csrf-token"]')
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
