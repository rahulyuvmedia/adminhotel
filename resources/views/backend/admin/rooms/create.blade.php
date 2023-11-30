@extends('backend.layouts.master')

@section('content')


<style>
.icon-container {
    position: relative;
}

.icon {
    transition: transform 0.3s ease;
}

.icon-moved {
    animation: bounce 10.5s ease;

}

@keyframes bounce {

    0%,
    10%,
    30%,
    50%,
    70%,
    90%,
    100% {
        transform: translateY(0);
    }

    10% {
        transform: translateY(-25px);
    }

    20%,
    40% {
        transform: translateY(-20px);
    }

    60% {
        transform: translateY(-15px);
    }

    80% {
        transform: translateY(-10px);
    }

    96% {
        transform: translateY(-5px);
    }
}
</style>




<div class="container-fluid">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Rooms/</span> Add Rooms
    </h4>

    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card mb-4">
                <div class="card-body">
                    <form id="create" action="{{ route('admin.rooms.store') }}" enctype="multipart/form-data"
                        method="post" accept-charset="utf-8" class="needs-validation">
                        @csrf

                        <div class="row g-3">
                            <!-- Room Number -->
                            <div class="col-sm-6">
                                <label class="form-label" for="roomNumber">Room Number <span
                                        style="color:red">*</span></label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="roomNumber" name="roomNumber" class="form-control"
                                        placeholder="Enter your room Number" aria-describedby="name2" />
                                    <span class="input-group-text cursor-pointer p-1" id="name2"><span
                                            class="card-type"></span></span>
                                </div>
                                @error('roomNumber')
                                <div class="has-error mt-2" style="color: red"> Guest room Number required.</div>
                                @enderror
                            </div>

                            <!-- Price -->
                            <div class="col-sm-6">
                                <label class="form-label" for="price">Price <span style="color:red">*</span></label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="price" name="price" class="form-control"
                                        placeholder="Enter your room price" aria-describedby="name2" />
                                    <span class="input-group-text cursor-pointer p-1" id="name2"><span
                                            class="card-type"></span></span>
                                </div>
                                @error('price')
                                <div class="has-error mt-2" style="color: red"> Guest Price required.</div>
                                @enderror
                            </div>

                            <!-- Room Type -->
                            <div class="col-sm-6">
                                <label class="form-label" for="roomType">Select room type <span
                                        style="color:red">*</span></label>
                                <select class="form-select" id="roomType" name="roomType">
                                    <option value="" selected>Select room type</option>
                                    @foreach ($roomType as $type)
                                    <option value="{{ $type->title }}">{{ $type->title }}</option>
                                    @endforeach
                                </select>
                                @error('roomType')
                                <div class="has-error mt-2" style="color: red">RoomType required.</div>
                                @enderror
                            </div>

                            <!-- Occupancy -->
                            <div class="col-sm-6">
                                <label class="form-label" for="occupancy">Select room Occupancy <span
                                        style="color:red">*</span></label>
                                <select class="form-select" id="occupancy" name="occupancy">
                                    <option value="" selected>Select Occupancy</option>
                                    @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                </select>
                                @error('occupancy')
                                <div class="has-error mt-2" style="color: red">Occupancy required.</div>
                                @enderror
                            </div>

                            <!-- Availability -->
                            <div class="col-sm-6">
                                <label class="form-label" for="availability">Select availability <span
                                        style="color:red">*</span></label>
                                <select class="form-select" id="availability" name="availability">
                                    <option value="" selected>Select availability</option>
                                    <option value="available">available</option>
                                    <option value="booked">booked</option>
                                    <option value="outofservice">outofservice</option>
                                    <option value="maintenance">maintenance</option>
                                </select>
                                @error('availability')
                                <div class="has-error mt-2" style="color: red">Availability required.</div>
                                @enderror
                            </div>

                            <!-- Floor -->
                            <div class="col-sm-6">
                                <label class="form-label" for="floor">Floor <span style="color:red">*</span></label>
                                <select id="floor" name="floor" class="form-select">
                                    <option value="">Select Number of Floor</option>
                                    @for ($i = 1; $i <= 8; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                </select>
                                @error('floor')
                                <div class="has-error mt-2" style="color: red">Floor required.</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Facilities -->
                        <div class="row gy-3 my-2">
                            <label for="facilities" class="form-label">Facilities<span
                                    style="color:red">*</span></label>
                            @foreach ($master as $facilityJson)
                            @php
                            $facility = json_decode($facilityJson, true);
                            @endphp
                            <div class="col-md-2">
                                <div class="form-check custom-option custom-option-icon icon-container">
                                    <label class="form-check-label custom-option-content"
                                        for="{{ $facility['title'] }}">
                                        <span class="custom-option-body">
                                            <i class="icon {{ $facility['value'] }}"></i>
                                            <span class="custom-option-title">
                                                {{ $facility['title'] }}
                                            </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" name="facilities[]"
                                            id="{{ $facility['title'] }}" value="{{ $facility['title'] }}"
                                            onchange="handleCheckboxChange(this)">
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn " style="background-color:#7367f0;color:white">
                                <i class="fa fa-save fa-fw"></i> Save
                            </button>
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
@endsection