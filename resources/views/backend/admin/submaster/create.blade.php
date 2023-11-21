@extends('backend.layouts.master')
@section('title', 'SubMaster')
@section('content')




    @if (session('error'))
        <section class="container">
            <div class="row py-3 justify-content-center">
                <div class="col-3 alert alert-danger  text-center ">
                    {{ session('error') }}

                </div>
            </div>
        </section>
    @endif

    <div class="card">
        <h5 class="card-header">SubMaster</h5>
        <div class="card-body">
            <form id='create' action="{{ Route('admin.submaster.store') }}" enctype="multipart/form-data" method="post"
                accept-charset="utf-8" class="needs-validation" novalidate>
                @csrf 
                <div class="row">
                    <div class="clearfix"></div>



                  


                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="type"> Sub Master Type <span
                                style="color:red">*</span></label>
                        <select class="form-control" id="type" name="type">
                        <option selected disabled>Select Category Type</option> <!-- Default selection -->
                            @foreach ($master as $value)
                                <option>{{ $value->title }}</option>
                            @endforeach
                        </select>
                        @error('type')
                        <div class="has-error mt-2" style="color: red">Type required.</div>
                        @enderror
                    </div>


                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="title"> Sub Master Title <span
                                style="color:red">*</span></label>
                                <input type="text" id="title" name="title" class="form-control credit-card-mask"
                                placeholder="Enter your title " aria-describedby="name2" />
                        
                        @error('title')
                        <div class="has-error mt-2" style="color: red">Title required.</div>
                        @enderror
                    </div>


                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="value"> Sub Master Value <span
                                style="color:red">*</span></label>
                                <input type="text" id="value" name="value" class="form-control credit-card-mask"
                                placeholder="Enter your value " aria-describedby="name2" />
                        
                        @error('value')
                        <div class="has-error mt-2" style="color: red">Value required.</div>
                        @enderror
                    </div>


 

                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="logo">Logo <span style="color:red">*</span></label>
                        <div class="input-group">
                            <input id="photo" type="file" name="logo" style="display:none"
                                onchange="displaySelectedImage(this)">
                            <div class="input-group-prepend">
                                <a class="btn btn-dark text-white" onclick="$('input[id=photo]').click();">Image</a>
                            </div>
                            <input type="text" name="logo" class="form-control" id="SelectedFileName" value=""
                                readonly>
                            @error('logo')
                            <div class="has-error mt-2">Guest logo required.</div>
                            @enderror
                        </div>

                        <!-- Display selected image preview -->
                        <img id="selectedImagePreview" src="" alt="Selected Image"
                            style="display:none; max-width: 10%; margin-top: 10px;">
                        @error('logo')
                        <div class="has-error mt-2" style="color: red">Guest Logo required.</div>
                        @enderror

                    </div>




                    <!-- <div class="form-group col-md-12 col-sm-12">
                        <label class="form-label" for="formFile">Upload Logo<span style="color:red">*</span></label>

                        <div class="input-group mb-3 bg-white rounded-2 border border-1 shadow-sm border-secondary">
                            <input name="logo" id="logo" type="file" onchange="readURL(this);"
                                class="form-control" required>
                        </div>

                        @error('logo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror


                        <p class="font-italic text-center">
                        </p>
                        <div class="image-area mt-4">
                            <img id="imageResult" src="#" alt=""
                                class="img-fluid rounded shadow-sm mx-auto d-block"
                                style="
                                width: 250px;
                            ">
                        </div>
                    </div> -->









                    <div class="clearfix"></div>
                    <div class="form-group col-md-12">
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
