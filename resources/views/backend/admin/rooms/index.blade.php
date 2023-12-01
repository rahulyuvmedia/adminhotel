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
                <a href="{{ route('admin.rooms.create') }}" class="btn "style="background-color:#7367f0 ; color:white">
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

    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table id="DataTables_Table_0" class="datatables-basic datatable table table-striped">
                <thead>
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

    <style>
        /* Add your custom styles here */
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fa;
        }
    </style>

    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this item?")) {
                var form = document.getElementById('deleteForm_' + id);
                form.submit();
            } else {
                alert("Delete operation cancelled.");
            }
        }
    </script>
    <!--
        <script>
            $(document).ready(function() {
                $('.datatable').DataTable({
                    dom: 'lBfrtip',
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                    lengthMenu: [
                        [10, 25, 50, -1],
                        [10, 25, 50, 'All']
                    ],
                    pageLength: 10
                });
            });
        </script> -->

@stop
