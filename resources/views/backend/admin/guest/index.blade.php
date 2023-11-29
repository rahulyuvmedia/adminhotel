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
        <br/>
        <div class="page-title-actions">
            <a href="{{ route('admin.guest.create') }}" class="btn" style='background-color:#7367f0;color:white'>
                <i class="bi bi-plus-lg"></i> Add Guest
            </a>
        </div>
        <br/>
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
                                <th>Email</th>
                                <th>Number</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($model as $value)
                            @if ($value->status == 1)
                            <tr>
                                <td class="serial-number">{{ $loop->iteration }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->mobile }}</td>
                                <td class="d-flex">
                                    <a href="{{ Route('admin.guest.edit', $value->id) }}" class="btn btn-primary me-2"
                                        data-mdb-ripple-color="dark">
                                        <i class="bi bi-pencil-fill"></i> Edit
                                    </a>

                                    <!-- <form action="{{ route('admin.guest.destroy', $value->id) }}" method="POST"
                                        id="deleteForm" class='me-2'>
                                        @method('DELETE')
                                        @csrf
                                        <button type="button" class="btn btn-danger" onclick="confirmDelete(this)">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form> -->


                                    @if ($value->status == 1)
                                    <a class="fw-bold  btn btn-success"
                                    onclick="confirmInactive({{ $value->id }})"    href="{{ URL::to('admin/guest/active', $value->id) }}">Active</a>

                                    
                                    @elseif ($value->status == 0)
                                    <a class="fw-bold btn btn-danger"
                                     href="{{ URL::to('admin/guest/inactive', $value->id) }}">Inactive</a>
                                    @else
                                    
                                    Unknown
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
</div>

<script>
    function confirmDelete(button) {
        if (confirm("Are you sure you want to delete this item?")) {
            var form = button.parentElement; // Get the parent element of the button, which is the form
            form.submit();
        } else {
            alert("Delete operation cancelled.");
        }
    }

    $(document).ready(function() {
        $('#guestsTable').DataTable({
            "pagingType": "full_numbers", 
            dom: 'lBfrtip', // Include 'l' for the length menu
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],// Add pagination numbers
            "lengthMenu": [15, 30, 45, 60], // Set number of records per page options
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
            // User clicked "OK", navigate to the 'Inactive' URL
            window.location.href = "{{ URL::to('admin/guest/inactive') }}/" + guestId;
        } else {
            // User clicked "Cancel", do nothing
        }
    }
</script>
@stop
