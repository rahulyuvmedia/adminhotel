@extends('backend.layouts.master')

@section('content')
<?php
    $roomNumber = '';
    if (isset($_GET['room'])) {
        $roomNumber = $_GET['room'];
    }
    
    echo $roomNumber;
?>

<h5 class="mb-4">Create Guest <button type="button" id="addForm" class="btn btn-primary">+</button></h5>
<div class="ant-col ant-col-17" style="padding-left: 8px; padding-right: 8px;">
    <div class="card mb-4">
        <div class="">
            <form id='create' action="{{ Route('admin.policeInquiry.store') }}" enctype="multipart/form-data"
                method="post" accept-charset="utf-8" class="needs-validation">
                @csrf

                <!-- Reservation Section -->
                <!-- Include existing reservation fields here -->

                <!-- Guest Information Section -->

                <div class="d-flex flex-wrap justify-content-between align-items-center p-4">
                    <!-- Include existing guest information fields here -->

                    <!-- Additional Fields -->
                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="address">Address <span style="color:red">*</span></label>
                        <input type="text" id="address" class="form-control address" name="address"
                            placeholder="Enter your address" />
                        @error('address')
                        <div class="has-error mt-2" style="color: red">Guest address required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="state">State <span style="color:red">*</span></label>
                        <input type="text" id="state" class="form-control state" name="state"
                            placeholder="Enter your state" />
                        @error('state')
                        <div class="has-error mt-2" style="color: red">Guest state required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="city">City <span style="color:red">*</span></label>
                        <input type="text" id="city" class="form-control city" name="city"
                            placeholder="Enter your city" />
                        @error('city')
                        <div class="has-error mt-2" style="color: red">Guest city required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="zipCode">Zip Code <span style="color:red">*</span></label>
                        <input type="text" id="zipCode" class="form-control zipCode" name="zipCode"
                            placeholder="Enter your zip code" />
                        @error('zipCode')
                        <div class="has-error mt-2" style="color: red">Guest zip code required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="arrivedFrom">Arrived From <span
                                style="color:red">*</span></label>
                        <input type="text" id="arrivedFrom" class="form-control arrivedFrom" name="arrivedFrom"
                            placeholder="Enter where the guest arrived from" />
                        @error('arrivedFrom')
                        <div class="has-error mt-2" style="color: red">Arrived From field is required.</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-between align-items-center p-4">





                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="arrivalDate">Arrival Date <span
                                style="color:red">*</span></label>
                        <input type="datetime-local" id="arrivalDate" class="form-control arrivalDate"
                            name="arrivalDate" />
                        @error('arrivalDate')
                        <div class="has-error mt-2" style="color: red">Arrival Date field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="passportNo">Passport No <span style="color:red">*</span></label>
                        <input type="text" id="passportNo" class="form-control passportNo" name="passportNo"
                            placeholder="Enter passport number" />
                        @error('passportNo')
                        <div class="has-error mt-2" style="color: red">Passport No field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="placeOfIssue">Place of Issue <span
                                style="color:red">*</span></label>
                        <input type="text" id="placeOfIssue" class="form-control placeOfIssue" name="placeOfIssue"
                            placeholder="Enter place of issue" />
                        @error('placeOfIssue')
                        <div class="has-error mt-2" style="color: red">Place of Issue field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="issueDate">Issue Date <span style="color:red">*</span></label>
                        <input type="datetime-local" id="issueDate" class="form-control issueDate" name="issueDate" />
                        @error('issueDate')
                        <div class="has-error mt-2" style="color: red">Issue Date field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="expiryDate">Expiry Date <span style="color:red">*</span></label>
                        <input type="datetime-local" id="expiryDate" class="form-control expiryDate"
                            name="expiryDate" />
                        @error('expiryDate')
                        <div class="has-error mt-2" style="color: red">Expiry Date field is required.</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-between align-items-center p-4">


                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="visaNo">Visa No <span style="color:red">*</span></label>
                        <input type="text" id="visaNo" class="form-control visaNo" name="visaNo"
                            placeholder="Enter visa number" />
                        @error('visaNo')
                        <div class="has-error mt-2" style="color: red">Visa No field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="visaType">Visa Type <span style="color:red">*</span></label>
                        <input type="text" id="visaType" class="form-control visaType" name="visaType"
                            placeholder="Enter visa type" />
                        @error('visaType')
                        <div class="has-error mt-2" style="color: red">Visa Type field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="visaPlaceOfIssue">Place of Issue <span
                                style="color:red">*</span></label>
                        <input type="text" id="visaPlaceOfIssue" class="form-control visaPlaceOfIssue"
                            name="visaPlaceOfIssue" placeholder="Enter place of issue" />
                        @error('visaPlaceOfIssue')
                        <div class="has-error mt-2" style="color: red">Place of Issue field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="visaIssueDate">Issue Date <span
                                style="color:red">*</span></label>
                        <input type="datetime-local" id="visaIssueDate" class="form-control visaIssueDate"
                            name="visaIssueDate" />
                        @error('visaIssueDate')
                        <div class="has-error mt-2" style="color: red">Issue Date field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="visaExpiryDate">Expiry Date <span
                                style="color:red">*</span></label>
                        <input type="datetime-local" id="visaExpiryDate" class="form-control visaExpiryDate"
                            name="visaExpiryDate" />
                        @error('visaExpiryDate')
                        <div class="has-error mt-2" style="color: red">Expiry Date field is required.</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-between align-items-center p-4">


                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="employed">Employed <span style="color:red">*</span></label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="employed" id="employedYes" value="yes">
                            <label class="form-check-label" for="employedYes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="employed" id="employedNo" value="no">
                            <label class="form-check-label" for="employedNo">No</label>
                        </div>
                        @error('employed')
                        <div class="has-error mt-2" style="color: red">Employed field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="guardianName">Guardian Name <span
                                style="color:red">*</span></label>
                        <input type="text" id="guardianName" class="form-control guardianName" name="guardianName"
                            placeholder="Enter guardian name" />
                        @error('guardianName')
                        <div class="has-error mt-2" style="color: red">Guardian Name field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="age">Age <span style="color:red">*</span></label>
                        <input type="number" id="age" class="form-control age" name="age" placeholder="Enter age" />
                        @error('age')
                        <div class="has-error mt-2" style="color: red">Age field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="purposeOfVisit">Purpose of Visit <span
                                style="color:red">*</span></label>
                        <input type="text" id="purposeOfVisit" class="form-control purposeOfVisit" name="purposeOfVisit"
                            placeholder="Enter purpose of visit" />
                        @error('purposeOfVisit')
                        <div class="has-error mt-2" style="color: red">Purpose of Visit field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="destinationPlace">Destination Place <span
                                style="color:red">*</span></label>
                        <input type="text" id="destinationPlace" class="form-control destinationPlace"
                            name="destinationPlace" placeholder="Enter destination place" />
                        @error('destinationPlace')
                        <div class="has-error mt-2" style="color: red">Destination Place field is required.</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-between align-items-center p-4">


                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="destinationState">Destination State <span
                                style="color:red">*</span></label>
                        <input type="text" id="destinationState" class="form-control destinationState"
                            name="destinationState" placeholder="Enter destination state" />
                        @error('destinationState')
                        <div class="has-error mt-2" style="color: red">Destination State field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="destinationCity">Destination City <span
                                style="color:red">*</span></label>
                        <input type="text" id="destinationCity" class="form-control destinationCity"
                            name="destinationCity" placeholder="Enter destination city" />
                        @error('destinationCity')
                        <div class="has-error mt-2" style="color: red">Destination City field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="contactNo">Contact No <span style="color:red">*</span></label>
                        <input type="text" id="contactNo" class="form-control contactNo" name="contactNo"
                            placeholder="Enter contact number" />
                        @error('contactNo')
                        <div class="has-error mt-2" style="color: red">Contact No field is required.</div>
                        @enderror
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="residentContact">Resident Contact <span
                                style="color:red">*</span></label>
                        <input type="number" id="residentContact" class="form-control" name="residentContact"
                            placeholder="Enter resident contact number" />
                        @error('residentContact')
                        <div class="has-error mt-2" style="color: red">Resident Contact field is required.</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="mobileNo">Mobile Number <span style="color:red">*</span></label>
                        <input type="number" id="mobileNo" class="form-control mobile" name="mobileNo"
                            placeholder="Enter mobile number" />
                        @error('mobileNo')
                        <div class="has-error mt-2" style="color: red">Mobile Number field is required.</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-between align-items-center p-4">


                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="description">Description</label>
                        <textarea id="description" class="form-control" name="description"
                            placeholder="Enter description"></textarea>
                        @error('description')
                        <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-success button-submit" data-loading-text="Loading..."><span
                            class="fa fa-save fa-fw"></span> Save
                    </button>
                </div>


            </form>
        </div>
    </div>
</div>

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
@stop