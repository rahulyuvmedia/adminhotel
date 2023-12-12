@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('content')
<!-- <div class="row"> -->
<!-- <div class="col-lg-6 mb-4 mb-lg-">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title m-0 me-2">Upcoming Booking</h5>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">

                        <a class="dropdown-item" href="javascript:void(0);" onclick="refreshPage()">Refresh</a>


                        <a class="dropdown-item" href="javascript:void(0);" onclick="shareContent()">Share</a>

                    </div>
                </div>
            </div>
            <div class="table-responsive">

                @if($upcomingReseration->isEmpty() || $upcomingReseration->first()->status === '0')
                <p class='text-center'> No result found </p>
                @else
                <table class="table table-borderless border-top">
                    <thead class="border-bottom text-center">
                        <tr>
                            <th>Customer</th>
                            <th>Check In Date</th>
                            <th>Room </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($upcomingReseration as $value)
                        @if($value->status !== 'cancel')
                        <tr>
                            <td>
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 fw-medium">{{ $value->name }}</p>
                                        <small class="text-muted">{{ $value->mobile }}</small>
                                    </div>
                                </div>
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
                            <td>
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
    </div> -->

<!-- <div class="col-lg-6 mb-4 mb-lg-">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title m-0 me-2">Extended Stay </h5>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">
                        <a class="dropdown-item" href="javascript:void(0);" onclick="refreshPage()">Refresh</a>
                        <a class="dropdown-item" href="javascript:void(0);" onclick="shareContent()">Share</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                @if($expiryReseration->isEmpty() || $expiryReseration->first()->status === '0' ||
                $expiryReseration->first()->status === 'cancel')
                <p class='text-center'> No result found </p>
                @else
                <table class="table table-borderless border-top">
                    <thead class="border-bottom">
                        <tr class="text-center">
                            <th>Customer</th>
                            <th>Check In Date</th>
                            <th>Room </th>
                            <th>Extended Time</th>
                         
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($expiryReseration as $value)
                        @if($value->status !== 'cancel' &&
                        \Carbon\Carbon::parse($value->check_in)->lte(\Carbon\Carbon::now()))
                        <tr>
                            <td>
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 fw-medium">{{ $value->name }}</p>
                                        <small class="text-muted">{{ $value->mobile }}</small>
                                    </div>
                                </div>
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
                            <td>

                                @php
                                $checkInDate = \Carbon\Carbon::parse($value->check_in);
                                $checkOutDate = \Carbon\Carbon::parse($value->check_out);
                                $today = \Carbon\Carbon::now();

                                // Check if both check-in and check-out dates are in the past
                                if ($checkInDate->lte($today) && $checkOutDate->lte($today)) {
                                $timeRemaining = $today->diffInDays($checkOutDate);
                                echo '<span class="badge bg-label-danger">';
                                    if ($timeRemaining > 0) {
                                    echo $timeRemaining . ' day(s)';
                                    } else {
                                    echo 'Today ' . $today->format('') . ' (Check-Out: ' . $checkOutDate->format('h:i:s
                                    A') . ')';
                                    }
                                    echo '</span>';

                                }

                                @endphp

                            </td>
                         

                            <td>
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
    </div> -->

<!-- <div class="col-lg-12 mb-4 mb-lg-">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title m-0 me-2">Rooms Details</h5>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">
                        <a class="dropdown-item" href="javascript:void(0);" onclick="refreshPage()">Refresh</a>
                        <a class="dropdown-item" href="javascript:void(0);" onclick="shareContent()">Share</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class='row'>
                    <div class="btn-group d-flex flex-wrap" role="group" aria-label="First group">
                        @foreach ($rooms as $room)
                        <?php
                                $availableClass = 'btn btn-outline-secondary m-2 ';
                                if ($room->availability === 'available') {
                                    $availableClass .= 'avail-green';
                                } elseif ($room->availability === 'booked') {
                                    $availableClass .= 'avail-red';
                                } else {
                                    $availableClass .= 'avail-grey';
                                }
                                
                                ?>
                        <button type="button" class="{{ $availableClass }}"
                            style="  border: .5px solid#ccc;  border-radius: 8px; color: {{ $room->availability === 'available' ? '#28a745' : ($room->availability === 'booked' ? '#dc3545' : '#6c757d') }};"
                            onClick="redirectToPage({{ $room->id }})">
                            @if ($room->availability === 'available')
                            <i class="fas fa-door-open" style="color: inherit;"></i> {{ $room->roomNumber }}
                            @elseif ($room->availability === 'booked')
                            <i class="fas fa-door-closed" style="color: inherit;"></i> {{ $room->roomNumber }}
                            @else
                            <i class="fa-solid fa-lock" style="color: inherit;"></i> {{ $room->roomNumber }}
                            @endif
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> -->



<!-- </div> -->

<div class="card mb-4">
    <div class="card-widget-separator-wrapper">
        <div class="card-body card-widget-separator">
            <div class="row gy-4 gy-sm-1">
                <div class="col-sm-6 col-lg-3">
                    <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
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
                    <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
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
                    <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
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
</div>

<div class="card mb-4">
    <div class="card-widget-separator-wrapper">
        <div class="card-body card-widget-separator">
            <div class="row gy-4 gy-sm-1">
                <div class="col-sm-6 col-lg-3">
                    <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                        <div>
                            <h3 class="mb-1">NaN</h3>
                            <p class="mb-0">NaN</p>
                        </div>
                        <span class="avatar me-sm-4">
                            <span class="avatar-initial bg-label-secondary rounded"><i
                                    class="ti ti-user ti-md"></i></span>
                        </span>
                    </div>
                    <hr class="d-none d-sm-block d-lg-none me-4">
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                        <div>
                            <h3 class="mb-1">NaN</h3>
                            <p class="mb-0">NaN</p>
                        </div>
                        <span class="avatar me-lg-4">
                            <span class="avatar-initial bg-label-secondary rounded"><i
                                    class="ti ti-file-invoice ti-md"></i></span>
                        </span>
                    </div>
                    <hr class="d-none d-sm-block d-lg-none">
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                        <div>
                            <h3 class="mb-1">NaN</h3>
                            <p class="mb-0">NaN</p>
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
                            <h3 class="mb-1">NaN</h3>
                            <p class="mb-0">NaN</p>
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
</div>

<div class="card mb-4">
    <div class="card-widget-separator-wrapper">
        <div class="card-body card-widget-separator">
            <div class="row gy-4 gy-sm-1">
                
                 
                
                <div class="col-sm-6 col-lg-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h3 class="mb-1">Processing..</h3>
                            <p class="mb-0">NaN</p>
                        </div>
                         
                    </div>
                </div>
                
            </div>
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
@endsection