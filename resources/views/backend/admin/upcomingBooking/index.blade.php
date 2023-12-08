@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="row">


@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

    <div class="col-lg-12 mb-4 mb-lg-">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title m-0 me-2" style="color:green">Upcoming Booking</h5>
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
                            <th>#</th>
                            <th>Customer</th>
                            <th>Member</th>
                            <th>Address</th>
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
                                <p class="mb-0 fw-medium">{{ $loop->iteration }}</p>
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