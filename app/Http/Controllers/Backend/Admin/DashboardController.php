<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Rooms;
use App\Models\Guest;

use View;
use DB;
use App\Models\Reservation;
 

class DashboardController extends Controller
{
    //
    public function index()
    {
        $upcomingReseration = DB::table('guest')
    ->join('reservations', 'guest.id', '=', 'reservations.guest_id')
    ->where('reservations.check_in', '>', now())
    ->where('guest.hotel_id', '=', Auth()->user()->id)
    ->select('guest.*', 'reservations.*')
    ->where('guest.status','=','1')
    ->get();
    $rooms = Rooms::where('hotel_id', Auth()->user()->id)->where('rooms.status','=','1')->get();
        return View::make('backend.admin.home',compact('upcomingReseration','rooms'));
    }


    public function cancelReservation($reservationId)
    {
        $reservation = Reservation::findOrFail($reservationId);

        $reservation->status = 'cancel';
        $reservation->save();

        $room = Rooms::findOrFail($reservation->room_id);
        $room->availability = 'available';
        $room->save();

        $guest = Guest::findOrFail($reservation->guest_id);
        $guest->status = '0';
        $guest->save();
        
        return Redirect::back()->with('success', 'Reservation canceled successfully.');
    }


    
} 