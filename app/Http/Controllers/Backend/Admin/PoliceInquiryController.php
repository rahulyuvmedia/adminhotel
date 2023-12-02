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
         $model = PoliceInquiry:: orderBy('created_at', 'desc')->get();
         return view('backend.admin.policeInquiry.index', compact('model', 'keyword'));
     }

  


  

public function create(Request $request)
{
    // dd($request);
    $id = $request->input('id');

    $rooms = Rooms::where(['availability' => 'available', 'hotel_id' => Auth::id()])->where('status', '=', '1')->get();
     

    if ($rooms->isNotEmpty() && $rooms->first()->guest) { 
        
        $id = $rooms->first()->guest->id;
    }

    $model = Master::orderBy('created_at', 'asc')
        ->where('type', '=', 'BookingSource')
        ->get();

    return view('backend.admin.policeInquiry.create', compact('model', 'rooms', 'id'));
}
 

    public function store(Request $request ){

    //  dd($request);

        $request->validate([

            // 'guest_id' => 'required',
            // Add your validation rules here based on your requirements
            // 'address' => 'required',
            // 'state' => 'required',
            // 'city' => 'required',
            // 'zipCode' => 'required',
            // 'arrivedFrom' => 'required',
            // 'arrivalDate' => 'required',
            // 'passportNo' => 'required',
            // 'placeOfIssue' => 'required',
            // 'issueDate' => 'required',
            // 'expiryDate' => 'required',
            // 'visaNo' => 'required',
            // 'visaType' => 'required',
            // 'visaPlaceOfIssue' => 'required',
            // 'visaIssueDate' => 'required',
            // 'visaExpiryDate' => 'required',
            // 'employed' => 'required|in:yes,no',
            // 'guardianName' => 'required',
            // 'age' => 'required',
            // 'purposeOfvisit' => 'required',
            // 'destinationPlace' => 'required',
            // 'destinationState' => 'required',
            // 'destinationCity' => 'required',
            // 'contactNo' => 'required',
            // 'residentContact' => 'required',
            // 'mobileNo' => 'required',
            // 'description' => 'nullable',
        ]);
       
        try {
             
            $guestId = $request->input('guest_id');

            
            $policeinquiry = new Policeinquiry([
         
                'guest_id' => $guestId,
                


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
                'purposeOfvisit' => $request->input('purposeOfvisit'),
                'destinationPlace' => $request->input('destinationPlace'),
                'destinationState' => $request->input('destinationState'),
                'destinationCity' => $request->input('destinationCity'),
                'contactNo' => $request->input('contactNo'),
                'residentContact' => $request->input('residentContact'),
                'mobileNo' => $request->input('mobileNo'),
                'description' => $request->input('description'),
                
            ]);
//    dd($policeinquiry);
          
            \Log::info('Data to be stored:', $request->all());
            $policeinquiry->save();
// dd('1');


            return redirect()->route('admin.guest.index')->with('success', 'policeInquiry added successfully.');

        } catch (\Exception $e) {
            print_r( $e);
            die();
            \Log::error('Error saving data: ' . $e->getMessage());
            session()->flash('sticky_error', $e->getMessage());
            // return back();
        }
    } 


    public function show(Guest $guest)
    {
        //
    }

   
    public function edit(Request $request, $id)
    {
 
        $policeinquiry = Policeinquiry::findOrFail($id);
        $modeldata = Master::orderBy('created_at', 'asc')
            ->where('type', '=', 'BookingSource')
            ->get();
    
        return view('backend.admin.policeInquiry.edit', compact('policeinquiry', 'modeldata', 'id'));
    }
     


    public function update(Request $request, $id)
{

    // dd($request);
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
        'purposeOfvisit' => 'required',
        
        'destinationPlace' => 'required',
        'destinationState' => 'required',
        'destinationCity' => 'required',
        'contactNo' => 'required',
        'residentContact' => 'required',
        'mobileNo' => 'required',
        'description' => 'nullable',
    ]);

    try {
        
        $model = Policeinquiry::find($id);
 
        $model->address = $request->address;
        $model->state = $request->state;
        $model->city = $request->city;
        $model->zipCode = $request->zipCode;
        $model->arrivedFrom = $request->arrivedFrom;
        $model->arrivalDate = $request->arrivalDate;
        $model->passportNo = $request->passportNo;
        $model->placeOfIssue = $request->placeOfIssue;
        $model->issueDate = $request->issueDate;
        $model->expiryDate = $request->expiryDate;
        $model->visaNo = $request->visaNo;
        $model->visaType = $request->visaType;
        $model->visaPlaceOfIssue = $request->visaPlaceOfIssue;
        $model->visaIssueDate = $request->visaIssueDate;
        $model->visaExpiryDate = $request->visaExpiryDate;
        $model->employed = $request->employed;
        $model->guardianName = $request->guardianName;
        $model->age = $request->age;
        $model->purposeOfvisit = $request->purposeOfvisit;

        $model->destinationPlace = $request->destinationPlace;
        $model->destinationState = $request->destinationState;
        $model->destinationCity = $request->destinationCity;
        $model->contactNo = $request->contactNo;
        $model->residentContact = $request->residentContact;
        $model->mobileNo = $request->mobileNo;
        $model->description = $request->description;
        // dd($request->purposeOfvisit);
        $model->save(); 
        return redirect()->route('admin.policeInquiry.index')->with('success', 'Guest updated successfully.');
        // return back()->with('success', 'Guest updated successfully.');
        // return redirect()->back()->with('success', 'Successfully Updated');

    }  catch (\Exception $e) {
        session()->flash('error', $e->getMessage());
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