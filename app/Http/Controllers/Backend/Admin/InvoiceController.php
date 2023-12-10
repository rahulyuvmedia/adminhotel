<?php

namespace App\Http\Controllers\Backend\Admin;
use Illuminate\Database\QueryException;
use App\Models\Guest;
use App\Models\Rooms;
use App\Models\Invoice;
use App\Models\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
 

class InvoiceController extends Controller
{
    //
    public function index()
    { 
       return view('backend.admin.invoice.index');
  
    }


public function create(Request $request)
{
    $guest = Guest::find($request->id);
    if (!$guest) {
        return redirect()->route('admin.invoice.index')->with('error', 'Guest not found.');
    }
    return view('backend.admin.invoice.create', compact('guest'));
}
    


    public function edit()
    { 
        return view('backend.admin.invoice.edit');
    }

    
public function store(Request $request)
{ 
    try {
         
        $invoice = new Invoice();
        $invoice->hotel_id = Auth::id();
        $invoice->guest_id = $request->guest_id;
        $invoice->invoice_number = $request->invoice_number;
        $invoice->total_amount = $request->total_amount;
        $invoice->save();

        
        return redirect()->route('admin.invoice.index')->with('success', 'Invoice created successfully.');
    } catch (\Exception $e) {
        return redirect()->route('admin.invoice.index')->with('error', 'Error creating invoice: ' . $e->getMessage());
    }
}
    public function show()
    {
        //
    }
} 