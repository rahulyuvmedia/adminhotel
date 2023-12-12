@extends('backend.layouts.master')
@section('title', 'rooms')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="container-xxl flex-grow-1 container-p-y card">




        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="bi bi-newspaper icon-gradient bg-mean-fruit"></i>
                    </div>
                    <h5 class="py-3">
                        <span class="text-muted fw-light">Rooms /</span> List
                    </h5>
                </div>
                 
                <div class="page-title-actions">
                    <a href="{{ route('admin.rooms.create') }}" class="btn "
                        style="background-color:#7367f0 ; color:white">
                        <i class="bi bi-plus-lg"></i> Add Room
                    </a>
                </div>
               
            </div>
        </div>

        <!-- <div class="col-md-12 col-sm-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title m-0 me-2">Rooms Details</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">

                                    <a class="dropdown-item" href="javascript:void(0);" onclick="refreshPage()">Refresh</a>


                                    <a class="dropdown-item" href="javascript:void(0);" onclick="shareContent()">Share</a>

                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class='row'>
                                <div class="btn-group d-flex flex-wrap" role="group" aria-label="First group">
                                    @foreach ($rooms as $room)
    <?php
    $availableClass = 'btn btn-outline-secondary m-2 ';
    if ($room->availability === 'available') {
        $availableClass .= 'avail-green';
    } elseif ($room->availability === 'booked') {
        $availableClass .= 'avail-red';
    } else {
        $availableClass .= 'avail-grey';
    }
    
    ?>
                                    <button type="button" class="{{ $availableClass }}"
                                        style="  border: .5px solid#ccc;  border-radius: 8px; color: {{ $room->availability === 'available' ? '#28a745' : ($room->availability === 'booked' ? '#dc3545' : '#6c757d') }};"
                                        onClick="redirectToPage({{ $room->id }})">
                                        @if ($room->availability === 'available')
    <i class="fas fa-door-open" style="color: inherit;"></i> {{ $room->roomNumber }}
@elseif ($room->availability === 'booked')
    <i class="fas fa-door-closed" style="color: inherit;"></i> {{ $room->roomNumber }}
@else
    <i class="fa-solid fa-lock" style="color: inherit;"></i> {{ $room->roomNumber }}
    @endif
                                    </button>
    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                    </div> -->

        <div class="">
            <div class="card-datatable table-responsive">
                <table class="invoice-list-table table border-top" id="invoiceTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Room Number</th>
                            <th>Room Type</th>
                            <!-- <th>Occupancy</th> -->
                            <th>Price</th>
                            <th>Availability</th>
                            <!-- <th>Facilities</th> -->
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody class=''>
                        @foreach ($model as $value)
                            <tr>
                                <td class="serial-number">{{ $loop->iteration }}</td>
                                <td>{{ $value->roomNumber }}</td>
                                <td>{{ $value->roomType }}</td>
                                <!-- <td>{{ $value->occupancy }}</td> -->
                                <td>₹{{ number_format($value->price) }}</td>
                                <td>{{ $value->availability }}</td>
                                <!-- <td>{{ $value->facilities }}</td> -->
                                <td class="cell-fit">
                                    <a href="{{ Route('admin.rooms.edit', $value->id) }}" class="btn btn-primary me-2">
                                        <i class="bi bi-pencil-fill"></i> Edit
                                    </a>

                                    <button type="button" class="btn btn-danger"
                                        onclick="confirmDelete('{{ $value->id }}')">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>

                                    @if ($value->status == 1)
                                        <a class="btn btn-success"
                                            href="{{ URL::to('admin/rooms/active', $value->id) }}">Active</a>
                                    @elseif ($value->status == 0)
                                        <a class="btn btn-danger"
                                            href="{{ URL::to('admin/rooms/inactive', $value->id) }}">Inactive</a>
                                    @else
                                        <span class="badge badge-warning">Unknown</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- <div class="col-md-6 col-sm-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="card-title m-0 me-2">Rooms Details</h5>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">

                                            <a class="dropdown-item" href="javascript:void(0);" onclick="refreshPage()">Refresh</a>


                                            <a class="dropdown-item" href="javascript:void(0);" onclick="shareContent()">Share</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class='row'>
                                        <div class="btn-group d-flex flex-wrap" role="group" aria-label="First group">
                                            @foreach ($rooms as $room)
    <?php
    $availableClass = 'btn btn-outline-secondary m-2 ';
    if ($room->availability === 'available') {
        $availableClass .= 'avail-green';
    } elseif ($room->availability === 'booked') {
        $availableClass .= 'avail-red';
    } else {
        $availableClass .= 'avail-grey';
    }
    
    ?>
                                            <button type="button" class="{{ $availableClass }}"
                                                style="  border: .5px solid#ccc;  border-radius: 8px; color: {{ $room->availability === 'available' ? '#28a745' : ($room->availability === 'booked' ? '#dc3545' : '#6c757d') }};"
                                                onClick="redirectToPage({{ $room->id }})">
                                                @if ($room->availability === 'available')
    <i class="fas fa-door-open" style="color: inherit;"></i> {{ $room->roomNumber }}
@elseif ($room->availability === 'booked')
    <i class="fas fa-door-closed" style="color: inherit;"></i> {{ $room->roomNumber }}
@else
    <i class="fa-solid fa-lock" style="color: inherit;"></i> {{ $room->roomNumber }}
    @endif
                                            </button>
    @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> -->

    <script>
        function confirmDelete(button) {
            if (confirm("Are you sure you want to delete this item?")) {
                var form = button.parentElement;
                form.submit();
            } else {
                alert("Delete operation cancelled.");
            }
        }


        $(document).ready(function() {
            $('#invoiceTable').DataTable({
                // Enable pagination
                "paging": true,
                // Enable searching
                "searching": true,
                // Set the default number of records per page
                "lengthMenu": [10, 25, 50, 100],
                // Customize the text for pagination buttons
                "oLanguage": {
                    "oPaginate": {
                        "sNext": "&#8594;",
                        "sPrevious": "&#8592;"
                    }
                },
                // Add Bootstrap styling
                "dom": '<"top"f>rt<"bottom"lip><"clear">'
            });
        });
    </script>
    <script>
        function confirmInactive(guestId) {
            var confirmed = confirm("Are you sure you want to set this guest as inactive?");
            if (confirmed) {

                window.location.href = "{{ URL::to('admin/guest/inactive') }}/" + guestId;
            } else {

            }
        }

        function redirectToPage(id) {
            window.location.href = "{{ URL::to('/admin/guest/create?room=') }}" + id;
        }
    </script>

@stop
