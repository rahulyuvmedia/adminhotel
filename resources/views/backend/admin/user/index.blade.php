@extends('backend.layouts.master')
@section('title', ' All Users')
@section('content')

<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <div class="my-auto">
        <h5 class="page-title fs-21 mb-1">Users Management</h5>
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Users</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex my-xl-auto right-content align-items-center">

        <div class="mb-xl-0">
            @can('user-create')
            <a class="btn btn-primary" href="{{ URL::to('admin/users/create') }}"><i
                    class="glyphicon glyphicon-plus"></i>
                New User
            </a>
            @endcan



        </div>
    </div>
</div>



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
                            @foreach ($adminuser as $value)
                            <tr>
                                <td class="serial-number">{{ $loop->iteration }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->mobile }}</td>
                                <td class="d-flex">
                                    <!-- <a href="{{ Route('admin.edit', $value->id) }}" class="btn btn-primary me-2"
                                        data-mdb-ripple-color="dark">
                                        <i class="bi bi-pencil-fill"></i> Edit
                                    </a> -->
                                    <a href="{{ route('admin.edit', ['id' => $value->id]) }}"
                                        class="btn btn-primary me-2" data-mdb-ripple-color="dark">
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


                                    <!-- @if ($value->status == 1)
                                    <a class="fw-bold  btn btn-success"
                                        href="{{ URL::to('admin/users/active', $value->id) }}">Active</a>
                                    @elseif ($value->status == 0)
                                    <a class="fw-bold btn btn-danger"
                                        href="{{ URL::to('admin/users/inactive', $value->id) }}">Inactive</a>
                                    @else
                                    Unknown
                                    @endif -->

                                    @if ($value->status == 1)
                                    <a class="fw-bold  btn btn-danger"
                                        href="{{ URL::to('admin/user/active', $value->id) }}">Inactive</a>
                                    @elseif ($value->status == 0)
                                    <a class="fw-bold btn btn-success"
                                        href="{{ URL::to('admin/user/inactive', $value->id) }}">Active</a>
                                    @else
                                    Unknown
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
        var form = button.parentElement; // Get the parent element of the button, which is the form
        form.submit();
    } else {
        alert("Delete operation cancelled.");
    }
}

$(document).ready(function() {
    $('#guestsTable').DataTable({
        "pagingType": "full_numbers",
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],// Add pagination numbers
        
        "lengthMenu": [15, 30, 45, 60], // Set number of records per page options
        "language": {
            "emptyTable": "No guests found",
            "zeroRecords": "No matching guests found"
        }
    });
});
</script>

@stop