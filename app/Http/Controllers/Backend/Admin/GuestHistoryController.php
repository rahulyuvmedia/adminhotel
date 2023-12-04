<?php

namespace App\Http\Controllers\Backend\Admin;
use App\Http\Controllers\Controller;
use App\Models\Guest;
use App\Models\Rooms;
use App\Models\Reservation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function index(Request $request)
     {
         $keyword = $request->input('keyword');
         $model = Guest::with('rooms')->where(['hotel_id' => Auth::id()])->orderBy('created_at', 'desc')->get();
         return view('backend.admin.guestHistory.index', compact('model', 'keyword'));
     }


    // public function index()
    // {

    //     $model = Guest::orderby('created_at', 'desc')->get();

    //     return view('backend.admin.guest.index', compact('model'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Rooms::where(['availability'=>'available','hotel_id'=>Auth::id()])->where('status','=','1')->get();
        return view('backend.admin.guest.create',compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'check_out' => 'required',
            'check_in' => 'required',
            'roomNumber' => 'required|exists:rooms,id',
        ]);
        try {

            $model = new Guest();
            $model->name = $request->name;
            $model->email = $request->email;
            $model->mobile = $request->mobile;
            $model->address = $request->address;
            $model->hotel_id = Auth::id();
            
            if ($request->hasFile('idproff')) {
                $extension = strtolower($request->file('idproff')->getClientOriginalExtension());
                if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'svg' || $extension == 'webp') {
                    if ($request->file('idproff')->isValid()) {
                        $destinationPath = public_path('uploads'); // upload path
                        $extension = $request->file('idproff')->getClientOriginalExtension(); // getting image extension
                        $fileName = time() . '.' . $extension; // renameing image
                        $request->file('idproff')->move($destinationPath, $fileName); // uploading file to given path
                        $model->idproff = $fileName;
                    }
                }
            }
                            
                    if($model->save()){
                        $reservation = new Reservation();
                        $reservation->guest_id = $model->id;
                        $reservation->room_id =$request->roomNumber;
                        $reservation->check_in = $request->input('check_in');
                        $reservation->check_out = $request->input('check_out');
                        
                        if($reservation->save()){
                            Rooms::where('id', $request->roomNumber)->update(['availability' => 'booked']);
                        }

                    }
            return redirect()->route('admin.guest.index')->with('success', 'Guest added successfully.');
        } catch (\Exception $e) {
            print_r($e);
            die;
            session()->flash('sticky_error', $e->getMessage());
            return back();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $model = Guest::with(['reservations.room'])->find($id);

    // Check if $model is not null
    if (!$model) {
        // Handle the case where Guest with the given ID is not found
        abort(404);
    }

    $reservation = $model->reservations;

    // Check if $reservation is not null
    if ($reservation) {
        $roomId = $reservation->isNotEmpty() ? $reservation->first()->room->id : null;
        $model->rooms = $roomId;
    } else {
        $model->rooms = null; // Set rooms to null when reservations are null
    }

    return view('backend.admin.guestHistory.edit', compact('model'));
}

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'check_in' => 'nullable|date',
            'check_out' => 'nullable|date',
        ]);
    
        try {
            // Find the guest record
            $model = Guest::find($id);
            // Update guest information
            $model->name = $request->name;
            $model->email = $request->email;
            $model->mobile = $request->mobile;
            $model->address = $request->address;
            if ($request->hasFile('idproff')) {
                $extension = strtolower($request->file('idproff')->getClientOriginalExtension());
                if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'svg' || $extension == 'webp') {
                    if ($request->file('idproff')->isValid()) {
                        $destinationPath = public_path('uploads'); // upload path
                        $extension = $request->file('idproff')->getClientOriginalExtension(); // getting image extension
                        $fileName = time() . '.' . $extension; // renameing image
                        $request->file('idproff')->move($destinationPath, $fileName); // uploading file to given path
                        $model->idproff = $fileName;
                    }
                }
            }
    
            // Save the guest record
            $model->save();
            // Find the corresponding reservation record
            $reservation = Reservation::where('guest_id', $id)->update(['check_in'=>$request->check_in,"check_out"=>$request->check_out]);
            return redirect()->back()->with('success', 'Successfully Updated');
        } catch (\Exception $e) {
            session()->flash('sticky_error', $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    
    public function publish($id)
    {
        Guest::where('id', $id)->update(['ispublish' => 'No']);
        return redirect()->route('admin.guest.index');
    }

    public function unpublish($id)
    {
        try {
            $val = Guest::where('id', $id)->update(['ispublish' => 'Yes']);
            return redirect()->route('admin.guest.index');
        } catch (\Exception $e) {
            print_r($e->getMessage());
            die();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Guest::where(['id' => $id])->delete();
        return back()->with('success', 'Guest deleted successfully.');
    }

    
    public function active($id)
    {
        
        $guest = Guest::findOrFail($id);

        // Update guest status
        $guest->status = '0';
        $guest->save();

        $rooms = Rooms::where('hotel_id', $guest->hotel_id)->get();
        foreach ($rooms as $room) {
            $room->availability = 'available';
            $room->save();
        }

        $reservations = Reservation::where('guest_id', $guest->id)->get();
        foreach ($reservations as $reservation) {
            $reservation->status = 'cancel';
            $reservation->save();
        }
        
        Guest::where('id', $id)->update(['status' => '0']);
        return redirect()->route('admin.guest.index');
    }


    public function inactive($id)
    {
        $guest = Guest::findOrFail($id);
    
    Guest::where('id', $id)->update(['status' => '1']);
        return redirect()->route('admin.guest.index')
        ->with('success', 'Guest marked as active.');
    }

 

}