@extends('backend.layouts.master')

@section('content')
    <?php
    $roomNumber = '';
    if (isset($_GET['room'])) {
        $roomNumber = $_GET['room'];
    }
    
    ?>

    <style>
        .download-button {

            color: #3498db;
            padding: 2px 20px;
            font-size: 11px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <div class="container">
        <div class='row'>


            <div class="col-lg-8 col-md-8 col-sm-12 mb-5" style="padding-left: 8px; padding-right: 8px;">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0 p-2">Create Guest</h6>
                    </div>
                    <hr>
                    <div class="card-body">
                        <form id='create' action="{{ Route('admin.guest.store') }}" enctype="multipart/form-data"
                            method="post" accept-charset="utf-8" class="needs-validation">
                            @csrf
                            <div class="row">
                                <div class="d-flex flex-wrap justify-content-between align-items-center  p-3">
                                    <div class="col-lg-2 col-md-3 col-sm-12 ">
                                        <label class="form-label" for="check_in">Check-In <span
                                                style="color:red">*</span></label>
                                        <input type="datetime-local" class="form-control" id="check_in" name="check_in" />
                                        @error('check_in')
                                            <div class="has-error mt-2" style="color: red">Guest check-in required.</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-2 col-md-3 col-sm-12 ">
                                        <label class="form-label" for="check_out">Check-Out <span
                                                style="color:red">*</span></label>
                                        <input type="datetime-local" class="form-control" id="check_out" name="check_out" />
                                        @error('check_out')
                                            <div class="has-error mt-2" style="color: red">Guest check-out required.</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-2 col-md-3 col-sm-12 ">
                                        <label class="form-label" for="roomNumber">Room Number <span
                                                style="color:red">*</span></label>
                                        <select class="form-select" id="roomNumber" name="roomNumber"
                                            onchange="updateRoomPrice()">
                                            <option>Select Room</option>
                                            @if (count($rooms) > 0)
                                                @foreach ($rooms as $key => $value)
                                                    <option value="{{ $value->id }}" data-price="{{ $value->price }}"
                                                        @if ($value->id == $roomNumber) selected @endif>
                                                        {{ $value->roomNumber }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('roomNumber')
                                            <div class="has-error mt-2" style="color: red">Guest room number required.</div>
                                        @enderror
                                    </div>




                                    <div class="col-lg-2 col-md-3 col-sm-12 ">
                                        <label class="form-label" for="member">Adult <span
                                                style="color:red">*</span></label>
                                        <select id="member" name="member" class="form-select">
                                            <option value=""> Adults</option>
                                            @for ($i = 1; $i <= 15; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                        @error('member')
                                            <div class="has-error mt-2" style="color: red">Member required.</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-2 col-md-3 col-sm-12 ">
                                        <label class="form-label" for="child">Child <span
                                                style="color:red">*</span></label>
                                        <select id="child" name="child" class="form-select">
                                            <option value=""> Child</option>
                                            @for ($i = 1; $i <= 15; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                        @error('child')
                                            <div class="has-error mt-2" style="color: red">Child required.</div>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <p class="p-2">GUEST INFORMATION</p>




                                <!-- Guest Information Section -->
                                <div class="d-flex flex-wrap justify-content-between align-items-center  p-3">


                                    <div class="col-lg-2 col-md-3 col-sm-12 ">
                                        <label class="form-label" for="name">Guest Name <span
                                                style="color:red">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="name" name="name"
                                                class="form-control credit-card-mask" placeholder="Enter your name"
                                                aria-describedby="name2" />
                                            <span class="input-group-text cursor-pointer p-1" id="name2"><span
                                                    class="card-type"></span></span>
                                        </div>
                                        @error('name')
                                            <div class="has-error mt-2" style="color: red">Guest name required.</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-2 col-md-3 col-sm-12 ">
                                        <label class="form-label" for="mobile">Phone Number <span
                                                style="color:red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">IN (+91)</span>
                                            <input type="number" name="mobile" id="mobile" class="form-control mobile"
                                                placeholder="602 555 0111" />
                                        </div>
                                        @error('mobile')
                                            <div class="has-error mt-2" style="color: red">Guest mobile required.</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-2 col-md-3 col-sm-12 ">
                                        <label class="form-label" for="email">Email <span
                                                style="color:red">*</span></label>
                                        <input type="text" id="email" name='email' class="form-control email"
                                            placeholder="Enter your email" />
                                        @error('email')
                                            <div class="has-error mt-2" style="color: red">Guest email required.</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-2 col-md-3 col-sm-12 ">
                                        <label class="form-label" for="time-mask">Address <span
                                                style="color:red">*</span></label>
                                        <input type="text" id="address" class="form-control address" name='address'
                                            placeholder="Enter your address" />
                                        @error('address')
                                            <div class="has-error mt-2" style="color: red">Guest address required.</div>
                                        @enderror
                                    </div>



                                    <div class="col-lg-2 col-md-3 col-sm-12 ">
                                        <label class="form-label" for="time-mask">Aadhar Number <span
                                                style="color:red">*</span></label>
                                        <input type="text" id="aadharNo" class="form-control aadharNo"
                                            name='aadharNo' placeholder="Enter aadhar Num" />
                                        @error('aadharNo')
                                            <div class="has-error mt-2" style="color: red">Guest aadhar Number required.</div>
                                        @enderror
                                    </div>



                                </div>


                                <div class="d-flex flex-wrap justify-content-between align-items-center  p-3">

                                    <div class="col-lg-2 col-md-3 col-sm-12 ">
                                        <label class="form-label" for="bookingSource"> Booking Source type <span
                                                style="color:red">*</span>
                                        </label>
                                        <select class="form-select" id="bookingSource" name="bookingSource">
                                            <option value="" selected> Source type</option>

                                            @foreach ($model as $type)
                                                <option value="{{ $type->title }}">{{ $type->title }}</option>
                                            @endforeach

                                        </select>
                                        @error('bookingSource')
                                            <div class="has-error mt-2" style="color: red">booking Sourcere quired.</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-12 ">
                                        <label class="form-label" for="idproff">Id proof <span
                                                style="color:red">*</span></label>
                                        <div class="input-group">
                                            <input id="photo" type="file" name="idproff" style="display:none"
                                                onchange="displaySelectedImage(this)">
                                            <div class="input-group-prepend">
                                                <a class="btn btn-dark text-white"
                                                    onclick="$('input[id=photo]').click();">Image</a>
                                            </div>
                                            <input type="hidden" name="idproff" class="form-control"
                                                id="SelectedFileName" value="" readonly style='border-color:white'>
                                            @error('idproff')
                                                <div class="has-error mt-2">Guest id proof required.</div>
                                            @enderror
                                        </div>

                                        <!-- Display selected image preview -->
                                        <img id="selectedImagePreview" src="" alt="Selected Image"
                                            style="display:none; max-width: 50%; margin-top: 10px;">
                                        @error('idproff')
                                            <div class="has-error mt-2" style="color: red">Guest id proof required.</div>
                                        @enderror



                                    </div>
                                </div>
                                <div class="d-flex card-body col-lg-6">
                                    <div class="form-group col-lg-6">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input" name="payment">
                                            <label class="form-check-label">Payment</label>
                                        </label>
                                    </div>


                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12   p-3">
                                    <button type="submit" class="btn button-submit"
                                        style="background-color:#7367f0 ; color:white">
                                        <span class="fa fa-save fa-fw"></span> Save
                                    </button>
                                </div>
                            </div>


                        </form>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-8 col-sm-12" style="padding-left: 8px; padding-right: 8px;">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Billing Summary</h6>
                        <button onclick="downloadPDF()" class="btn btn-primary">Download PDF</button>
                    </div>
                    <div class="card-body" id="pdfContent">

                        <hr>
                        <div class="text-center">
                            <a href="#" class="app-brand-link">
                                <span class="app-brand-logo demo">
                                    <img src="{{ asset('/assets/img/icon.svg') }}" class="img-fluid"
                                        alt="Yuvmedia Logo" />
                                </span>
                                <span class="app-brand-text demo menu-text fw-bold">Yuvmedia</span>
                            </a>
                        </div>

                        <div class="d-flex justify-content-center mt-3">
                            <div class="col-lg-5">
                                <div class="card-body">
                                    <h6 class="card-title">Check-in</h6>
                                    <div class="form-label" id="checkInDisplay"></div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="card-body">
                                    <h6 class="card-title"> →</h6>
                                    <div class="form-label"></div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="card-body">
                                    <h6 class="card-title">Check-Out</h6>
                                    <div class="form-label" id="checkOutDisplay"></div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" style="background-color:#f2f6f9">
                            <div class="d-flex justify-content-between">
                                <div class="form-group">
                                    <label class="form-label">Room Charges</label>
                                </div>
                                <div class="form-group" style="text-align: -webkit-right;">
                                    <div class="form-label" id="roomPriceDisplay">-</div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="form-group">
                                    <label class="form-label">Taxes</label>
                                </div>
                                <div class="form-group" style="text-align: -webkit-right;">
                                    <div class="form-label">0.00</div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="form-group">
                                    <label class="form-label">Due Amount</label>
                                </div>
                                <div class="form-group" style="text-align: -webkit-right;">
                                    <div class="form-label">0.00</div>
                                </div>
                            </div>

                        </div>

                        <div class="d-flex justify-content-center card-body">
                            <div class="form-group">
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Payment</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Old Runnig Code  
        // function updateRoomPrice() {
        //     var roomSelect = document.getElementById('roomNumber');
        //     var selectedOption = roomSelect.options[roomSelect.selectedIndex];

        //     var roomPricePerDay = parseFloat(selectedOption.getAttribute('data-price'));
        //     var checkInTime = new Date(document.getElementById('check_in').value);
        //     var checkOutTime = new Date(document.getElementById('check_out').value);

        //     // Calculate the duration of stay in hours
        //     var durationInHours = (checkOutTime - checkInTime) / (60 * 60 * 1000);

        //     // Calculate the total room charges
        //     var totalRoomCharges = roomPricePerDay * (durationInHours / 24);

        //     var priceDisplay = document.getElementById('roomPriceDisplay');

        //     if (priceDisplay) {
        //         // priceDisplay.textContent = totalRoomCharges.toFixed(2); 
        //         priceDisplay.textContent = roomPricePerDay.toFixed(2) + ' * ' + (durationInHours / 24).toFixed(2) + ' days = ' + totalRoomCharges.toFixed(2);
        //     }
        // }

        function updateRoomPrice() {
            var roomSelect = document.getElementById('roomNumber');
            var selectedOption = roomSelect.options[roomSelect.selectedIndex];

            var roomPricePerDay = parseFloat(selectedOption.getAttribute('data-price'));
            var checkInTime = new Date(document.getElementById('check_in').value);
            var checkOutTime = new Date(document.getElementById('check_out').value);

            // Calculate the duration of stay in days
            var durationInDays = (checkOutTime - checkInTime) / (24 * 60 * 60 * 1000);

            // Calculate the total room charges
            var totalRoomCharges = roomPricePerDay * durationInDays;

            var priceDisplay = document.getElementById('roomPriceDisplay');

            if (priceDisplay) {
                // Display with rupee symbol, two decimal places, and no decimal places for days
                priceDisplay.textContent = '\u20B9' + roomPricePerDay.toFixed(0) + ' per day * ' + Math.floor(
                        durationInDays) +
                    ' days = \u20B9' + totalRoomCharges.toFixed(2);
            }
        }
    </script>


    <script>
        document.getElementById('check_in').addEventListener('change', function() {
            var selectedCheckInTime = this.value;

            var formattedDate = new Date(selectedCheckInTime).toLocaleDateString(
                'en-GB');

            document.getElementById('checkInDisplay').querySelector('div').textContent = formattedDate;
        });


        document.getElementById('check_out').addEventListener('change', function() {
            var selectedCheckOutTime = this.value;

            var formattedDate = new Date(selectedCheckOutTime).toLocaleDateString(
                'en-GB');

            document.getElementById('checkOutDisplay').querySelector('div').textContent = formattedDate;
        });
    </script>




    <script>
        document.getElementById('addForm').addEventListener('click', function() {
            // Clone the form
            var originalForm = document.getElementById('create');
            var clonedForm = originalForm.cloneNode(true);

            // Clear values in the cloned form
            clonedForm.reset();

            // Find all input elements in the original form
            var originalInputs = originalForm.querySelectorAll('input, select, textarea');

            // Find all input elements in the cloned form
            var clonedInputs = clonedForm.querySelectorAll('input, select, textarea');

            // Generate a unique index for the cloned form
            var cloneIndex = Date.now();

            // Copy values from original to cloned form
            for (var i = 0; i < originalInputs.length; i++) {
                if (originalInputs[i].type !== 'submit') {
                    // Update the name attribute to include the unique index
                    var originalName = originalInputs[i].name;
                    clonedInputs[i].name = originalName + '_' + cloneIndex;

                    // Copy the value
                    clonedInputs[i].value = originalInputs[i].value;

                    // If it's a select element, copy the selected option
                    if (originalInputs[i].tagName === 'SELECT') {
                        clonedInputs[i].value = originalInputs[i].value;
                    }
                }
            }

            // Append the cloned form after the original form
            originalForm.parentNode.insertBefore(clonedForm, originalForm.nextSibling);
        });
    </script>
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



    <script>
        function downloadPDF() {
            var element = document.getElementById('pdfContent');

            // Generate PDF
            html2pdf(element);
        }
    </script>



    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

@stop
