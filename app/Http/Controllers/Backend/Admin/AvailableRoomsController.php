<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Rooms; 
use App\Models\Guest; 

use Illuminate\Support\Facades\Auth;
use View;
use DB;
use App\Models\Reservation;
 

class AvailableRoomsController extends Controller
{
    //
    public function index()
    {
     
        $model = Guest::with(['reservations.room'])->where(['hotel_id' => Auth::id()])->orderBy('created_at', 'desc')->get();

    // dd($model);
    $rooms = Rooms::where('hotel_id', Auth()->user()->id)->where('rooms.status','=','1')->get();
        return View::make('backend.admin.availableRooms.index',compact('rooms','model'));
    }

    // public function edit(Request $request)
    // {
    //     $id = $request->input('id');
    //     $model = Guest::with(['reservations.room'])->find($id);
    
    //     if (!$model) {
    //         abort(404);
    //     }
    
    //     return view('backend.admin.guestHistory.edit_partial', compact('model'));
    // }
    // public function cancelReservation($reservationId)
    // {
    //     $reservation = Reservation::findOrFail($reservationId);


    //     // Reservation::where('guest_id', $reservation->guest_id)
    //     // ->where('check_out', '>', now())
    //     // ->update(['status' => 'completed']);


        
    //     $reservation->status = 'cancel';
    //     $reservation->save();

    //     $room = Rooms::findOrFail($reservation->room_id);
    //     $room->availability = 'available';
    //     $room->save();

    //     $guest = Guest::findOrFail($reservation->guest_id);
    //     $guest->status = '0';
    //     $guest->save();
        
    //     return Redirect::back()->with('success', 'Reservation canceled successfully.');
    // }


    
} 