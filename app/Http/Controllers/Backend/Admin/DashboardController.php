<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    ->select('guest.*', 'reservations.*')
    ->get();

    
        return View::make('backend.admin.home',compact('upcomingReseration'));
    }
}
