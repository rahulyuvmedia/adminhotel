<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rooms;
use View;
use DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $upcomingReseration = DB::table('guest')
    ->join('reservations', 'guest.id', '=', 'reservations.guest_id')
    ->where('reservations.checkin_date', '>', now())
    ->where('guest.hotel_id', '=', Auth()->user()->id)
    ->select('guest.*', 'reservations.*')
    ->get();
    $rooms = Rooms::where('hotel_id', Auth()->user()->id)->get();
        return View::make('backend.admin.home',compact('upcomingReseration','rooms'));
    }
}
