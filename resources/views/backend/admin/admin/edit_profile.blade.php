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
                        <img src="../../assets/img/avatars/14.png" alt="user-avatar"
                            class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="ti ti-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" hidden
                                    accept="image/png, image/jpeg" />
                            </label>
                            <button type="button" class="btn btn-label-secondary account-image-reset mb-3">
                                <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>

                            <div class="text-muted">Allowed JPG, GIF or PNG. Max size of 800K</div>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input class="form-control" type="text" id="firstName" name="firstName" value="John"
                                    autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="text" id="email" name="email"
                                    value="john.doe@example.com" placeholder="john.doe@example.com" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="organization" class="form-label">Organization</label>
                                <input type="text" class="form-control" id="organization" name="organization"
                                    value="Pixinvent" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">US (+1)</span>
                                    <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                        placeholder="202 555 0111" />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Address" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">State</label>
                                <input class="form-control" type="text" id="state" name="state"
                                    placeholder="California" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="zipCode" class="form-label">Zip Code</label>
                                <input type="text" class="form-control" id="zipCode" name="zipCode"
                                    placeholder="231465" maxlength="6" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">Country</label>
                                <select id="country" class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Canada">Canada</option>
                                    <option value="China">China</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="language" class="form-label">Language</label>
                                <select id="language" class="select2 form-select">
                                    <option value="">Select Language</option>
                                    <option value="en">English</option>
                                    <option value="fr">French</option>
                                    <option value="de">German</option>
                                    <option value="pt">Portuguese</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="timeZones" class="form-label">Timezone</label>
                                <select id="timeZones" class="select2 form-select">
                                    <option value="">Select Timezone</option>
                                    <option value="-12">(GMT-12:00) International Date Line West</option>
                                    <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                    <option value="-10">(GMT-10:00) Hawaii</option>
                                    <option value="-9">(GMT-09:00) Alaska</option>
                                    <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                                    <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                    <option value="-7">(GMT-07:00) Arizona</option>
                                    <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                    <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                                    <option value="-6">(GMT-06:00) Central America</option>
                                    <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                                    <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                    <option value="-6">(GMT-06:00) Saskatchewan</option>
                                    <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                    <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                                    <option value="-5">(GMT-05:00) Indiana (East)</option>
                                    <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                    <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="currency" class="form-label">Currency</label>
                                <select id="currency" class="select2 form-select">
                                    <option value="">Select Currency</option>
                                    <option value="usd">USD</option>
                                    <option value="euro">Euro</option>
                                    <option value="pound">Pound</option>
                                    <option value="bitcoin">Bitcoin</option>
                                </select>
                            </div>
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

                                            {{ method_field('PATCH') }}
                                            <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                                                <label for=""> Name </label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ $user->name }}" placeholder="" required>
                                                <span id="error_name" class="has-error"></span>
                                            </div>

                                            <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                                                <label for=""> Number </label>
                                                <input type="text" class="form-control" id="mobile" name="mobile"
                                                    value="{{ $user->mobile }}" placeholder="" required>
                                                <span id="error_name" class="has-error"></span>
                                            </div>

                                            <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                                                <label for=""> Business Name </label>
                                                <input type="text" class="form-control" id="business_name"
                                                    name="business_name" value="{{ $user->business_name }}"
                                                    placeholder="" required>
                                                <span id="error_name" class="has-error"></span>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                                                <label for=""> Address </label>
                                                <input type="text" class="form-control" id="address" name="address"
                                                    value="{{ $user->address }}" placeholder="" required>
                                                <span id="error_name" class="has-error"></span>
                                            </div>

                                            <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                                                <label for=""> Email </label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    value="{{ $user->email }}" placeholder="">
                                                <span id="error_email" class="has-error"></span>
                                            </div>

                                            <div class="col-xl-6 col-md-6 col-sm-12 mb-4">

                                                <div class="input-group mt-3">


                                                    <input id="photo" type="file" name="idproff"
                                                        style="display:none">
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
