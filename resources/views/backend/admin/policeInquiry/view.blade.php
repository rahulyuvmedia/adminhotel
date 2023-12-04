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

<style>
.bgvXkz {
    font-size: var(--mediumFont);
    font-weight: var(--mediumWeight);
    line-height: 18px;
    color: rgb(34, 34, 34);
    text-transform: uppercase;

}
</style>

<h5 class="mb-1">Edit PoliceInquiry</h5>

<div class="ant-col ant-col-17" >
    <div class="card ">

        <form id='edit' action="{{ Route('admin.policeInquiry.update', $policeinquiry->id) }}"
            enctype="multipart/form-data" method="post" accept-charset="utf-8" class="needs-validation">
            @csrf
            @method('PATCH')

            <div class="d-flex flex-wrap align-items-center p-4">
                <div class="col-lg-12">

                    <div class="ant-col col-lg-12" style="">
                        <p class="sc-jwHExh bgvXkz">ADDRESS/REFERENCE IN UNITED ARAB EMIRATES</p>
                    </div>
                </div>


                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="address">Address <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="address" name="address"
                        value="{{ old('address', $policeinquiry->address) }}" placeholder="">
                    @error('address')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="state">State <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="state" name="state"
                        value="{{ old('state', $policeinquiry->state) }}" placeholder="">
                    @error('state')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="address">City <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="city" name="city"
                        value="{{ old('city', $policeinquiry->city) }}" placeholder="">
                    @error('city')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="zipCode">ZipCode <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="zipCode" name="zipCode"
                        value="{{ old('zipCode', $policeinquiry->zipCode) }}" placeholder="">
                    @error('zipCode')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-12">

                    <div class="ant-col col-lg-12">
                        <p class="sc-jwHExh bgvXkz">ARRIVAL DETAILS</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="arrivedFrom">Arrived From <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="arrivedFrom" name="arrivedFrom"
                        value="{{ old('arrivedFrom', $policeinquiry->arrivedFrom) }}" placeholder="">
                    @error('arrivedFrom')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="arrivalDate">Date of arrival in United Arab Emirates <span
                            style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="arrivalDate" name="arrivalDate"
                        value="{{ old('arrivalDate', $policeinquiry->arrivalDate) }}" placeholder="">
                    @error('arrivalDate')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-12">

                    <div class="ant-col col-lg-12">
                        <p class="sc-jwHExh bgvXkz">PASSPORT DETAILS</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="passportNo">Passport No <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="passportNo" name="passportNo"
                        value="{{ old('passportNo', $policeinquiry->passportNo) }}" placeholder="">
                    @error('passportNo')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="placeOfIssue">Place of Issue <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="placeOfIssue" name="placeOfIssue"
                        value="{{ old('placeOfIssue', $policeinquiry->placeOfIssue) }}" placeholder="">
                    @error('placeOfIssue')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="issueDate">Issue Date <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="issueDate" name="issueDate"
                        value="{{ old('issueDate', $policeinquiry->issueDate) }}" placeholder="">
                    @error('issueDate')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="expiryDate">Expiry Date <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="expiryDate" name="expiryDate"
                        value="{{ old('expiryDate', $policeinquiry->expiryDate) }}" placeholder="">
                    @error('expiryDate')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-lg-12">

                    <div class="ant-col col-lg-12">
                        <p class="sc-jwHExh bgvXkz">VISA DETAILS</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="visaNo">Visa No <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="visaNo" name="visaNo"
                        value="{{ old('visaNo', $policeinquiry->visaNo) }}" placeholder="">
                    @error('visaNo')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="visaType">Visa Type <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="visaType" name="visaType"
                        value="{{ old('visaType', $policeinquiry->visaType) }}" placeholder="">
                    @error('visaType')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="visaPlaceOfIssue">Visa Place of Issue <span
                            style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="visaPlaceOfIssue" name="visaPlaceOfIssue"
                        value="{{ old('visaPlaceOfIssue', $policeinquiry->visaPlaceOfIssue) }}" placeholder="">
                    @error('visaPlaceOfIssue')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="visaIssueDate">Issue Date <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="visaIssueDate" name="visaIssueDate"
                        value="{{ old('visaIssueDate', $policeinquiry->visaIssueDate) }}" placeholder="">
                    @error('visaIssueDate')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="visaExpiryDate">Expiry Date <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="visaExpiryDate" name="visaExpiryDate"
                        value="{{ old('visaExpiryDate', $policeinquiry->visaExpiryDate) }}" placeholder="">
                    @error('visaExpiryDate')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>




                <div class="col-lg-12">

                    <div class="ant-col col-lg-12">
                        <p class="sc-jwHExh bgvXkz">OTHER DETAILS</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="guardianName">Guardian Name <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="guardianName" name="guardianName"
                        value="{{ old('guardianName', $policeinquiry->guardianName) }}" placeholder="">
                    @error('guardianName')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="age">Age <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="age" name="age"
                        value="{{ old('age', $policeinquiry->age) }}" placeholder="">
                    @error('age')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="purposeOfvisit">Purpose of Visit <span
                            style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="purposeOfvisit" name="purposeOfvisit"
                        value="{{ old('purposeOfvisit', $policeinquiry->purposeOfvisit) }}" placeholder="">
                    @error('purposeOfvisit')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="destinationPlace">Next Destination Place <span
                            style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="destinationPlace" name="destinationPlace"
                        value="{{ old('destinationPlace', $policeinquiry->destinationPlace) }}" placeholder="">
                    @error('destinationPlace')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="destinationState">Next Destination State <span
                            style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="destinationState" name="destinationState"
                        value="{{ old('destinationState', $policeinquiry->destinationState) }}" placeholder="">
                    @error('destinationState')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="destinationCity">Next Destination City <span
                            style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="destinationCity" name="destinationCity"
                        value="{{ old('destinationCity', $policeinquiry->destinationCity) }}" placeholder="">
                    @error('destinationCity')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="contactNo">Contact No <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="contactNo" name="contactNo"
                        value="{{ old('contactNo', $policeinquiry->contactNo) }}" placeholder="">
                    @error('contactNo')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="residentContact">Permanent Resident Contact No <span
                            style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="residentContact" name="residentContact"
                        value="{{ old('residentContact', $policeinquiry->residentContact) }}" placeholder="">
                    @error('residentContact')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="mobileNo">Mobile Number <span style="color:red">*</span></label>
                    <input autocomplete="off" type="text" class="form-control" id="mobileNo" name="mobileNo"
                        value="{{ old('mobileNo', $policeinquiry->mobileNo) }}" placeholder="">
                    @error('mobileNo')
                    <div style='color:red' class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="employed">WHETHER EMPLOYED IN UNITED ARAB EMIRATES <span
                            style="color:red">*</span></label>
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
                    <div style='color:red' class="has-error mt-2" style="color: red">Employed field is .</div>
                    @enderror
                </div>


                <div class="col-lg-12 mb-1">

                    <div class="ant-col col-lg-12">
                        <p class="sc-jwHExh bgvXkz">REMARKS (IF ANY)</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6 mb-1 p-1">
                    <label class="form-label" for="description">Description</label>
                    <textarea id="description" class="form-control" name="description" placeholder="Enter description">
                        {{ old('description', $policeinquiry->description) }}
                    </textarea>
                    @error('description')
                    <div style='color:red' class="has-error mt-2" style="color: red">description field is .</div>
                    @enderror
                </div>

            </div>
            <div class="" style='margin-left:2%;margin-bottom:2%'>

                <button type="submit" class="btn button-submit" style='background-color:#7367f0; color:white'
                    data-loading-text="Loading..."><span class="fa fa-save fa-fw"></span> Save
                </button>
            </div>


        </form>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

@stop