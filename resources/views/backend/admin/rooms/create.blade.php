@extends('backend.layouts.master')
@section('content')


<div class="card">
    <h5 class="card-header">Add Rooms </h5>
    <div class="card-body">
        <form id='create' action="{{ Route('admin.rooms.store') }}" enctype="multipart/form-data" method="post"
            accept-charset="utf-8" class="needs-validation">
            @csrf
            <div id="status"></div>
            <div class="form-row">




                <div class="clearfix"></div>
                <div class="form-group col-md-12 col-sm-12">
                    <label for="">Room Number</label>
                    <input type="text" class="form-control" id="roomNumber" name="roomNumber" value="" placeholder="" required>
                    @error('roomNumber')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>

                <div class="clearfix"></div>
                <div class="form-group col-md-12 col-sm-12">
                    <label for="">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="" placeholder="" required>
                    @error('price')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>

      
                <div class="clearfix"></div>
                <div class="form-group col-md-12 col-sm-12">
                    <label for="">Facilities</label>
                    <input type="text" class="form-control" id="facilities" name="facilities" value="" placeholder="" required>
                    @error('facilities')
                    <div class="has-error mt-2">{{ $message }}</div>
                    @enderror

                </div>
                
                <div class="clearfix"></div>
                
                
                <div class="form-group col-md-12 col-sm-12">
                    <select class="form-control" id="roomType" name="roomType">
                    <option value="" selected>Select room type</option>
                        <option value="single"  >Single</option>
                        <option value="double"  >Double</option>
                        <option value="suite"  >Suite</option>
                    </select>
                </div>


                <div class="form-group col-md-12 col-sm-12">
                    <select class="form-control" id="occupancy" name="occupancy">
                    <option value="" selected>Select Occupancy</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
 


                <div class="form-group col-md-12 col-sm-12">
                    <select class="form-control" id="availability" name="availability">
                    <option value="" selected>Select availability</option>
                        <option value="available">available</option>
                        <option value="booked">booked</option>
                        <option value="outofservice">outofservice</option>
                    </select>
                </div>
 

          




                <div class="clearfix"></div>
                <div class="form-group col-md-12 mb-3">
                    <button type="submit" class="btn btn-success button-submit" data-loading-text="Loading..."><span
                            class="fa fa-save fa-fw"></span> Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop