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
 

class AvailableRoomsController extends Controller
{
    //
    public function index()
    {
     
    
    
    $rooms = Rooms::where('hotel_id', Auth()->user()->id)->where('rooms.status','=','1')->get();
        return View::make('backend.admin.availableRooms.index',compact('rooms'));
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