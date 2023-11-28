@extends('backend.layouts.master')

@section('content')
<?php
    $roomNumber = '';
    if (isset($_GET['room'])) {
        $roomNumber = $_GET['room'];
    }
    
    echo $roomNumber;
?>
<h5 class="mb-4">Create Guest</h5>
<div class="ant-col ant-col-17" style="padding-left: 8px; padding-right: 8px;">
    <div class="card mb-4">

        <div class="">
            <form id='create' action="{{ Route('admin.guest.store') }}" enctype="multipart/form-data" method="post"
                accept-charset="utf-8" class="needs-validation">
                @csrf
                <div class="">
                    <!-- Reservation Section -->
                    <div class="d-flex flex-wrap justify-content-between align-items-center  p-4">
                        <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                            <label class="form-label" for="check_in">Check-In <span style="color:red">*</span></label>
                            <input type="datetime-local" class="form-control" id="check_in" name="check_in" />
                            @error('check_in')
                            <div class="has-error mt-2" style="color: red">Guest check-in required.</div>
                            @enderror
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                            <label class="form-label" for="check_out">Check-Out <span style="color:red">*</span></label>
                            <input type="datetime-local" class="form-control" id="check_out" name="check_out" />
                            @error('check_out')
                            <div class="has-error mt-2" style="color: red">Guest check-out required.</div>
                            @enderror
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                            <label class="form-label" for="roomNumber">Room Number <span
                                    style="color:red">*</span></label>
                            <select class="form-control" id="roomNumber" name="roomNumber">
                                <option>Select Room</option>
                                @if (count($rooms) > 0)
                                @foreach ($rooms as $key => $value)
                                <option value="{{ $value->id }}" @if ($value->id == $roomNumber) selected @endif>
                                    {{ $value->roomNumber }}</option>
                                @endforeach
                                @endif
                            </select>
                            @error('roomNumber')
                            <div class="has-error mt-2" style="color: red">Guest room number required.</div>
                            @enderror
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                            <label class="form-label" for="member">Adult <span style="color:red">*</span></label>
                            <input type="text" id="member" name='member' class="form-control "
                                placeholder="Enter your member" />
                            @error('member')
                            <div class="has-error mt-2" style="color: red">Member required.</div>
                            @enderror
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                            <label class="form-label" for="child">Child <span style="color:red">*</span></label>
                            <input type="text" id="child" name='child' class="form-control child-member"
                                placeholder="Enter child member" />
                            @error('child')
                            <div class="has-error mt-2" style="color: red">Child member required.</div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <p class=" p-1">GUEST INFORMATION</p>
                    <!-- Guest Information Section -->
                    <div class="d-flex flex-wrap justify-content-between align-items-center  p-4">


                        <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                            <label class="form-label" for="name">Guest Name <span style="color:red">*</span></label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="name" name="name" class="form-control credit-card-mask"
                                    placeholder="Enter your name" aria-describedby="name2" />
                                <span class="input-group-text cursor-pointer p-1" id="name2"><span
                                        class="card-type"></span></span>
                            </div>
                            @error('name')
                            <div class="has-error mt-2" style="color: red">Guest name required.</div>
                            @enderror
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                            <label class="form-label" for="mobile">Phone Number <span style="color:red">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">IN (+91)</span>
                                <input type="number" name="mobile" id="mobile" class="form-control mobile"
                                    placeholder="602 555 0111" />
                            </div>
                            @error('mobile')
                            <div class="has-error mt-2" style="color: red">Guest mobile required.</div>
                            @enderror
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                            <label class="form-label" for="email">Email <span style="color:red">*</span></label>
                            <input type="text" id="email" name='email' class="form-control email"
                                placeholder="Enter your email" />
                            @error('email')
                            <div class="has-error mt-2" style="color: red">Guest email required.</div>
                            @enderror
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                            <label class="form-label" for="time-mask">Address <span style="color:red">*</span></label>
                            <input type="text" id="address" class="form-control address" name='address'
                                placeholder="Enter your address" />
                            @error('address')
                            <div class="has-error mt-2" style="color: red">Guest address required.</div>
                            @enderror
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                            <label class="form-label" for="idproff">Id proof <span style="color:red">*</span></label>
                            <div class="input-group">
                                <input id="photo" type="file" name="idproff" style="display:none"
                                    onchange="displaySelectedImage(this)">
                                <div class="input-group-prepend">
                                    <a class="btn btn-dark text-white" onclick="$('input[id=photo]').click();">Image</a>
                                </div>
                                <input type="text" name="idproff" class="form-control" id="SelectedFileName" value=""
                                    readonly>
                                @error('idproff')
                                <div class="has-error mt-2">Guest id proof required.</div>
                                @enderror
                            </div>

                            <!-- Display selected image preview -->
                            <img id="selectedImagePreview" src="" alt="Selected Image"
                                style="display:none; max-width: 100%; margin-top: 10px;">
                            @error('idproff')
                            <div class="has-error mt-2" style="color: red">Guest id proof required.</div>
                            @enderror

                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                            <button type="submit" class="btn btn-success button-submit">
                                <span class="fa fa-save fa-fw"></span> Save
                            </button>
                        </div>
                    </div>


                </div>
            </form>
        </div>
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

// Get the current date and time
var currentDate = new Date();

// Update the min attribute for check_in input to prevent past dates
document.getElementById('check_in').min = formatDate(currentDate);

// Update the min attribute for check_out input to prevent past dates
document.getElementById('check_out').min = formatDate(currentDate);

function formatDate(date) {
    var year = date.getFullYear();
    var month = (date.getMonth() + 1).toString().padStart(2, '0');
    var day = date.getDate().toString().padStart(2, '0');
    var hours = date.getHours().toString().padStart(2, '0');
    var minutes = date.getMinutes().toString().padStart(2, '0');

    return `${year}-${month}-${day}T${hours}:${minutes}`;
}
</script>
@stop