@extends('backend.layouts.master')
@section('title', 'guest')
@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">DataTables /</span> Basic
    </h4>
    <div class="app-page-title mt-5">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="bi bi-newspaper icon-gradient bg-mean-fruit"> </i>
                </div>
                <div>All Guests</div>
                <div class="d-inline-block ml-2 pb-3">
                    <a href="{{ URL::to('admin/guest/create') }}" class="btn btn-success">
                        <i class="bi bi-plus-lg"></i> Add Guest
                    </a>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-datatable table-responsive pt-0">

            <table class="datatables-basic table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Salary</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($model as $value)
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

                                <form action="{{ route('admin.guest.destroy', $value->id) }}" method="POST" id="deleteForm"
                                    class='me-2'>
                                    @method('DELETE')
                                    @csrf
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete(this)">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>


                                @if ($value->status == 1)
                                    <a class="fw-bold  btn btn-success"
                                        href="{{ URL::to('admin/guest/active', $value->id) }}">Active</a>
                                @elseif ($value->status == 0)
                                    <a class="fw-bold btn btn-danger"
                                        href="{{ URL::to('admin/guest/inactive', $value->id) }}">Inactive</a>
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



    <script>
        function confirmDelete(button) {
            if (confirm("Are you sure you want to delete this item?")) {
                var form = button.parentElement; // Get the parent element of the button, which is the form
                form.submit();
            } else {
                alert("Delete operation cancelled.");
            }
        }
    </script>


@stop
