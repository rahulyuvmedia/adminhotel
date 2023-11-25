<!-- resources/views/backend/admin/guestHistory/guest_information.blade.php -->

@extends('backend.layouts.master')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="guestsTable" class="table table-striped table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Label</th>
                                <th>Data</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <img class="img-thumbnail img-fluid tool-img-edit"
                                        src="{{ URL::to('/uploads/' . $model->idproff) }}"
                                        style="max-width: 50%; margin-top: 50px;" />
                                </td>
                            </tr>
                            <tr>
                                <td>Status:</td>
                                <td>{{ $model->reservations->status }}</td>
                            </tr>
                            <tr>
                                <td>Name:</td>
                                <td>{{ $model->name }}</td>
                            </tr>
                            <tr>
                                <td>Room Number:</td>
                                <td>
                                    @isset($model->rooms)
                                    {{ $model->rooms->roomNumber }}
                                    @else
                                    No Room Assigned
                                    @endisset
                                </td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td>{{ $model->address }}</td>
                            </tr>
                            <tr>
                                <td>Check-in:</td>
                                <td>{{ $model->reservations->check_in }}</td>
                            </tr>
                            <tr>
                                <td>Check-out:</td>
                                <td>{{ $model->reservations->check_out }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include TableExport library -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/tableexport@5.2.0/dist/js/tableexport.bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var guestsTable = $('#guestsTable').DataTable({
            "pagingType": "full_numbers", 
            "language": {
                "emptyTable": "No guests found",
                "zeroRecords": "No matching guests found"
            },
            "columnDefs": [
                { "orderable": false, "targets": 0 } // Disable ordering on the first column
            ]
        });

        // Initialize TableExport
        new TableExport(guestsTable, {
            formats: ['xls', 'csv', 'txt'],
            exportButtons: false // Disabling built-in export buttons
        });
    });
</script>

@stop
