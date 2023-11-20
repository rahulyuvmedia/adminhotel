@extends('backend.layouts.master')
@section('content')


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
                    <label for="">Phone Number </label>
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
                    <input id="photo" type="file" name="idproff" style="display:none" onchange="displaySelectedImage(this)">
                    <div class="input-group-prepend">
                        <a class="btn btn-dark text-white" onclick="$('input[id=photo]').click();">Image</a>
                    </div>
                    <input type="text" name="idproff" class="form-control" id="SelectedFileName" value="" readonly>
                    @error('idproff')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>

                <!-- Display selected image preview -->
                <img id="selectedImagePreview" src="" alt="Selected Image" style="display:none; max-width: 10%; margin-top: 10px;">




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
</div>


<script>
    function displaySelectedImage(input) {
        var selectedFileName = input.files[0].name;
        document.getElementById('SelectedFileName').value = selectedFileName;

        // Display image preview
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('selectedImagePreview').src = e.target.result;
            document.getElementById('selectedImagePreview').style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
@stop