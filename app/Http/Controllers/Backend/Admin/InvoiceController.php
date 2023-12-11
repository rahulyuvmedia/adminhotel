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
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Auth;
 

class InvoiceController extends Controller
{
    //
    public function index()
    { 

         $invoiceModel = Invoice::with('rooms')->where(['hotel_id' => Auth::id()])->orderBy('created_at', 'desc')->get();
        // dd($model);    
       return view('backend.admin.invoice.index' , compact('invoiceModel'));
  
    }


public function create(Request $request)
{
    $guest = Guest::with('rooms')->where(['hotel_id' => Auth::id()])->find($request->id);
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
//   dd($request);
    $request->validate([ 
        'billing_date' => 'required',
        'room_charge' => 'required',
        'pay_method' => 'required',
        'account_detail' => 'required',
        'account_holder' => 'required',
        'additional_charges' => 'nullable',
        'due_amount' => 'nullable',
        'total_paid_amount' => 'required',
        'discount' => 'nullable',
        'tax_amount' => 'nullable',
        'notes' => 'nullable',


     ]);
    try {
         
        $invoice = new Invoice();
        $invoice->hotel_id = Auth::id();
        $invoice->guest_id = $request->guest_id;
        $invoice->invoice_number = $request->invoice_number;
        $invoice->room_charge = $request->room_charge;
        $invoice->billing_date = $request->billing_date;
        $invoice->pay_method = $request->pay_method;
        $invoice->account_detail = $request->account_detail;
        $invoice->account_holder = $request->account_holder;
        $invoice->additional_charges = $request->additional_charges;
        $invoice->due_amount = $request->due_amount;
        $invoice->total_paid_amount = $request->total_paid_amount;
        $invoice->discount = $request->discount;
        $invoice->tax_amount = $request->tax_amount;
        $invoice->notes = $request->notes;
//  dd($invoice);
        $invoice->save();

        
        return redirect()->route('admin.invoice.index')->with('success', 'Invoice created successfully.');
    }  catch (\Exception $e) {
        Log::error($e->getMessage());
        return back()->with('error', $e->getMessage()); // Set the error message in the session
    }
}
    public function show()
    {
        //
    }
} 