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
        <form id='edit' action="{{ Route('admin.guest.update', $model->id) }}" enctype="multipart/form-data"
            method="post" accept-charset="utf-8" class="needs-validation">
            @csrf
            {{ method_field('PATCH') }}

            <div class="d-flex flex-wrap justify-content-between align-items-center  p-4">




                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label class="form-label" for="check_in">Check-in</label>
                    <input type="datetime-local" id="check_in" name="check_in"
                        value="{{ $model->reservations->check_in }}" class="form-control">
                    @error('check_in')
                    <div class="has-error mt-2" style="color: red">Guest check-in required.</div>
                    @enderror
                </div>

                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label class="form-label" for="check_out">Check-out</label>
                    <input type="datetime-local" id="check_out" name="check_out"
                        value="{{ $model->reservations->check_out }}" class="form-control">
                    @error('check_out')
                    <div class="has-error mt-2" style="color: red">Guest check-out required.</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label class="form-label" for="roomNumber">Room Number</label>
                    <input type="text" name='roomNumber' class='form-control'
                        value='{{ isset($model->rooms) ? $model->rooms->roomNumber : 'No Room Assigned' }}' readonly />
                    @error('roomNumber')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>









                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label class="form-label" class="form-label" for="member">Adult <span
                            style="color:red">*</span></label>
                    <select id="member" name="member" class="form-control">
                        @for ($i = 1; $i <= 15; $i++) <option value="{{ $i }}" @if ($i==$model->member) selected
                            @endif>{{ $i }}</option>
                            @endfor
                    </select>
                    @error('member')
                    <div class="has-error mt-2" style="color: red">Adult required.</div>
                    @enderror
                </div>






                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label class="form-label" class="form-label" for="child">Child <span
                            style="color:red">*</span></label>
                    <select id="child" name="child" class="form-control">
                        @for ($i = 1; $i <= 15; $i++) <option value="{{ $i }}" @if ($i==$model->child) selected
                            @endif>{{ $i }}</option>
                            @endfor
                    </select>
                    @error('child')
                    <div class="has-error mt-2" style="color: red">Child required.</div>
                    @enderror
                </div>








            </div>
            <hr>
            <p class=" p-1">GUEST INFORMATION</p>
            <div class="d-flex flex-wrap justify-content-between align-items-center  p-4">

                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" name='name' class='form-control' value='{{ $model->name }}' />
                    @error('name')
                    <div class="has-error mt-2" style="color: red">Guest name required.</div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label class="form-label" for="mobile">Phone Number</label>
                    <input type="text" name='mobile' class='form-control' value='{{ $model->mobile }}' />
                    @error('mobile')
                    <div class="has-error mt-2" style="color: red">Guest mobile required.</div>
                    @enderror
                </div>


                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="text" name='email' class='form-control' value='{{ $model->email }}' />
                    @error('email')
                    <div class="has-error mt-2" style="color: red">Guest email required.</div>
                    @enderror
                </div>

                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label class="form-label" for="address">Address</label>
                    <input type="text" name='address' class='form-control' value='{{ $model->address }}' />
                    @error('address')
                    <div class="has-error mt-2" style="color: red">Guest address required.</div>
                    @enderror
                </div>


                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label class="form-label" for="aadharNo">Aadhar Number</label>
                    <input type="text" name='aadharNo' class='form-control' value='{{ $model->aadharNo }}' />
                    @error('aadharNo')
                    <div class="has-error mt-2" style="color: red">Guest aadhar Number required.</div>
                    @enderror
                </div>



            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center p-4">
                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label class="form-label" class="form-label" for="bookingSource">Booking Source type<span
                            style="color:red">*</span></label>
                    <select class="form-control" id="bookingSource" name="bookingSource">
                        @foreach ($modeldata as $data)
                        <option value="{{ $data->title }}"
                            {{ old('bookingSource', $model->bookingSource) == $data->title ? 'selected' : '' }}>
                            {{ $data->title }}
                        </option>
                        @endforeach
                    </select>

                    @error('bookingSource')
                    <div class="has-error mt-2" style="color: red">{{$message}}</div>
                    @enderror
                </div>

                <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                    <label class="form-label" for="idproff">Id Proff</label>
                    <div class="input-group mt-3">
                        <input id="photo" type="file" name="idproff" style="display:none">
                        <div class="input-group-prepend">
                            <a class="btn btn-dark text-white" onclick="$('input[id=photo]').click();">Id Proof</a>
                        </div>
                        <input type="text" name="idproff" class="form-control" id="SelectedFileName" value="" readonly>
                    </div>
                    @if ($model->idproff)
                    <img class="img-thumbnail img-fluid tool-img-edit"
                        src="{{ URL::to('/uploads/' . $model->idproff) }}" style="max-width: 15%; margin-top: 15px;"
                        alt="Id Proof Image">
                    @endif

                    <script type="text/javascript">
                    $('input[id=photo]').change(function() {
                        $('#SelectedFileName').val($(this).val());
                    });
                    </script>
                    @error('idproff')
                    <div class="has-error mt-2">Guest id proof required.</div>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12   p-3">
                    <button type="submit" class="btn button-submit" style="background-color:#7367f0 ; color:white">
                        <span class="fa fa-save fa-fw"></span> Save
                    </button>
                </div>
            </div>


        </form>
    </div>

</div>
@stop