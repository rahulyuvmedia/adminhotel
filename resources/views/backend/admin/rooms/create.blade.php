@extends('backend.layouts.master')
@section('content')


<div class="col-12">
    <div class="card mb-4">

        <h5 class="card-header">Add Rooms </h5>
        <div class="card-body">
            <form id='create' action="{{ Route('admin.rooms.store') }}" enctype="multipart/form-data" method="post"
                accept-charset="utf-8" class="needs-validation">
                @csrf

                <div class="row">

                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="roomNumber">Room Number <span style="color:red">*</span></label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="roomNumber" name="roomNumber" class="form-control credit-card-mask"
                                placeholder="Enter your room Number" aria-describedby="name2" />
                            <span class="input-group-text cursor-pointer p-1" id="name2"><span
                                    class="card-type"></span></span>
                        </div>
                        @error('roomNumber')
                        <div class="has-error mt-2" style="color: red"> Guest room Number required.</div>
                        @enderror
                    </div>




                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="price">Price <span style="color:red">*</span></label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="price" name="price" class="form-control credit-card-mask"
                                placeholder="Enter your room price" aria-describedby="name2" />
                            <span class="input-group-text cursor-pointer p-1" id="name2"><span
                                    class="card-type"></span></span>
                        </div>
                        @error('price')
                        <div class="has-error mt-2" style="color: red"> Guest Price required.</div>
                        @enderror
                    </div>










                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="roomType">Select room type <span
                                style="color:red">*</span></label>
                        <select class="form-control" id="roomType" name="roomType">
                            <option value="" selected>Select room type</option>
                            <option value="single">Single</option>
                            <option value="double">Double</option>
                            <option value="suite">Suite</option>
                        </select>
                        @error('roomType')
                        <div class="has-error mt-2" style="color: red">RoomType required.</div>
                        @enderror
                    </div>


                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="occupancy">Select room Occupancy <span
                                style="color:red">*</span></label>
                        <select class="form-control" id="occupancy" name="occupancy">

                            <option value="" selected>Select Occupancy</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        @error('occupancy')
                        <div class="has-error mt-2" style="color: red">Occupancy required.</div>
                        @enderror
                    </div>



                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label class="form-label" for="availability">Select availability <span
                                style="color:red">*</span></label>
                        <select class="form-control" id="availability" name="availability">

                            <option value="" selected>Select availability</option>
                            <option value="available">available</option>
                            <option value="booked">booked</option>
                            <option value="outofservice">outofservice</option>
                        </select>
                        @error('availability')
                        <div class="has-error mt-2" style="color: red">Availabilityrequired.</div>
                        @enderror
                    </div>


                    <!-- <div class="form-group col-md-12 col-sm-12">
                        <label for="">Facilities</label>
                        @if (count(MyConstants::ROOM_FACILITY) > 0)
                            @foreach (MyConstants::ROOM_FACILITY as $key => $value)
                                <input name="facilities[]" id="{{ $value }}" type="checkbox"
                                    value="{{ $value }}" />
                                <label class="mx-1" for="{{ $value }}"> {{ $value }}</label>
                            @endforeach
                        @endif

                    </div> -->



                    <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                        <label for="facilities">Facilities</label>
                        <div class='d-flex flex-wrap'>
                            @foreach ($master as $facilityJson)
                            @php
                            $facility = json_decode($facilityJson, true);
                            @endphp
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="facilities[]"
                                    id="{{ $facility['title'] }}" value="{{ $facility['title'] }}">
                                <label class="form-check-label" for="{{ $facility['title'] }}">
                                    {{ $facility['title'] }}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                   




                    <div class="clearfix"></div>
                    <div class="form-group col-md-12 mb-3">
                        <button type="submit" class="btn btn-success " data-loading-text="Loading..."><span
                                class="fa fa-save fa-fw"></span> Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop