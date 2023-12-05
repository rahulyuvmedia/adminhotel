<!-- resources/views/backend/admin/guestHistory/guest_information.blade.php -->

@extends('backend.layouts.master')
@section('content')


<h5>
    Guest History </h5>
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
                                <td>Name:</td>
                                <td>
                                    @isset($model->name)
                                    {{ $model->name }}
                                    @else
                                    N/A
                                    @endisset</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>
                                    @isset($model->email)
                                    {{ $model->email }}
                                    @else
                                    N/A
                                    @endisset</td>
                            </tr>
                            <tr>
                                <td>Mobile:</td>
                                <td>
                                    @isset($model->mobile)
                                    {{ $model->mobile }}
                                    @else
                                    N/A
                                    @endisset</td>
                            </tr>
                            <tr>
                                <td>Aadhar:</td>
                                <td>
                                    @isset($model->aadharNo)
                                    {{ $model->aadharNo }}
                                    @else
                                    N/A
                                    @endisset</td>
                            </tr>
                            <tr>
                                <td>Booking Source:</td>
                                <td>
                                    @isset($model->bookingSource)
                                    {{ $model->bookingSource }}
                                    @else
                                    N/A
                                    @endisset</td>
                            </tr>
                            <tr>
                                <td>Room Number:</td>
                                <td>
                                    @isset($model->rooms)
                                    @isset($model->rooms->roomNumber)
                                    {{ $model->rooms->roomNumber }}
                                    @else
                                    No Room Assigned
                                    @endisset
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
                                <td>
                                    @isset($model->rooms)
                                    {{ $model->reservations->check_in }}
                                    @else
                                    No Room Assigned
                                    @endisset</td>
                            </tr>
                            <tr>
                                <td>Check-out:</td>
                                <td> @isset($model->rooms)
                                    {{ $model->reservations->check_out }}
                                    @else
                                    No Room Assigned
                                    @endisset
                                </td>
                            </tr>
                            <tr>
                                <td>Total Member:</td>
                                <td> @isset($model->rooms)
                                    {{ $model->member }}
                                    @else
                                    No Room Assigned
                                    @endisset
                                </td>
                            </tr>
                            <tr>
                                <td>Total Child:</td>
                                <td> @isset($model->rooms)
                                    {{ $model->child  }}
                                    @else
                                    No Room Assigned
                                    @endisset
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include TableExport library -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/tableexport@5.2.0/dist/js/tableexport.bundle.min.js">
</script>

<script>
$(document).ready(function() {
    $('.datatable').DataTable({
        dom: 'lBfrtip',
        buttons: [{
                extend: 'copy',
                text: 'Copy',
                className: 'btn btn-light', // Change to btn-light for a light background color
                exportOptions: {
                    columns: ':visible'
                },
                customize: function(win) {
                    $(win.document.body)
                        .find('button')
                        .removeClass('btn-secondary')
                        .addClass('btn-light')
                        .css('margin-right', '5px');
                }
            },
            {
                extend: 'csv',
                text: 'CSV',
                className: 'btn btn-light ', // Add btn-custom for common styling
                exportOptions: {
                    columns: ':visible'
                },
                customize: function(win) {
                    $(win.document.body)
                        .find('button')
                        .removeClass('btn-secondary')
                        .addClass('btn-custom')
                        .css('margin-right', '5px');
                }
            },
            {
                extend: 'excel',
                text: 'Excel',
                className: 'btn btn-light',
                style: 'margin-right: 5px;'
            },
            {
                extend: 'pdf',
                text: 'PDF',
                className: 'btn btn-light',
                style: 'margin-right: 5px;'
            },
            {
                extend: 'print',
                text: 'Print',
                className: 'btn btn-light',
                style: 'margin-right: 5px;'
            }
        ],
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All']
        ], // Length options and labels
        pageLength: 10 // Set the initial number of rows displayed
    });
});
</script>

@stop