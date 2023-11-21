@extends('backend.layouts.master')
@section('content')
<div class="col-12">
    <div class="card mb-4">
        <h5 class="card-header">Create Guest</h5>
        <div class="card-body">
            <form id='create' action="{{ Route('admin.guest.store') }}" enctype="multipart/form-data" method="post"
                accept-charset="utf-8" class="needs-validation">
                @csrf
                <div class="row">
                    <!-- Credit Card -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="name">Guest Name <span style="color:red">*</span></label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="name" name="name" class="form-control credit-card-mask"
                                placeholder="Enter your name" aria-describedby="name2" />
                            <span class="input-group-text cursor-pointer p-1" id="name2"><span
                                    class="card-type"></span></span>
                        </div>
                        @error('name')
                        <div class="has-error mt-2" style="color: red"> Guest name required.</div>
                        @enderror
                    </div>
                    <!-- Phone Number -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="mobile">Phone Number <span style="color:red">*</span> </label>
                        <div class="input-group">
                            <span class="input-group-text">IN (+91)</span>
                            <input type="number" name="mobile" id="mobile" class="form-control mobile"
                                placeholder="602 555 0111" />
                        </div>
                        @error('mobile')
                        <div class="has-error mt-2" style="color: red"> Guest mobile required.</div>
                        @enderror
                    </div>
                    <!-- Date -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="email">Email <span style="color:red">*</span></label>
                        <input type="text" id="email" name='email' class="form-control email"
                            placeholder="Enter your email" />
                        @error('email')
                        <div class="has-error mt-2" style="color: red">Guest email required.</div>
                        @enderror
                    </div>
                    <!-- Time -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="time-mask">Address <span style="color:red">*</span></label>
                        <input type="text" id="address" class="form-control address" name='address'
                            placeholder="Enter your address" />
                        @error('address')
                        <div class="has-error mt-2" style="color: red">Guest address required.</div>
                        @enderror
                    </div>
                    <!-- Numeral Formatting -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="roomNumber">Room Number <span style="color:red">*</span></label>
                        <select class="form-control" id="roomNumber" name="roomNumber">
                            <option>Select Room</option>
                            @if (count($rooms) > 0)
                            @foreach ($rooms as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->roomNumber }}</option>
                            @endforeach
                            @endif
                        </select>
                        @error('roomNumber')
                        <div class="has-error mt-2" style="color: red">Guest room number required.</div>
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

                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="check_in">Check-In <span style="color:red">*</span></label>
                        <input type="datetime-local" class="form-control" id="check_in" name="check_in" />
                        @error('check_in')
                        <div class="has-error mt-2" style="color: red">Guest check in required.</div>
                        @enderror
                    </div>

                    <!-- Delimiters -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="check_out">Check-Out <span style="color:red">*</span></label>
                        <input type="datetime-local" class="form-control" id="check_out" name="check_out" />
                        @error('check_out')
                        <div class="has-error mt-2" style="color: red">Guest check out required.</div>
                        @enderror
                    </div>

                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <button type="submit" class="btn btn-success button-submit">
                            <span class="fa fa-save fa-fw"></span> Save
                        </button>
                    </div>





                </div>

            </form>


        </div>
    </div>
</div>
<!-- 
<div class="card">
    <h5 class="card-header">Create Guest</h5>
    <div class="card-body">
        <form id='create' action="{{ Route('admin.guest.store') }}" enctype="multipart/form-data" method="post"
            accept-charset="utf-8" class="needs-validation">
            @csrf
            <div id="status"></div>
            <div class="form-row">




                <div class="clearfix"></div>
                <div class="form-group col-md-12 col-sm-12">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="" placeholder="">
                    @error('name')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-12 col-sm-12">
                    <label for=""> Email </label>
                    <input type="text" class="form-control" id="email" name="email" value="" placeholder="">
                    @error('email')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-12 col-sm-12">
                    <label for="phone">Phone Number </label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value=" " placeholder="">


                    @error('mobile')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>

                <div class="clearfix"></div>
                <div class="form-group col-md-12 col-sm-12">
                    <label for=""> Address </label>
                    <input type="text" class="form-control" id="address" name="address" value=" " placeholder="">
                    @error('address')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>
                <div class="clearfix"></div>


                <label for="photo">Doc. (File must be jpg, jpeg, png)</label>
                <div class="input-group">
                    <input id="photo" type="file" name="idproff" style="display:none"
                        onchange="displaySelectedImage(this)">
                    <div class="input-group-prepend">
                        <a class="btn btn-dark text-white" onclick="$('input[id=photo]').click();">Image</a>
                    </div>
                    <input type="text" name="idproff" class="form-control" id="SelectedFileName" value="" readonly>
                    @error('idproff')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>

 
                <img id="selectedImagePreview" src="" alt="Selected Image"
                    style="display:none; max-width: 10%; margin-top: 10px;">




                <div class="clearfix"></div>
                <div class="mt-3 form-group col-md-12 col-sm-12">
                    <label for=""> Room Number </label>

                    <select class="form-control" id="roomNumber" name="roomNumber">
                        <option>Select Room</option>
                        @if (count($rooms) > 0)
                        @foreach ($rooms as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->roomNumber }}</option>
                        @endforeach
                        @endif
                    </select>


                </div>


                <div class="form-group col-md-12 col-sm-12">
                    <label for="check_in">Check-In</label>
                    <input type="datetime-local" class="form-control" id="check_in" name="check_in" value="">
                </div>

                <div class="form-group col-md-12 col-sm-12">
                    <label for="check_out">Check-Out</label>
                    <input type="datetime-local" class="form-control" id="check_out" name="check_out" value="">
                </div>




                <div class="form-group col-md-12 mb-3 mt-4">
                    <button type="submit" class="btn btn-success button-submit"><span class="fa fa-save fa-fw"></span>
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div> -->


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