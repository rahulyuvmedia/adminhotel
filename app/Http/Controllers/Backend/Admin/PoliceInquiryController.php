<?php

namespace App\Http\Controllers\Backend\Admin;
use App\Http\Controllers\Controller;
use App\Models\Guest;
use App\Models\Rooms;
use App\Models\Reservation;
use App\Models\Master;
use App\Models\Policeinquiry;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoliceInquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function index(Request $request)
     {
         $keyword = $request->input('keyword');
         $model = PoliceInquiry::orderBy('created_at', 'desc')->get();
         return view('backend.admin.policeInquiry.index', compact('model', 'keyword'));
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
        
        $model = Master::orderBy('created_at', 'asc')
            ->where('type', '=', 'BookingSource')
            ->get();
        return view('backend.admin.policeInquiry.create',compact('model','rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){

        //   dd($request);
        $request->validate([
            // Add your validation rules here based on your requirements
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zipCode' => 'required',
            'arrivedFrom' => 'required',
            'arrivalDate' => 'required',
            'passportNo' => 'required',
            'placeOfIssue' => 'required',
            'issueDate' => 'required',
            'expiryDate' => 'required',
            'visaNo' => 'required',
            'visaType' => 'required',
            'visaPlaceOfIssue' => 'required',
            'visaIssueDate' => 'required',
            'visaExpiryDate' => 'required',
            'employed' => 'required|in:yes,no',
            'guardianName' => 'required',
            'age' => 'required',
            'purposeOfVisit' => 'required',
            'destinationPlace' => 'required',
            'destinationState' => 'required',
            'destinationCity' => 'required',
            'contactNo' => 'required',
            'residentContact' => 'required',
            'mobileNo' => 'required',
            'description' => 'nullable',
        ]);
        try {

            $policeinquiry = new Policeinquiry([
                'address' => $request->input('address'),
                'state' => $request->input('state'),
                'city' => $request->input('city'),
                'zipCode' => $request->input('zipCode'),
                'arrivedFrom' => $request->input('arrivedFrom'),
                'arrivalDate' => $request->input('arrivalDate'),
                'passportNo' => $request->input('passportNo'),
                'placeOfIssue' => $request->input('placeOfIssue'),
                'issueDate' => $request->input('issueDate'),
                'expiryDate' => $request->input('expiryDate'),
                'visaNo' => $request->input('visaNo'),
                'visaType' => $request->input('visaType'),
                'visaPlaceOfIssue' => $request->input('visaPlaceOfIssue'),
                'visaIssueDate' => $request->input('visaIssueDate'),
                'visaExpiryDate' => $request->input('visaExpiryDate'),
                'employed' => $request->input('employed'),
                'guardianName' => $request->input('guardianName'),
                'age' => $request->input('age'),
                'purposeOfVisit' => $request->input('purposeOfVisit'),
                'destinationPlace' => $request->input('destinationPlace'),
                'destinationState' => $request->input('destinationState'),
                'destinationCity' => $request->input('destinationCity'),
                'contactNo' => $request->input('contactNo'),
                'residentContact' => $request->input('residentContact'),
                'mobileNo' => $request->input('mobileNo'),
                'description' => $request->input('description'),
            ]);
    
            
            $policeinquiry->save();



            return redirect()->route('admin.policeInquiry.index')->with('success', 'policeInquiry added successfully.');

        } catch (\Exception $e) {
            dd($e);
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
        $policeinquiry = Policeinquiry::findOrFail($id);
        $modeldata = Master::orderBy('created_at', 'asc')
            ->where('type', '=', 'BookingSource')
            ->get();
    
        return view('backend.admin.policeInquiry.edit', compact('policeinquiry', 'modeldata'));
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
    // Validate the incoming request data
    $request->validate([
        'address' => 'required',
        'state' => 'required',
        'city' => 'required',
        'zipCode' => 'required',
        'arrivedFrom' => 'required',
        'arrivalDate' => 'required',
        'passportNo' => 'required',
        'placeOfIssue' => 'required',
        'issueDate' => 'required',
        'expiryDate' => 'required',
        'visaNo' => 'required',
        'visaType' => 'required',
        'visaPlaceOfIssue' => 'required',
        'visaIssueDate' => 'required',
        'visaExpiryDate' => 'required',
        'employed' => 'required|in:yes,no',
        'guardianName' => 'required',
        'age' => 'required',
        'purposeOfVisit' => 'required',
        'destinationPlace' => 'required',
        'destinationState' => 'required',
        'destinationCity' => 'required',
        'contactNo' => 'required',
        'residentContact' => 'required',
        'mobileNo' => 'required',
        'description' => 'nullable',
    ]);

    try {
        // Find the Policeinquiry model instance by ID
        $policeinquiry = Policeinquiry::findOrFail($id);

        // Update the fields with the new values from the request
        $policeinquiry->update([
            'address' => $request->input('address'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'zipCode' => $request->input('zipCode'),
            'arrivedFrom' => $request->input('arrivedFrom'),
            'arrivalDate' => $request->input('arrivalDate'),
            'passportNo' => $request->input('passportNo'),
            'placeOfIssue' => $request->input('placeOfIssue'),
            'issueDate' => $request->input('issueDate'),
            'expiryDate' => $request->input('expiryDate'),
            'visaNo' => $request->input('visaNo'),
            'visaType' => $request->input('visaType'),
            'visaPlaceOfIssue' => $request->input('visaPlaceOfIssue'),
            'visaIssueDate' => $request->input('visaIssueDate'),
            'visaExpiryDate' => $request->input('visaExpiryDate'),
            'employed' => $request->input('employed'),
            'guardianName' => $request->input('guardianName'),
            'age' => $request->input('age'),
            'purposeOfVisit' => $request->input('purposeOfVisit'),
            'destinationPlace' => $request->input('destinationPlace'),
            'destinationState' => $request->input('destinationState'),
            'destinationCity' => $request->input('destinationCity'),
            'contactNo' => $request->input('contactNo'),
            'residentContact' => $request->input('residentContact'),
            'mobileNo' => $request->input('mobileNo'),
            'description' => $request->input('description'),
        ]);

        // Redirect to the index route with a success message
        return redirect()->route('admin.policeInquiry.index')->with('success', 'Guest updated successfully.');
    } catch (\Exception $e) {
        // Handle exceptions, flash an error message, and redirect back with input
        session()->flash('sticky_error', $e->getMessage());
        return back()->withInput();
    }
}

    
    public function publish($id)
    {
        Guest::where('id', $id)->update(['ispublish' => 'No']);
        return redirect()->route('admin.policeInquiry.index');
    }

    public function unpublish($id)
    {
        try {
            $val = Guest::where('id', $id)->update(['ispublish' => 'Yes']);
            return redirect()->route('admin.policeInquiry.index');
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
        return redirect()->route('admin.policeInquiry.index');
    }


    public function inactive($id)
    {
        $guest = Guest::findOrFail($id);
    
    Guest::where('id', $id)->update(['status' => '1']);
        return redirect()->route('admin.policeInquiry.index')
        ->with('success', 'Guest marked as active.');
    }

 

}