@extends('backend.layouts.master')
@section('content')
    <div class="col-12">
        <div class="card mb-4">
            <h5 class="card-header">Create Guest</h5>
            <div class="card-body">
                <div class="row">
                    <!-- Credit Card -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="creditCardMask">Credit Card</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="creditCardMask" name="creditCardMask"
                                class="form-control credit-card-mask" placeholder="1356 3215 6548 7898"
                                aria-describedby="creditCardMask2" />
                            <span class="input-group-text cursor-pointer p-1" id="creditCardMask2"><span
                                    class="card-type"></span></span>
                        </div>
                    </div>
                    <!-- Phone Number -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="phone-number-mask">Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text">IN (+91)</span>
                            <input type="text" id="phone-number-mask" class="form-control phone-number-mask"
                                placeholder="202 555 0111" />
                        </div>
                    </div>
                    <!-- Date -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="date-mask">Date</label>
                        <input type="text" id="date-mask" class="form-control date-mask" placeholder="YYYY-MM-DD" />
                    </div>
                    <!-- Time -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="time-mask">Time</label>
                        <input type="text" id="time-mask" class="form-control time-mask" placeholder="hh:mm:ss" />
                    </div>
                    <!-- Numeral Formatting -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="numeral-mask">Numeral formatting</label>
                        <input type="text" id="numeral-mask" class="form-control numeral-mask"
                            placeholder="Enter Numeral" />
                    </div>
                    <!-- Blocks -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="block-mask">Blocks</label>
                        <input type="text" id="block-mask" class="form-control block-mask"
                            placeholder="Blocks [4, 3, 3]" />
                    </div>
                    <!-- Delimiters -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                        <label class="form-label" for="delimiter-mask">Delimiters</label>
                        <input type="text" id="delimiter-mask" class="form-control delimiter-mask"
                            placeholder="Delimiter: '.'" />
                    </div>
                    <!-- Custom Delimiters -->
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                        <label class="form-label" for="custom-delimiter-mask">Custom Delimiters</label>
                        <input type="text" id="custom-delimiter-mask" class="form-control custom-delimiter-mask"
                            placeholder="Delimiter: ['.', '.', '-']" />
                    </div>
                    <!-- Prefix -->
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <label class="form-label" for="prefix-mask">Prefix</label>
                        <input type="text" id="prefix-mask" class="form-control prefix-mask" />
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        <input type="text" class="form-control" id="name" name="name" value=""
                            placeholder="">
                        @error('name')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-md-12 col-sm-12">
                        <label for=""> Email </label>
                        <input type="text" class="form-control" id="email" name="email" value=""
                            placeholder="">
                        @error('email')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-md-12 col-sm-12">
                        <label for="phone">Phone Number </label>
                        <input type="text" class="form-control" id="mobile" name="mobile" value=" "
                            placeholder="">


                        @error('mobile')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="clearfix"></div>
                    <div class="form-group col-md-12 col-sm-12">
                        <label for=""> Address </label>
                        <input type="text" class="form-control" id="address" name="address" value=" "
                            placeholder="">
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
                        <input type="text" name="idproff" class="form-control" id="SelectedFileName" value=""
                            readonly>
                        @error('idproff')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror

                    </div>

                    <!-- Display selected image preview -->
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
                        <input type="datetime-local" class="form-control" id="check_in" name="check_in"
                            value="">
                    </div>

                    <div class="form-group col-md-12 col-sm-12">
                        <label for="check_out">Check-Out</label>
                        <input type="datetime-local" class="form-control" id="check_out" name="check_out"
                            value="">
                    </div>




                    <div class="form-group col-md-12 mb-3 mt-4">
                        <button type="submit" class="btn btn-success button-submit"><span
                                class="fa fa-save fa-fw"></span>
                            Save
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
