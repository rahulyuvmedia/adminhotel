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
    ->where('reservations.check_in', '>', now())
    ->where('guest.hotel_id', '=', Auth()->user()->id)
    ->select('guest.*', 'reservations.*')
    ->where('status','=','1')
    ->get();
    $rooms = Rooms::where('hotel_id', Auth()->user()->id)->where('status','=','1')->get();
        return View::make('backend.admin.home',compact('upcomingReseration','rooms'));
    }
} 