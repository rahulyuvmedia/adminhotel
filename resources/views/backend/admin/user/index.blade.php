@extends('backend.layouts.master')
@section('title', ' All Users')
@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Users /</span> All Users
</h4>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="bi bi-newspaper icon-gradient bg-mean-fruit"></i>
            </div>
            <div>Users Management</div>
        </div>
        <br />
        <div class="page-title-actions">
            <a href="{{ URL::to('admin/users/create') }}" class="btn " style="background-color:#7367f0 ; color:white">
                <i class="bi bi-plus-lg"></i> Add Users
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
                                    <a href="{{ route('admin.edit', ['id' => $value->id]) }}"
                                        class="btn btn-primary me-2" data-mdb-ripple-color="dark">
                                        <i class="bi bi-pencil-fill"></i> Edit
                                    </a>
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
        var form = button.parentElement;
        form.submit();
    } else {
        alert("Delete operation cancelled.");
    }
}
$(document).ready(function() {
    $('#guestsTable').DataTable({
        "pagingType": "full_numbers",
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],

        "lengthMenu": [15, 30, 45, 60],
        "language": {
            "emptyTable": "No guests found",
            "zeroRecords": "No matching guests found"
        }
    });
});
</script>
@stop