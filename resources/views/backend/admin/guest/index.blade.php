@extends('backend.layouts.master')
@section('title', 'Guests')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="bi bi-newspaper icon-gradient bg-mean-fruit"></i>
            </div>
            <div>All Guests</div>
        </div>
        <br />
        <div class="page-title-actions">
            <a href="{{ route('admin.guest.create') }}" class="btn" style='background-color:#7367f0;color:white'>
                <i class="bi bi-plus-lg"></i> Add Guest
            </a>
        </div>
        <br />
    </div>
</div>

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

<div class="row">


    <div class="col-lg-12 md-12 mb-4 col-sm-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="guestsTable" class="table table-striped table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Room No</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>


                            @php $counter = 1; @endphp
                            @foreach ($model as $value)
                            @if ($value->status == 1)
                            <tr>
                                <td class="serial-number">{{ $counter++ }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->reservations->room->roomNumber }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->mobile }}</td>
                                <td class="d-flex">
                                    <a href="{{ Route('admin.guest.edit', $value->id) }}" class="btn btn-primary me-2"
                                        data-mdb-ripple-color="dark">
                                        <i class="fa fa-pencil"></i>

                                    </a>
                                    @if ($value->status == 1)
                                    <a class="fw-bold  btn btn-success" onclick="confirmInactive({{ $value->id }})"
                                        href="{{ URL::to('admin/guest/active', $value->id) }}">Active
                                    </a>
                                    @elseif ($value->status == 0)
                                    <a class="fw-bold btn btn-danger"
                                        href="{{ URL::to('admin/guest/inactive', $value->id) }}">Inactive</a>
                                    @else
                                    Unknown
                                    @endif


                                    @php
                                    $policeInquiry = $pImodel->firstWhere('guest_id', $value->id);
                                    @endphp

                                    @if ($policeInquiry)
                                    <a href="{{ route('admin.policeInquiry.edit', ['policeInquiry' => $policeInquiry->id]) }}"
                                        class="btn btn-primary me-2" data-mdb-ripple-color="dark"
                                        style="margin-left: 6px;">
                                        <i class="fa fa-pencil "></i> <i class="fas fa-shield-alt"
                                            style="margin-left: 3px;"></i>
                                    </a>
                                    @else
                                    <a href="{{ route('admin.policeInquiry.create', ['id' => $value->id]) }}"
                                        class="fw-bold btn btn-primary btn-outline-primary me-2"
                                        data-mdb-ripple-color="dark" style="margin-left: 6px;">
                                        <i class="fas fa-shield-alt"></i>
                                    </a>
                                    @endif

                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-lg-6 md-6 mb-4 col-sm-12">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title m-0 me-2">Upcoming Booking</h5>
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
                <div class="table-responsive">


                    <table class="table table-borderless border-top">
                        <thead class="border-bottom">
                            <tr>
                                <th>Customer Details</th>
                                <th>Check In Date</th>
                                <th>Room Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($upcomingReseration->isEmpty())
                            <p class='text-center'> No result found </p>
@else
    @foreach ($upcomingReseration as $value)
    @if ($value->status !== 'cancel')
    <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="d-flex flex-column">
                                            <p class="mb-0 fw-medium">{{ $value->name }}</p>
                                            <small class="text-muted">{{ $value->mobile }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 fw-medium">
                                            {{ \Carbon\Carbon::parse($value->check_in)->formatLocalized('%A') }}
                                        </p>
                                        <small class="text-muted text-nowrap">
                                            {{ \Carbon\Carbon::parse($value->check_in)->format('d/m/Y h:i:s A') }}
                                        </small>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-success">{{ $value->room_id }}</span></td>
                                <td>
                                    <form method="post"
                                        action="{{ route('cancelReservation', ['reservation' => $value->id]) }}"
                                        onsubmit="return confirmCancel()">
                                        @csrf
                                        @method('post')
                                        <button type="submit" class="btn btn-danger">Cancel</button>
                                    </form>
                                </td>
                            </tr>
    @endif
    @endforeach
                            @endif
                        </tbody>

                    </table>

                </div>
            </div>
        </div> -->
    <br />



</div>

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
    $('#guestsTable').DataTable({
        "pagingType": "full_numbers",
        dom: 'lBfrtip',
        buttons: [{
                extend: 'copy',
                text: 'Copy',
                className: 'btn btn-light', // Change to btn-light for a light background color
                exportOptions: {
                    columns: ':visible'
                },
                customize: function(win) {
                    $(win.document.body)
                        .find('button')
                        .removeClass('btn-secondary')
                        .addClass('btn-light')
                        .css('margin-right', '5px');
                }
            },
            {
                extend: 'csv',
                text: 'CSV',
                className: 'btn btn-light ', // Add btn-custom for common styling
                exportOptions: {
                    columns: ':visible'
                },
                customize: function(win) {
                    $(win.document.body)
                        .find('button')
                        .removeClass('btn-secondary')
                        .addClass('btn-custom')
                        .css('margin-right', '5px');
                }
            },
            {
                extend: 'excel',
                text: 'Excel',
                className: 'btn btn-light',
                style: 'margin-right: 5px;'
            },
            {
                extend: 'pdf',
                text: 'PDF',
                className: 'btn btn-light',
                style: 'margin-right: 5px;'
            },
            {
                extend: 'print',
                text: 'Print',
                className: 'btn btn-light',
                style: 'margin-right: 5px;'
            }
        ],
        "lengthMenu": [15, 30, 45, 60],
        "language": {
            "emptyTable": "No guests found",
            "zeroRecords": "No matching guests found"
        }
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
</script>
@stop