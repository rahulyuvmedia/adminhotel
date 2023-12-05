@extends('backend.layouts.master')
@section('title', 'rooms')
@section('content')


<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Rooms /</span> All Rooms
</h4>


<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="bi bi-newspaper icon-gradient bg-mean-fruit"></i>
            </div>
            <div>All Rooms</div>
        </div>
        <br />
        <div class="page-title-actions">
            <a href="{{ route('admin.rooms.create') }}" class="btn " style="background-color:#7367f0 ; color:white">
                <i class="bi bi-plus-lg"></i> Add Room
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

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="guestsTable" class="table table-striped table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Room Number</th>
                                <th>Room Type</th>
                                <th>Occupancy</th>
                                <th>Price</th>
                                <th>Availability</th>
                                <!-- <th>Facilities</th> -->
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($model as $value)
                            <tr>
                                <td class="serial-number">{{ $loop->iteration }}</td>
                                <td>{{ $value->roomNumber }}</td>
                                <td>{{ $value->roomType }}</td>
                                <td>{{ $value->occupancy }}</td>
                                <td>₹{{ number_format($value->price) }}</td>
                                <td>{{ $value->availability }}</td>
                                <!-- <td>{{ $value->facilities }}</td> -->
                                <td class="d-flex">
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
    </div>
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