@extends('backend.layouts.master')
@section('title', 'Guests')
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


                    <h5 class="py-3">
                        <span class="text-muted fw-light">Guest History /</span> List
                    </h5>
                </div>

            </div>
        </div>
        <div class="">
            <div class="card-datatable table-responsive">
                <table class="invoice-list-table table border-top" id="invoiceTable">
                    <thead >
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
                                            class="btn btn-primary me-2" data-mdb-ripple-color="dark"
                                            style="margin-left: 9px;">
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
    </script>
@stop
