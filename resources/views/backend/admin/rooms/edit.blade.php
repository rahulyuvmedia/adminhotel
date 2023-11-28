@extends('backend.layouts.master')
@section('content')

<h5 class="card-header">Edit Rooms </h5>

<div class="ant-col ant-col-17" style="padding-left: 8px; padding-right: 8px;">
    <div class="card mb-4">

        <div class="">

            <form id='edit' action="{{ Route('admin.rooms.update', $model->id) }}" enctype="multipart/form-data"
                method="post" accept-charset="utf-8" class="needs-validation">
                @csrf
                {{ method_field('PATCH') }}
                <div class="d-flex flex-wrap justify-content-between align-items-center  p-4">

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label for="roomNumber">Room Number</label>
                        <input type="text" class="form-control" id="roomNumber" name="roomNumber"
                            value="{{ old('roomNumber', $model->roomNumber) }}" placeholder="" required>
                        @error('roomNumber')
                        <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ old('price', $model->price) }}" placeholder="" required>
                        @error('price')
                        <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label for="roomType">Room Type</label>
                        <select class="form-control" id="roomType" name="roomType">

                            <option value="single"
                                {{ old('roomType', $model->roomType) == 'single' ? 'selected' : '' }}>
                                Single</option>
                            <option value="double"
                                {{ old('roomType', $model->roomType) == 'double' ? 'selected' : '' }}>
                                Double</option>
                            <option value="suite" {{ old('roomType', $model->roomType) == 'suite' ? 'selected' : '' }}>
                                Suite</option>
                        </select>
                        @error('roomType')
                        <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label class="form-label" for="roomType">Select room type <span
                                style="color:red">*</span></label>
                        <select class="form-control" id="roomType" name="roomType">
                            @foreach ($roomType as $data)
                            <option value="{{ $data->title }}"
                                {{ old('roomType', $model->$roomType) == $data->title ? 'selected' : '' }}>
                                {{ $data->title }}
                            </option>
                            @endforeach
                        </select>

                        @error('roomType')
                        <div class="has-error mt-2" style="color: red">Room Type is required.</div>
                        @enderror
                    </div>


                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
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


                    <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                        <label for="availability">availability</label>
                        <select class="form-control" id="availability" name="availability">

                            <option value="available"
                                {{ old('availability', $model->availability) == 'available' ? 'selected' : '' }}>
                                available
                            </option>
                            <option value="booked"
                                {{ old('availability', $model->availability) == 'booked' ? 'selected' : '' }}>
                                booked
                            </option>
                            <option value="outofservice"
                                {{ old('availability', $model->availability) == 'outofservice' ? 'selected' : '' }}>
                                outofservice</option>
                            <option value="maintenance"
                                {{ old('availability', $model->availability) == 'maintenance' ? 'selected' : '' }}>
                                maintenance</option>
                        </select>
                        @error('availability')
                        <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>




                    <!-- <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
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
                                 </div> -->

                    <div class="d-flex flex-wrap justify-content-between align-items-center  ">
                        <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
                            <label class="form-label" for="floor">Floor <span style="color:red">*</span></label>
                            <select id="floor" name="floor" class="form-control">
                                @for ($i = 1; $i <= 15; $i++) <option value="{{ $i }}" @if ($i==$model->floor) selected
                                    @endif>{{ $i }}</option>
                                    @endfor
                            </select>
                            @error('floor')
                            <div class="has-error mt-2" style="color: red">Floor required.</div>
                            @enderror
                        </div>

                        <div class="col-lg-9 col-md-3 col-sm-12 mb-4">
                            <label for="facilities">Facilities</label>
                            <div class="d-flex flex-wrap">
                                @foreach ($master as $facilityJson)
                                @php
                                $facility = json_decode($facilityJson, true);
                                $isChecked = in_array($facility['title'], explode('|', $model->facilities));
                                @endphp
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                        id="{{ $facility['title'] }}" value="{{ $facility['title'] }}"
                                        {{ $isChecked ? 'checked' : '' }}>
                                    <label class="form-check-label" for="{{ $facility['title'] }}">
                                        {{ $facility['title'] }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>




                    <div class="clearfix"></div>
                    <div class="form-group col-md-12">
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