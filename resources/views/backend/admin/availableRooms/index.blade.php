@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('content')


@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<style>

    /* Add this CSS to your stylesheet or in a style tag in your HTML */

.modal-content {
    transition: opacity 0.3s ease-in-out;
    /* box-shadow : 0 0.31rem 1.25rem 0 rgb(255 221 0 / 39%); */
     box-shadow : 0 0.31rem 1.25rem 0 rgb(0 151 255 / 37%) ;

}

.modal-content:hover {
    opacity: 0.9;
 
}

</style>

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
                        <button type="button" class="{{ $availableClass }} col-md-2"
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




<!-- Modal -->
<div class="modal fade" id="guestDetailsModal" tabindex="-1" aria-labelledby="guestDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="guestDetailsModalLabel">Guest Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <button   onclick="downloadPDF()" class='btn btn-primary' style='background-color: #3498db; color: #ffffff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;'>
                    Download PDF
                </button>
            <div class="modal-body m-3"  id="pdfContent" >
                 
                <div id="guestDetailsContent" class="">
                   
                </div>
            </div>
        </div>
    </div>
</div>




<!-- -----------------------------------scripts-----------------------------------  -->
<script>
    function redirectToPage(id) {
        @foreach ($model as $guest)
            // Check if reservations property is defined and not null
            if ({{ $guest->reservations ? $guest->reservations->room_id : 'null' }} === id &&
                '{{ optional($guest->reservations->room)->availability }}' === 'booked') {
                // Open the modal and load guest details, including the image
                $('#guestDetailsContent').html(`
                 
        <div class='container'>
            <div class="d-flex flex-wrap">                 
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    @if (!empty($guest->idproff))
                        <img class="img-thumbnail img-fluid rounded mb-4" src="{{ URL::to('/uploads/' . $guest->idproff) }}" style="border-radius: 15px;" />
                    @endif
                </div>
                                
                <div class="col-lg-7 col-md-6 col-sm-12 mb-4" style="margin-left: 20px;">
                    <h5 class="mb-3"><strong>Name:</strong> <u>{{ $guest->name }}</u></h5>
                    <p><strong>Address:</strong> {{ $guest->address }}</p>
                    <p><strong>Phone:</strong> {{ $guest->mobile }}</p>
                    <p><strong>Email:</strong> {{ $guest->email }}</p>
                </div>
                                
            </div>

                    <hr>
            <div class="d-flex flex-wrap">

                <div class="col-lg-6 col-md-12 ">
                    <p><strong>Room:</strong> {{ $guest->reservations->room->roomNumber }} </p>
                    <p><strong>Adult:</strong> {{ $guest->member }}, <strong>Child:</strong> {{ $guest->child }}</p>
                    <p><strong>Occupancy:</strong> {{ $guest->reservations->room->occupancy }}</p>
                    <p><strong>Booking Source:</strong> {{ $guest->bookingSource }}</p>
                </div>

                <div class="col-lg-6 col-md-12 ">
                    <p><strong>Aadhar No:</strong> {{ $guest->aadharNo }}</p>
                    <p><strong>Check In:</strong>
                        {{ \Carbon\Carbon::parse($guest->reservations->check_in)->formatLocalized('%A') }}
                        <small class="text-muted text-nowrap">
                            {{ \Carbon\Carbon::parse($guest->reservations->check_in)->format('d/m/Y h:i:s A') }}
                        </small>
                    </p>
                    <p><strong>Check Out:</strong>
                        {{ \Carbon\Carbon::parse($guest->reservations->check_out)->formatLocalized('%A') }}
                        <small class="text-muted text-nowrap">
                            {{ \Carbon\Carbon::parse($guest->reservations->check_out)->format('d/m/Y h:i:s A') }}
                        </small>
                    </p>
                </div>
            </div>
        </div>    
                `);
                $('#guestDetailsModal').modal('show');
                return;
            }
        @endforeach

        // If the room is not booked or reservations property is null, proceed to the reservation page
        window.location.href = "{{ URL::to('/admin/guest/create?room=') }}" + id;
    }
</script>


<script>
 

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
function downloadPDF() {
    var element = document.getElementById('pdfContent');

    // Generate PDF
    html2pdf(element);
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.js"></script>

@endsection