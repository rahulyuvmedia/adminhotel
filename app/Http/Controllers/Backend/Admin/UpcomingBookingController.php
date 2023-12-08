<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Rooms;
use App\Models\Guest;
use Carbon\Carbon;
use View;
use DB;
use App\Models\Reservation;
 

class UpcomingBookingController extends Controller
{
    //
    public function index()
    {
        $upcomingReseration = DB::table('guest')
    ->join('reservations', 'guest.id', '=', 'reservations.guest_id')
    ->leftJoin('rooms', 'reservations.room_id', '=', 'rooms.id')
    ->where('reservations.check_in', '>', now())
    ->where('guest.hotel_id', '=', Auth()->user()->id)
    ->select('guest.*', 'reservations.*', 'rooms.roomNumber')
    ->where('guest.status','=','1')
    ->get();

//  dd($upcomingReseration);
    
    $rooms = Rooms::where('hotel_id', Auth()->user()->id)->where('rooms.status','=','1')->get();
        return View::make('backend.admin.upcomingBooking.index',compact('upcomingReseration','rooms'));
    }


    public function cancelReservation($reservationId)
    {
        $reservation = Reservation::findOrFail($reservationId);


        // Reservation::where('guest_id', $reservation->guest_id)
        // ->where('check_out', '>', now())
        // ->update(['status' => 'completed']);


        
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