@extends('backend.layouts.master')
@section('content')
<div class="col-12">
    <div class="card mb-4">
        <h5 class="card-header">Create Guest</h5>
        <div class="card-body">
            <form action="{{ route('admin.users.store') }}" enctype="multipart/form-data" method="post"
                accept-charset="utf-8" class="needs-validation" novalidate>

                @csrf
                <div class="row">


                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="name">Guest Name <span style="color:red">*</span></label>

                        <input type="text" id="name" name="name" class="form-control credit-card-mask"
                            placeholder="Enter your name" />


                        @error('name')
                        <div class="has-error mt-2" style="color: red"> Guest name required.</div>
                        @enderror
                    </div>





                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="business_name">Business Name <span
                                style="color:red">*</span></label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="business_name" name="business_name"
                                class="form-control credit-card-mask" placeholder="Enter your business name" />

                        </div>
                        @error('business_name')
                        <div class="has-error mt-2" style="color: red"> Business name required.</div>
                        @enderror
                    </div>


                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="mobile">Number <span style="color:red">*</span></label>

                        <input type="number" id="mobile" name="mobile" class="form-control credit-card-mask"
                            placeholder="Enter your mobile number" />


                        @error('mobile')
                        <div class="has-error mt-2" style="color: red">Mobile number required.</div>
                        @enderror
                    </div>





                    <div class="form-group col-md-6 col-sm-12">
                        <label for=""> Email </label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email address" required>

                        @error('email')
                        <div class="has-error mt-2" style="color: red">Email is required.</div>
                        @enderror

                    </div>



                    <div class="form-group col-md-6 col-sm-12">
                        <label for=""> Address </label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
                        <span id="error_address" class="has-error"></span>
                        @error('address')
                        <div class="has-error mt-2" style="color: red">Address required.</div>
                        @enderror
                    </div>




                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="idproff">Id proff <span style="color:red">*</span></label>
                        <div class="input-group">
                            <input id="photo" type="file" name="idproff" style="display:none"
                                onchange="displaySelectedImage(this)">
                            <div class="input-group-prepend">
                                <a class="btn btn-dark text-white" onclick="$('input[id=photo]').click();">Image</a>
                            </div>
                            <input type="text" name="idproff" class="form-control" id="SelectedFileName" value=""
                                readonly>
                            @error('idproff')
                            <div class="has-error mt-2">Guest idproff required.</div>
                            @enderror
                        </div>

                        <!-- Display selected image preview -->
                        <img id="selectedImagePreview" src="" alt="Selected Image"
                            style="display:none; max-width: 10%; margin-top: 10px;">
                        @error('name')
                        <div class="has-error mt-2" style="color: red">Guest idproff required.</div>
                        @enderror

                    </div>




                    <div class="form-group col-md-6 col-sm-12">
                        <label>Password:</label>
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                        <span id="error_password" class="has-error"></span>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label>Confirm Password:</label>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                            class="form-control" required>
                        <span id="error_confirm-password" class="has-error"></span>
                    </div>


                </div>
                <br />

                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-success button-submit" data-loading-text="Loading..."><span
                            class="fa fa-save fa-fw"></span> Save
                    </button>
                </div>
        </div>
        </form>

    </div>
</div>
<script>
function displaySelectedImage(input) {
    var selectedFileName = input.files[0].name;
    document.getElementById('SelectedFileName').value = selectedFileName;

    // Display image preview
    var reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('selectedImagePreview').src = e.target.result;
        document.getElementById('selectedImagePreview').style.display = 'block';
    };
    reader.readAsDataURL(input.files[0]);
}
</script>
@stop