@extends('backend.layouts.master')
@section('content')

    <div class="app-page-title mt-5">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="bi bi-newspaper icon-gradient bg-mean-fruit"> </i>
                </div>
                <div>Edit rooms</div>

            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">

            <form id='edit' action="{{ Route('admin.rooms.update', $model->id) }}" enctype="multipart/form-data"
                method="post" accept-charset="utf-8" class="needs-validation">
                @csrf
                <div id="status"></div> {{ method_field('PATCH') }}
                <div class="form-row">

                    <div class="form-group col-md-12 col-sm-12">
                        <label for="roomNumber">Room Number</label>
                        <input type="text" class="form-control" id="roomNumber" name="roomNumber"
                            value="{{ old('roomNumber', $model->roomNumber) }}" placeholder="" required>
                        @error('roomNumber')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-12 col-sm-12">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ old('price', $model->price) }}" placeholder="" required>
                        @error('price')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="clearfix"></div>
                    <div class="form-group col-md-12 col-sm-12">
                        <label for="roomType">Room Type</label>
                        <select class="form-control" id="roomType" name="roomType">

                            <option value="single" {{ old('roomType', $model->roomType) == 'single' ? 'selected' : '' }}>
                                Single</option>
                            <option value="double" {{ old('roomType', $model->roomType) == 'double' ? 'selected' : '' }}>
                                Double</option>
                            <option value="suite" {{ old('roomType', $model->roomType) == 'suite' ? 'selected' : '' }}>
                                Suite</option>
                        </select>
                        @error('roomType')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="clearfix"></div>
                    <div class="form-group col-md-12 col-sm-12">
                        <label for="occupancy">Occupancy</label>
                        <select class="form-control" id="occupancy" name="occupancy">

                            <option value="1" {{ old('occupancy', $model->occupancy) == '1' ? 'selected' : '' }}>1
                            </option>
                            <option value="2" {{ old('occupancy', $model->occupancy) == '2' ? 'selected' : '' }}>2
                            </option>
                            <option value="3" {{ old('occupancy', $model->occupancy) == '3' ? 'selected' : '' }}>3
                            </option>
                            <option value="4" {{ old('occupancy', $model->occupancy) == '4' ? 'selected' : '' }}>4
                            </option>
                            <option value="5" {{ old('occupancy', $model->occupancy) == '5' ? 'selected' : '' }}>5
                            </option>
                            <option value="6" {{ old('occupancy', $model->occupancy) == '6' ? 'selected' : '' }}>6
                            </option>
                        </select>
                        @error('occupancy')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="clearfix"></div>
                    <div class="form-group col-md-12 col-sm-12">
                        <label for="availability">availability</label>
                        <select class="form-control" id="availability" name="availability">

                            <option value="available"
                                {{ old('availability', $model->availability) == 'available' ? 'selected' : '' }}>available
                            </option>
                            <option value="booked"
                                {{ old('availability', $model->availability) == 'booked' ? 'selected' : '' }}>booked
                            </option>
                            <option value="outofservice"
                                {{ old('availability', $model->availability) == 'outofservice' ? 'selected' : '' }}>
                                outofservice</option>
                        </select>
                        @error('availability')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>




                    <div class="form-group col-md-12 col-sm-12">
                        <label for="facilities">Facilities</label>
                        @if (count(MyConstants::ROOM_FACILITY) > 0)
                            @foreach (MyConstants::ROOM_FACILITY as $key => $value)
                                <?php
                                $facilitiesArray = explode('|', $model->facilities);
                                $isChecked = in_array($value, $facilitiesArray);
                                
                                ?>
                                <input name="facilities[]" id="{{ $value }}" type="checkbox"
                                    value="{{ $value }}" {{ $isChecked ? 'checked' : '' }} />
                                <label class="mx-1" for="{{ $value }}"> {{ $value }}</label>
                            @endforeach
                        @endif
                    </div>




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

@stop
