@extends('backend.layouts.master')
@section('title', 'Invoice')
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


        <h5 class="py-3 ">
            <span class="text-muted fw-light">Invoice /</span> List
        </h5>





        <div class="">
            <div class="card-datatable table-responsive">
                <table class="invoice-list-table table border-top" id="invoiceTable">
                    <thead>
                        <tr>
                            <th></th>
                            <th>#Invoice Number</th>
                            <th><i class='ti ti-trending-up text-secondary'></i></th>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th class="text-truncate">Room Number</th>
                            <!-- <th>Balance</th> -->
                            <th>Invoice Status</th>
                            <th class="cell-fit">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($invoiceModel as $model)
                            <tr>
                                <td class="serial-number">{{ $loop->iteration }}</td>

                                <td>{{ $model->invoice_number }}</td>
                                <td><i class='ti ti-trending-up text-secondary'></i></td>
                                <td>{{ $model->guest->name }}</td>
                                <td>{{ $model->guest->mobile }}</td>
                                <td class="text-truncate">{{ $model->guest->reservations->room->roomNumber }}</td>
                                <!-- <td>$200</td> -->
                                <td>{{ $model->status }}</td>
                                <td class="cell-fit">
                                    <!-- Your action buttons here -->
                                    <!-- <button class="btn btn-sm btn-primary">View</button>
                                    <button class="btn btn-sm btn-danger">Delete</button> -->
                                    <!-- <button class="btn btn-sm btn-primary">Processing..</button> -->
                                    <a href="{{ Route('admin.invoice.edit', $model->id) }}" class="btn btn-primary me-2">
                                        <i class="bi bi-pencil-fill"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <script>
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

@stop
