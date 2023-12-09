<?php

namespace App\Http\Controllers\Backend\Admin;
use Illuminate\Database\QueryException;

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


    public function create()
    { 
        return view('backend.admin.invoice.create');
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