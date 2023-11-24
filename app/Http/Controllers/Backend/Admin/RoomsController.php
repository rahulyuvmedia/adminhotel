<?php

namespace App\Http\Controllers\Backend\Admin;
use App\Http\Controllers\Controller;
use App\Models\Rooms;
use App\Models\Master;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function index(Request $request)
     {
         $keyword = $request->input('keyword');
         $model = Rooms::where(['hotel_id'=>Auth::id()])->orderBy('created_at', 'desc')->get();
     
 
         return view('backend.admin.rooms.index', compact('model', 'keyword'));
     }


    // public function index()
    // {

    //     $model = Rooms::orderby('created_at', 'desc')->get();

    //     return view('backend.admin.rooms.index', compact('model'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $master = Master::orderBy('created_at', 'asc')
            ->where('type', '=', 'Facilities')
            ->get();


        return view('backend.admin.rooms.create' , compact('master'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'roomNumber' => 'required',
            'price' => 'required',
            'roomType' => 'required',
            'occupancy' => 'required',
            'availability' => 'required',
            'facilities' => 'required|array',
        ]);
        try {
            $model = new Rooms();
           
            $model->roomNumber = $request->roomNumber;
            $model->price = $request->price;
            $model->roomType = $request->roomType;
            $model->occupancy = $request->occupancy;
            $model->availability = $request->availability;
            $model->facilities = implode('|', $request->facilities);
            $model->hotel_id = Auth::id();
 
         
         
            
            $model->save();
            return redirect()->route('admin.rooms.index')->with('success', 'Room added successfully.');
        } catch (\Exception $e) {
            session()->flash('sticky_error', $e->getMessage());
            return back();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show(Rooms $rooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $master = Master::orderBy('created_at', 'asc')
            ->where('type', '=', 'Facilities')
            ->get();
        $model = Rooms::where(['id' => $id])->first();
        return view('backend.admin.rooms.edit', compact('model','master'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'roomNumber' => 'required',
            'price' => 'required',
            'roomType' => 'required',
            'occupancy' => 'required',
            'availability' => 'required',
            'facilities' => 'required',

            
            // 'description' => 'required',
        ]);
        try {
            $model = Rooms::find($id);
            $model->roomNumber = $request->roomNumber;
            $model->price = $request->price;
            $model->roomType = $request->roomType;
            $model->occupancy = $request->occupancy;
            $model->availability = $request->availability;
            $model->facilities = implode('|', $request->facilities);
    
            
            // if ($request->hasFile('image')) {
            //     $extension = strtolower($request->file('image')->getClientOriginalExtension());
            //     if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'svg' || $extension == 'webp') {
            //         if ($request->file('image')->isValid()) {
            //             $destinationPath = public_path('uploads'); // upload path
            //             $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
            //             $fileName = time() . '.' . $extension; // renameing image
            //             $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
            //             $model->image = $fileName;
            //         }
            //     }
            // }
            
            $model->save();
            return redirect()->route('admin.rooms.index')->with('success', 'Room updated successfully.');
        } catch (\Exception $e) {
            session()->flash('sticky_error', $e->getMessage());
            return back();
        }
    }

    public function publish($id)
    {
        Rooms::where('id', $id)->update(['ispublish' => 'No']);
        return redirect()->route('admin.rooms.index');
    }

    public function unpublish($id)
    {
        try {
            $val = Rooms::where('id', $id)->update(['ispublish' => 'Yes']);
            return redirect()->route('admin.rooms.index');
        } catch (\Exception $e) {
            print_r($e->getMessage());
            die();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Rooms::where(['id' => $id])->delete();
        return back()->with('success', 'Room deleted successfully.');
    }

    
    public function active($id)
    {
        
        Rooms::where('id', $id)->update(['status' => '0']);
        return redirect()->route('admin.rooms.index');
    }


    public function inactive($id)
    {
    //   dd('Active method called with ID: ' . $id);
    Rooms::where('id', $id)->update(['status' => '1']);
        return redirect()->route('admin.rooms.index')->with('success', 'Guest marked as active.');
    }

 

}