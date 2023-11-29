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

<h5 class="mb-4">Edit Guest</h5>

<div class="ant-col ant-col-17" style="padding-left: 8px; padding-right: 8px;">
    <div class="card mb-4">

        <form id='edit' action="{{ Route('admin.policeInquiry.update', $policeinquiry->id) }}"
            enctype="multipart/form-data" method="post" accept-charset="utf-8" class="needs-validation">
            @csrf
            @method('PATCH')

            <div class="d-flex flex-wrap align-items-center p-4">
                <!-- Include existing guest information fields here -->

                <!-- Additional Fields -->

                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="address">Address <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="address" name="address"
                        value="{{ old('address', $policeinquiry->address) }}" placeholder="" required>
                    @error('address')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="state">State <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="state" name="state"
                        value="{{ old('state', $policeinquiry->state) }}" placeholder="" required>
                    @error('state')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="address">City <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="city" name="city"
                        value="{{ old('city', $policeinquiry->city) }}" placeholder="" required>
                    @error('city')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="zipCode">ZipCode <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="zipCode" name="zipCode"
                        value="{{ old('zipCode', $policeinquiry->zipCode) }}" placeholder="" required>
                    @error('zipCode')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="arrivedFrom">Arrived From <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="arrivedFrom" name="arrivedFrom"
                        value="{{ old('arrivedFrom', $policeinquiry->arrivedFrom) }}" placeholder="" required>
                    @error('arrivedFrom')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="arrivalDate">Arrival Date <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="arrivalDate" name="arrivalDate"
                        value="{{ old('arrivalDate', $policeinquiry->arrivalDate) }}" placeholder="" required>
                    @error('arrivalDate')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="passportNo">Passport No <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="passportNo" name="passportNo"
                        value="{{ old('passportNo', $policeinquiry->passportNo) }}" placeholder="" required>
                    @error('passportNo')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="placeOfIssue">Place of Issue <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="placeOfIssue" name="placeOfIssue"
                        value="{{ old('placeOfIssue', $policeinquiry->placeOfIssue) }}" placeholder="" required>
                    @error('placeOfIssue')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="issueDate">Issue Date <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="issueDate" name="issueDate"
                        value="{{ old('issueDate', $policeinquiry->issueDate) }}" placeholder="" required>
                    @error('issueDate')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="expiryDate">Expiry Date <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="expiryDate" name="expiryDate"
                        value="{{ old('expiryDate', $policeinquiry->expiryDate) }}" placeholder="" required>
                    @error('expiryDate')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="visaNo">Visa No <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="visaNo" name="visaNo"
                        value="{{ old('visaNo', $policeinquiry->visaNo) }}" placeholder="" required>
                    @error('visaNo')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="visaType">Visa Type <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="visaType" name="visaType"
                        value="{{ old('visaType', $policeinquiry->visaType) }}" placeholder="" required>
                    @error('visaType')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="visaPlaceOfIssue">Visa Place of Issue <span
                            style="color:red">*</span></label>
                    <input type="text" class="form-control" id="visaPlaceOfIssue" name="visaPlaceOfIssue"
                        value="{{ old('visaPlaceOfIssue', $policeinquiry->visaPlaceOfIssue) }}" placeholder="" required>
                    @error('visaPlaceOfIssue')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="visaIssueDate">Issue Date <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="visaIssueDate" name="visaIssueDate"
                        value="{{ old('visaIssueDate', $policeinquiry->visaIssueDate) }}" placeholder="" required>
                    @error('visaIssueDate')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="visaExpiryDate">Expiry Date <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="visaExpiryDate" name="visaExpiryDate"
                        value="{{ old('visaExpiryDate', $policeinquiry->visaExpiryDate) }}" placeholder="" required>
                    @error('visaExpiryDate')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="guardianName">Guardian Name <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="guardianName" name="guardianName"
                        value="{{ old('guardianName', $policeinquiry->guardianName) }}" placeholder="" required>
                    @error('guardianName')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="age">Age <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="age" name="age"
                        value="{{ old('age', $policeinquiry->age) }}" placeholder="" required>
                    @error('age')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="purposeOfvisit">Purpose of Visit <span
                            style="color:red">*</span></label>
                    <input type="text" class="form-control" id="purposeOfvisit" name="purposeOfvisit"
                        value="{{ old('purposeOfvisit', $policeinquiry->purposeOfvisit) }}" placeholder="">
                    @error('purposeOfvisit')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="destinationPlace">Destination Place <span
                            style="color:red">*</span></label>
                    <input type="text" class="form-control" id="destinationPlace" name="destinationPlace"
                        value="{{ old('destinationPlace', $policeinquiry->destinationPlace) }}" placeholder="" required>
                    @error('destinationPlace')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="destinationState">Destination State <span
                            style="color:red">*</span></label>
                    <input type="text" class="form-control" id="destinationState" name="destinationState"
                        value="{{ old('destinationState', $policeinquiry->destinationState) }}" placeholder="" required>
                    @error('destinationState')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="destinationCity">Destination City <span
                            style="color:red">*</span></label>
                    <input type="text" class="form-control" id="destinationCity" name="destinationCity"
                        value="{{ old('destinationCity', $policeinquiry->destinationCity) }}" placeholder="" required>
                    @error('destinationCity')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="contactNo">Contact No <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="contactNo" name="contactNo"
                        value="{{ old('contactNo', $policeinquiry->contactNo) }}" placeholder="" required>
                    @error('contactNo')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="residentContact">Resident Contact <span
                            style="color:red">*</span></label>
                    <input type="text" class="form-control" id="residentContact" name="residentContact"
                        value="{{ old('residentContact', $policeinquiry->residentContact) }}" placeholder="" required>
                    @error('residentContact')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="mobileNo">Mobile Number <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="mobileNo" name="mobileNo"
                        value="{{ old('mobileNo', $policeinquiry->mobileNo) }}" placeholder="" required>
                    @error('mobileNo')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="employed">Employed <span style="color:red">*</span></label>
                    <div class='d-flex'>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="employed" id="employedYes" value="yes"
                                {{ old('employed', $policeinquiry->employed) === 'yes' ? 'checked' : '' }}>
                            <label class="form-check-label" for="employedYes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="employed" id="employedNo" value="no"
                                {{ old('employed', $policeinquiry->employed) === 'no' ? 'checked' : '' }}>
                            <label class="form-check-label" for="employedNo">No</label>
                        </div>
                    </div>
                    @error('employed')
                    <div class="has-error mt-2" style="color: red">Employed field is required.</div>
                    @enderror
                </div>




                <div class="col-lg-2 col-md-3 col-sm-6 mb-4 p-2">
                    <label class="form-label" for="description">Description</label>
                    <textarea id="description" class="form-control" name="description" placeholder="Enter description">
                        {{ old('description', $policeinquiry->description) }}
                    </textarea>
                    @error('description')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn button-submit" style='background-color:#7367f0; color:white'
                    data-loading-text="Loading..."><span class="fa fa-save fa-fw"></span> Save
                </button>
            </div>


        </form>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

@stop