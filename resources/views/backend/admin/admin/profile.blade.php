@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('content')

<?php
    use Carbon\Carbon;
    
    ?>
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 600px;
    margin: auto;
    text-align: center;
    font-family: arial;
}

.title {
    color: grey;
    font-size: 18px;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

/* a {
    text-decoration: none;
    font-size: 22px;
    color: black;
} */

button:hover,
a:hover {
    opacity: 0.7;
}
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.card {
    /* Existing styles... */
    animation: fadeIn 0.8s ease-out; /* Add animation to the card */
}

/* Additional styles for hover effect */
.card:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease-in-out;
}
</style>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit"> </i>
            </div>
            <div>Admin's Profile</div>
        </div>
    </div>
</div>


<div class="card">
    <?php
                        $userImage = '/uploads/' . $user->idproff;
                        $defaultImage = '/uploads/default.jpg';
                        if (file_exists(public_path($userImage))) {
                            $imagePath = $userImage;
                        } else {
                            $imagePath = $defaultImage;
                        }
                        
                        ?>
    <img src="{{ URL::to($imagePath) }}" alt="John" style="width:100%">
    <h1>{{ $user->name }}</h1>
    <p class="title">{{ $user->email }}</p>
    <p>{{ $user->mobile }}</p>
    <div style="margin: 24px 0;">
        <span class="join">{{ Carbon::parse($user->created_at)->format('d/m/yy') }}

        </span>
    </div>
    <a href="{{ URL::to('/admin/edit_profile/' . $user->id) }}"><button>Edit Profile</button></a>
    <!-- <a href="{{ URL::to('/admin/edit_profile/' . $user->id) }}" class="btn btn-dark">Edit Profile</a> -->
</div>




@endsection