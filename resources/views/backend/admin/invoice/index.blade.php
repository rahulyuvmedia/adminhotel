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


        <h5 class="py-3 mb-4">
            <span class="text-muted fw-light">Invoice /</span> List
        </h5>



        <!-- <div class="card mb-4">
            <div class="card-widget-separator-wrapper">
                <div class="card-body card-widget-separator">
                    <div class="row gy-4 gy-sm-1">
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                <div>
                                    <h3 class="mb-1">24</h3>
                                    <p class="mb-0">Clients</p>
                                </div>
                                <span class="avatar me-sm-4">
                                    <span class="avatar-initial bg-label-secondary rounded"><i
                                            class="ti ti-user ti-md"></i></span>
                                </span>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none me-4">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                <div>
                                    <h3 class="mb-1">165</h3>
                                    <p class="mb-0">Invoices</p>
                                </div>
                                <span class="avatar me-lg-4">
                                    <span class="avatar-initial bg-label-secondary rounded"><i
                                            class="ti ti-file-invoice ti-md"></i></span>
                                </span>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                                <div>
                                    <h3 class="mb-1">$2.46k</h3>
                                    <p class="mb-0">Paid</p>
                                </div>
                                <span class="avatar me-sm-4">
                                    <span class="avatar-initial bg-label-secondary rounded"><i
                                            class="ti ti-checks ti-md"></i></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h3 class="mb-1">$876</h3>
                                    <p class="mb-0">Unpaid</p>
                                </div>
                                <span class="avatar">
                                    <span class="avatar-initial bg-label-secondary rounded"><i
                                            class="ti ti-circle-off ti-md"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


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
                                    <button class="btn btn-sm btn-primary">Processing..</button>
                                 
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
