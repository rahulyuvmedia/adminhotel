@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('content')


@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif


<div class="col-lg-12 mb-4 mb-lg-">
    <div class="card h-100">
        <div class="card-header d-flex justify-content-between">
            <h5 class="card-title m-0 me-2">Rooms Details</h5>
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

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-group d-flex flex-wrap mb-4"  role="group" aria-label="First group">
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
                        <button type="button" class="{{ $availableClass }} col-md-3 m-4 "
                            style="border: .5px solid #ccc; border-radius: 8px; color: {{ $room->availability === 'available' ? '#28a745' : ($room->availability === 'booked' ? '#dc3545' : '#6c757d') }};
                                background-color: {{ $room->availability === 'available' ? '#e6ffe6' : ($room->availability === 'booked' ? '#ffe6e6' : '#f8f9fa') }};"
                            onClick="redirectToPage({{ $room->id }})">
                            @if ($room->availability === 'available')
                            <i class="fas fa-door-open" style="color: inherit; "></i> {{ $room->roomNumber }}
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