@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="row">

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






        <div class="card-header d-flex justify-content-between">
            <h5 class="py-3">
                <span class="text-muted fw-light">Upcoming Booking /</span> List
            </h5>
            <div class="dropdown">
                <button class="btn p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">

                    <a class="dropdown-item" href="javascript:void(0);" onclick="refreshPage()">Refresh</a>


                    <a class="dropdown-item" href="javascript:void(0);" onclick="shareContent()">Share</a>

                </div>
            </div>
        </div>


        <div class="">
            <div class="card-datatable table-responsive">

                @if ($upcomingReseration->isEmpty() || $upcomingReseration->first()->status === '0')
                <p class='text-center'> No result found </p>
                @else
                <table class="invoice-list-table table border-top" id="invoiceTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Member</th>
                            <th>Address</th>
                            <th>Check In Date</th>
                            <th>Room </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $counter = 1; @endphp
                        @foreach ($upcomingReseration as $value)
                        @if ($value->status !== 'cancel')
                        <tr>

                            <td>
                                <p class="mb-0 fw-medium">{{ $counter++ }}</p>
                            </td>
                            <td>
                                <p class="mb-0 fw-medium">{{ $value->name }}</p>
                                <small class="text-muted">{{ $value->mobile }}</small>
                            </td>


                            <td>
                                <p class="mb-0 fw-medium">Adult: {{ $value->member }}</p>
                                <small class="text-muted">Child: {{ $value->child }}</small>
                            </td>

                            <td>
                                <p class="mb-0 fw-medium">{{ $value->address }}</p>
                            </td>

                            <td>
                                <div class="d-flex flex-column">
                                    <p class="mb-0 fw-medium">
                                        {{ \Carbon\Carbon::parse($value->check_in)->formatLocalized('%A') }}
                                    </p>
                                    <small class="text-muted text-nowrap">
                                        {{ \Carbon\Carbon::parse($value->check_in)->format('d/m/Y h:i:s A') }}
                                    </small>
                                </div>
                            </td>
                            <td><span class="badge bg-label-success">{{ $value->roomNumber }}</span></td>
                            <td class="cell-fit">
                                <form method="post"
                                    action="{{ route('cancelReservation', ['reservation' => $value->id]) }}"
                                    onsubmit="return confirmCancel()">
                                    @csrf
                                    @method('post')
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>

                </table>
                @endif

            </div>
        </div>








    </div>
    <!-- -----------------------------------scripts-----------------------------------  -->

    <script>
    function redirectToPage(id) {
        window.location.href = "{{ URL::to('/admin/guest/create?room=') }}" + id;
    }

    function refreshPage() {
        location.reload();
    }
    </script>

    <script>
    function shareContent() {
        if (navigator.share) {
            navigator.share({
                    title: 'Your Share Title',
                    text: 'Your Share Text',
                    url: 'https://your-share-url.com'
                })
                .then(() => console.log('Shared successfully'))
                .catch((error) => console.error('Error sharing:', error));
        } else {
            alert('Web Share API is not supported in this browser.');
        }
    }
    </script>

    <script>
    function confirmCancel() {
        var confirmed = confirm("Are you sure you want to cancel this reservation?");
        if (confirmed) {
            // User clicked "OK", form submission will proceed
            return true;
        } else {
            // User clicked "Cancel", prevent form submission
            alert("Reservation cancellation canceled.");
            return false;
        }
    }
    </script>
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
    @endsection