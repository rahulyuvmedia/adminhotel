<?php

namespace App\Http\Controllers\Backend\Admin;
use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function index(Request $request)
     {
         $keyword = $request->input('keyword');
         $model = Guest::orderBy('created_at', 'desc')->get();
 
         return view('backend.admin.guest.index', compact('model', 'keyword'));
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
        return view('backend.admin.guest.create');
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
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'roomNumber' => 'required',
            'address' => 'required',

        ]);
        try {
            $model = new Guest();
           
            $model->name = $request->name;
            $model->email = $request->email;
            $model->phoneNumber = $request->phoneNumber;
            $model->roomNumber = $request->roomNumber;
            $model->address = $request->address;
         
            
            if ($request->hasFile('image')) {
                $extension = strtolower($request->file('image')->getClientOriginalExtension());
                if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'svg' || $extension == 'webp') {
                    if ($request->file('image')->isValid()) {
                        $destinationPath = public_path('uploads'); // upload path
                        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
                        $fileName = time() . '.' . $extension; // renameing image
                        $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
                        $model->image = $fileName;
                    }
                }
            }
                       $model->save();
            return redirect()->route('admin.guest.index')->with('success', 'Guest added successfully.');
        } catch (\Exception $e) {
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
        $model = Guest::where(['id' => $id])->first();
        return view('backend.admin.guest.edit', compact('model'));
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
            'phoneNumber' => 'required',
            'roomNumber' => 'required',
            'address' => 'required',

            
            // 'description' => 'required',
        ]);
        try {
            $model = Guest::find($id);

             $model->name = $request->name;
            $model->email = $request->email;
            $model->phoneNumber = $request->phoneNumber;
            $model->roomNumber = $request->roomNumber;
            $model->address = $request->address;
            
            if ($request->hasFile('image')) {
                $extension = strtolower($request->file('image')->getClientOriginalExtension());
                if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'svg' || $extension == 'webp') {
                    if ($request->file('image')->isValid()) {
                        $destinationPath = public_path('uploads'); // upload path
                        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
                        $fileName = time() . '.' . $extension; // renameing image
                        $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
                        $model->image = $fileName;
                    }
                }
            }
            
            $model->save();
            return redirect()->route('admin.guest.index')->with('success', 'Guest updated successfully.');
        } catch (\Exception $e) {
            session()->flash('sticky_error', $e->getMessage());
            return back();
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
        
        Guest::where('id', $id)->update(['status' => '0']);
        return redirect()->route('admin.guest.index');
    }


    public function inactive($id)
    {
    //   dd('Active method called with ID: ' . $id);
    Guest::where('id', $id)->update(['status' => '1']);
        return redirect()->route('admin.guest.index');
    }

 

}