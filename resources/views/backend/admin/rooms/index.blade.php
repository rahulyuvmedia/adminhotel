@extends('backend.layouts.master')
@section('title', 'rooms')
@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Rooms /</span> All Rooms
    </h4>

    <div class="app-page-title mt-5">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="bi bi-newspaper icon-gradient bg-mean-fruit"> </i>
                </div>

                <div class="d-inline-block ml-2 pb-3">
                    <a href="{{ URL::to('admin/rooms/create') }}" class="btn btn-success">
                        <i class="bi bi-plus-lg"></i> Rooms
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
            <table id="DataTables_Table_0" class="datatables-basic datatable">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Room Number</th>
                        <th>Room Type</th>
                        <th>Occupancy</th>
                        <th>Price</th>
                        <th>Availability</th>
                        <th>Facilities</th>
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
                            <td>{{ $value->facilities }}</td>

                            <td class="d-flex">
                                <a href="{{ Route('admin.rooms.edit', $value->id) }}" class="btn btn-primary me-2"
                                    data-mdb-ripple-color="dark">
                                    <i class="bi bi-pencil-fill"></i> Edit
                                </a>

                                <form action="{{ route('admin.rooms.destroy', $value->id) }}" method="POST"
                                    id="deleteForm" class='me-2'>
                                    @method('DELETE')
                                    @csrf
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete(this)">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>


                                @if ($value->status == 1)
                                    <a class="fw-bold  btn btn-success"
                                        href="{{ URL::to('admin/rooms/active', $value->id) }}">Active</a>
                                @elseif ($value->status == 0)
                                    <a class="fw-bold btn btn-danger"
                                        href="{{ URL::to('admin/rooms/inactive', $value->id) }}">Inactive</a>
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

    <style>
        /* Add your custom styles here */
    </style>

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

    <script>
        <!-- $(document).ready(function() {
        $('.datatable').DataTable({
        dom: 'lBfrtip', // Include 'l' for the length menu
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All']
        ], // Length options and labels
        pageLength: 10 // Set the initial number of rows displayed
        });
        });
        -->
    </script>


@stop
