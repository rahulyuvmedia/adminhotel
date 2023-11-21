@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="col-lg-6 mb-4 mb-lg-0">
    <div class="card h-100">
        <div class="card-header d-flex justify-content-between">
            <h5 class="card-title m-0 me-2">Upcoming Booking</h5>
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
        <div class="table-responsive">
            <table class="table table-borderless border-top">
                <thead class="border-bottom">
                    <tr>
                        <th>Customer Details</th>
                        <th>Check In Date</th>
                        <th>Room Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($upcomingReseration as $value)
                    <tr>
                        <td>
                            <div class="d-flex justify-content-start align-items-center">

                                <div class="d-flex flex-column">
                                    <p class="mb-0 fw-medium">{{ $value->name }}</p><small
                                        class="text-muted">{{ $value->mobile }}</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <p class="mb-0 fw-medium">
                                    {{ \Carbon\Carbon::parse($value->checkin_date)->formatLocalized('%A') }}

                                </p>
                                <small
                                    class="text-muted text-nowrap">{{ \Carbon\Carbon::parse($value->checkin_date)->format('d/m/Y h:i:s A')  }}
                                </small>
                            </div>
                        </td>
                        <td><span class="badge bg-label-success">{{ $value->room_id }}</span></td>
                        <td>
                            <p class="mb-0 fw-medium">{{ $value->room_id }}</p>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
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
@endsection