@extends('backend.layouts.master')
@section('title', 'Guests')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="bi bi-newspaper icon-gradient bg-mean-fruit"></i>
            </div>
            <div>Guests History</div>
        </div>
        <br />
        <!-- <div class="page-title-actions">
            <a href="{{ route('admin.guest.create') }}" class="btn btn-success">
                <i class="bi bi-plus-lg"></i> Add Guest
            </a>
        </div> -->
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
                                <th>Name</th>
                                <th>Room No</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($model as $value)

                            <tr>
                                <td class="serial-number">{{ $loop->iteration }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->reservations->room->roomNumber }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->mobile }}</td>
                                <td>
                                   
                                    {{ optional($value->reservations)->status }}</td>
                                
                                <td class="d-flex">
                                    <a href="{{ Route('admin.guestHistory.edit', $value->id) }}"
                                        class="btn btn-primary me-2" data-mdb-ripple-color="dark">
                                        <i class="bi bi-pencil-fill"></i> View
                                    </a>
                                    @php
                                    $policeInquiry = $pImodel->firstWhere('guest_id', $value->id);
                                    @endphp

                                    @if ($policeInquiry)
                                    <a href="{{ route('admin.policeInquiry.edit', ['policeInquiry' => $policeInquiry->id]) }}"
                                        class="btn btn-primary me-2" data-mdb-ripple-color="dark" style="margin-left: 9px;">
                                        <i class="bi bi-pencil-fill"></i>View PV Form
                                    </a>
                                    @else
                                    
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