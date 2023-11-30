@extends('backend.layouts.master')
@section('content')


    <style>
        .icon-container {
            position: relative;
        }

        .icon {
            transition: transform 0.2s ease;
        }

        .icon-moved {
            animation: bounce 1s ease;
            /* You can adjust the animation properties */
            /* Adjust the value based on how much you want to move */
        }


        @keyframes bounce {



            50%,

            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }


        }
    </style>

    <div class="container-fluid">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Rooms/</span> Edit Rooms
        </h4>



        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card mb-4">
                    <div class="card-body">
                        <form id='edit' action="{{ Route('admin.rooms.update', $model->id) }}"
                            enctype="multipart/form-data" method="post" accept-charset="utf-8" class="needs-validation">
                            @csrf
                            {{ method_field('PATCH') }}
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label class="form-label" for="roomNumber">Room Number <span
                                            style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="roomNumber" name="roomNumber"
                                        value="{{ old('roomNumber', $model->roomNumber) }}" placeholder="" required>
                                    @error('roomNumber')
                                        <div class="has-error mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="price" class="form-label">Price<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        value="{{ old('price', $model->price) }}" placeholder="" required>
                                    @error('price')
                                        <div class="has-error mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label class="form-label" for="roomType">Select room type <span
                                            style="color:red">*</span></label>
                                    <select class="form-select" id="roomType" name="roomType">

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
                                <div class="col-sm-6">
                                    <label for="occupancy" class="form-label">Occupancy<span
                                            style="color:red">*</span></label>
                                    <select class="form-select" id="occupancy" name="occupancy">

                                        <option value="1"
                                            {{ old('occupancy', $model->occupancy) == '1' ? 'selected' : '' }}>1
                                        </option>
                                        <option value="2"
                                            {{ old('occupancy', $model->occupancy) == '2' ? 'selected' : '' }}>2
                                        </option>
                                        <option value="3"
                                            {{ old('occupancy', $model->occupancy) == '3' ? 'selected' : '' }}>3
                                        </option>
                                        <option value="4"
                                            {{ old('occupancy', $model->occupancy) == '4' ? 'selected' : '' }}>4
                                        </option>
                                        <option value="5"
                                            {{ old('occupancy', $model->occupancy) == '5' ? 'selected' : '' }}>5
                                        </option>
                                        <option value="6"
                                            {{ old('occupancy', $model->occupancy) == '6' ? 'selected' : '' }}>6
                                        </option>
                                    </select>
                                    @error('occupancy')
                                        <div class="has-error mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="availability" class="form-label">availability<span
                                            style="color:red">*</span></label>
                                    <select class="form-select" id="availability" name="availability">

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






                                <div class="col-sm-6">
                                    <label class="form-label" for="floor">Floor <span style="color:red">*</span></label>
                                    <select id="floor" name="floor" class="form-select">
                                        @for ($i = 1; $i <= 8; $i++)
                                            <option value="{{ $i }}"
                                                @if ($i == $model->floor) selected @endif>{{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                    @error('floor')
                                        <div class="has-error mt-2" style="color: red">Floor required.</div>
                                    @enderror
                                </div>



                                <div class="row gy-3 my-2">
                                    <label for="facilities" class="form-label">Facilities<span
                                            style="color:red">*</span></label>

                                    @foreach ($master as $facilityJson)
                                        @php
                                            $facility = json_decode($facilityJson, true);
                                            $isChecked = in_array($facility['title'], explode('|', $model->facilities));
                                        @endphp

                                        <div class="col-md-2">
                                            <div class="form-check custom-option custom-option-icon icon-container">
                                                <label class="form-check-label custom-option-content"
                                                    for="{{ $facility['title'] }}">
                                                    <span class="custom-option-body">
                                                        <i
                                                            class="icon {{ $facility['value'] }} {{ $isChecked ? 'icon-moved' : '' }}"></i>
                                                        <span class="custom-option-title">
                                                            {{ $facility['title'] }}
                                                        </span>
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        id="{{ $facility['title'] }}" value="{{ $facility['title'] }}"
                                                        {{ $isChecked ? 'checked' : '' }}
                                                        onchange="handleCheckboxChange(this)">
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- <div class="row gy-3 my-2">
                                                                    <label for="facilities" class="form-label">Facilities<span
                                                                            style="color:red">*</span></label>
                                                                            <div class="col-md-2">
                                                                        @foreach ($master as $facilityJson)
    @php
        $facility = json_decode($facilityJson, true);
        $isChecked = in_array($facility['title'], explode('|', $model->facilities));
    @endphp
                                                                        <div class="form-check">
                                                                        <div class="form-check custom-option custom-option-icon">
                                                                            <input class="form-check-input" type="checkbox" name="facilities[]"
                                                                                id="{{ $facility['title'] }}" value="{{ $facility['title'] }}"
                                                                                {{ $isChecked ? 'checked' : '' }}>
                                                                            <label class="form-check-label" for="{{ $facility['title'] }}">
                                                                                {{ $facility['title'] }}
                                                                            </label>
                                                                        </div>
                                                                        </div>
    @endforeach
                                                                    </div>
                                                                </div> -->



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
        </div>

    </div>
    <script>
        function handleCheckboxChange(checkbox) {
            const icon = checkbox.parentElement.querySelector('.icon');
            if (checkbox.checked) {
                icon.classList.add('icon-moved');
                // You can add other movement logic here
            } else {
                icon.classList.remove('icon-moved');
                // You can add other movement logic here
            }
        }
    </script>
@stop
