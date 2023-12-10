<?php

namespace App\Http\Controllers\Backend\Admin;
use Illuminate\Database\QueryException;
use App\Models\Guest;
use App\Models\Rooms;
use App\Models\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
 

class InvoiceController extends Controller
{
    //
    public function index()
    { 
       return view('backend.admin.invoice.index');
  
    }


    public function create(Request $request)
    { 
        $guest = Guest::where('id',$request->id)->first();
        

        
        return view('backend.admin.invoice.create',compact('guest'));
    }
    


    public function edit()
    { 
        return view('backend.admin.invoice.edit');
    }

    
    public function store()
    { 
        return view('backend.admin.invoice.index');
    }
    public function show()
    {
        //
    }
} 