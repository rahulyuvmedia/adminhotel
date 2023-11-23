<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Role;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

use View;
use DB;

class UserController extends Controller
{
   /**
    * Display a listing of the resource.
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      
       $adminuser = Admin::all();
      return view('backend.admin.user.index',compact('adminuser'));
   }

   public function getAll()
   {
      $can_edit = $can_delete = '';
      if (!auth()->user()->can('user-edit')) {
         $can_edit = "style='display:none;'";
      }
      if (!auth()->user()->can('user-delete')) {
         $can_delete = "style='display:none;'";
      }
      $users = User::all();
      return Datatables::of($users)
        ->addColumn('file_path', function ($users) {
           return "<img src='" . asset($users->file_path) . "' class='img-thumbnail' width='50px'>";
        })
        ->addColumn('role', function ($user) {
           return '<label class="badge badge-secondary">' . ucfirst($user->roles->pluck('name')->implode(' , ')) . '</label>';
        })
        ->addColumn('status', function ($users) {
           return $users->status ? '<label class="badge badge-success">Active</label>' : '<label class="badge badge-danger">Inactive</label>';
        })
        ->addColumn('action', function ($user) use ($can_edit, $can_delete) {
           $html = '<div class="btn-group">';
           $html .= '<a data-toggle="tooltip" ' . $can_edit . '  id="' . $user->id . '" class="btn btn-xs btn-info mr-1 edit" title="Edit"><i class="fa fa-edit"></i> </a>';
           $html .= '<a data-toggle="tooltip" ' . $can_delete . ' id="' . $user->id . '" class="btn btn-xs btn-danger mr-1 delete" title="Delete"><i class="fa fa-trash"></i> </a>';
           $html .= '</div>';
           return $html;
        })
        ->rawColumns(['action', 'file_path', 'status', 'role'])
        ->addIndexColumn()
        ->make(true);
   }


   /**
    * Show the form for creating a new resource.
    * @return \Illuminate\Http\Response
    */
   public function create(Request $request)
   {
        
       
         $haspermision = auth()->user()->can('user-create');
         if ($haspermision) {
            $roles = Role::all();
            


             return view('backend.admin.user.create', compact('roles'));


             
            
         } else {
            abort(403, 'Sorry, you are not authorized to access the page');
         }
       
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    *
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
      //   dd($request);
        // Uncomment the following line for debugging purposes
       
         // $validator = Validator::make($request->all(), [
            $request->validate([
               'name' => 'required',
               'email' => 'required|email|unique:users,email',
               'password' => 'required|confirmed',
               'business_name' => 'required',
               'mobile' => 'required',
               'address' => 'required',
           ], [
               'name.required' => 'The name field is required.',
               'email.required' => 'The email field is required.',
               'email.email' => 'Please enter a valid email address.',
               'email.unique' => 'This email address is already taken.',
               'password.required' => 'The password field is required.',
               'password.confirmed' => 'The password confirmation does not match.',
               'business_name.required' => 'The business name field is required.',
               'mobile.required' => 'The mobile field is required.',
               'address.required' => 'The address field is required.',
           ]);
           


   //      $request->validate([
   //       'name' => 'required',
   //       'email' => 'required|email|unique:users,email',
   //       'password' => 'required',
   //       'password_confirmation' => 'required|same:password',
   //   ], [
   //       'email.required' => 'The email address is required.',
   //       'email.email' => 'Please enter a valid email address.',
   //       'email.unique' => 'This email address is already taken.',
   //       'password_confirmation.required' => 'The confirmation password is required.',
   //       'password_confirmation.same' => 'The confirmation password must match the password.',
   //   ]);




      //   if ($validator->fails()) {
      //       return back()
      //           ->withErrors($validator)
      //           ->withInput();
      //   }

        $file_path = "assets/images/users/default.png";

        DB::beginTransaction();
        try {
            $user = new Admin();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->address = $request->input('address');
            $user->mobile = $request->input('mobile');
            $user->password = Hash::make($request->password);
            $user->business_name = $request->input('business_name');
             
            if ($request->hasFile('idproff')) {
               $extension = strtolower($request->file('idproff')->getClientOriginalExtension());
               if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'svg' || $extension == 'webp') {
                   if ($request->file('idproff')->isValid()) {
                       $destinationPath = public_path('uploads'); // upload path
                       $extension = $request->file('idproff')->getClientOriginalExtension(); // getting image extension
                       $fileName = time() . '.' . $extension; // renameing image
                       $request->file('idproff')->move($destinationPath, $fileName); // uploading file to given path
                       $user->idproff = $fileName;
                   }
               }
           }
            $user->save();

            DB::commit();
            return back()->with('success', 'User created successfully');

  
        }  catch (\Exception $e) {
         Log::error('Error creating user: ' . $e->getMessage());
         DB::rollBack(); // Rollback changes in case of an exception
         return back()->with('error', 'Error: ' . $e->getMessage());
     }
    }
 

   /**
    * Display the specified resource.
    *
    * @param  int $id
    *
    * @return \Illuminate\Http\Response
    */
   public function show($id, Request $request)
   {
      if ($request->ajax()) {
         $user = User::findOrFail($id);
         $view = View::make('backend.admin.user.view', compact('user'))->render();
         return response()->json(['html' => $view]);
      } else {
         return response()->json(['status' => 'false', 'message' => "Access only ajax request"]);
      }
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int $id
    *
    * @return \Illuminate\Http\Response
    */
   public function edit($id, Request $request)
   {
      if ($request->ajax()) {
         $haspermision = auth()->user()->can('user-edit');
         if ($haspermision) {
            $user = User::with('roles')->where('id', $id)->first();
            $roles = Role::all(); //Get all roles
            $view = View::make('backend.admin.user.edit', compact('user', 'roles'))->render();
            return response()->json(['html' => $view]);
         } else {
            abort(403, 'Sorry, you are not authorized to access the page');
         }
      } else {
         return response()->json(['status' => 'false', 'message' => "Access only ajax request"]);
      }
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @param  int $id
    *
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, User $user)
   {
      if ($request->ajax()) {

          
         $rules = [
           'name' => 'required',
           'email' => 'required|email|unique:users,email,' . $user->id,
           'photo' => 'image|max:2024|mimes:jpeg,jpg,png'
         ];

         $validator = Validator::make($request->all(), $rules);
         if ($validator->fails()) {
            return response()->json([
              'type' => 'error',
              'errors' => $validator->getMessageBag()->toArray()
            ]);
         } else {

            $file_path = $request->input('SelectedFileName');;

            if ($request->hasFile('photo')) {
               if ($request->file('photo')->isValid()) {
                  $destinationPath = public_path('assets/images/users/');
                  $extension = $request->file('photo')->getClientOriginalExtension(); // getting image extension
                  $fileName = time() . '.' . $extension;
                  $file_path = 'assets/images/users/' . $fileName;
                  $request->file('photo')->move($destinationPath, $fileName);
               } else {
                  return response()->json([
                    'type' => 'error',
                    'message' => "<div class='alert alert-warning'>Please! File is not valid</div>"
                  ]);
               }
            }

            DB::beginTransaction();
            try {
               $user->name = $request->input('name');
               $user->email = $request->input('email');
               $user->status = $request->input('status');
               $user->status = "ADMIN";
               $user->password = Hash::make($request->password);
               $user->file_path = $file_path;
               $user->save();

               $roles = $request->input('roles');
               if (isset($roles)) {
                  $user->roles()->sync($roles);  //If one or more role is selected associate user to roles
               } else {
                  $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
               }

               DB::commit();
               return response()->json(['type' => 'success', 'message' => "Successfully Updated"]);

            } catch (\Exception $e) {
               DB::rollback();
               return response()->json(['type' => 'error', 'message' => $e->getMessage()]);
            }

         }
      } else {
         return response()->json(['status' => 'false', 'message' => "Access only ajax request"]);
      }
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int $id
    *
    * @return \Illuminate\Http\Response
    */
   public function destroy($id, Request $request)
   {
      if ($request->ajax()) {
         $haspermision = auth()->user()->can('user-delete');
         if ($haspermision) {
            $user = User::findOrFail($id); //Get user with specified id
            $user->delete();
            return response()->json(['type' => 'success', 'message' => "Successfully Deleted"]);
         } else {
            abort(403, 'Sorry, you are not authorized to access the page');
         }
      } else {
         return response()->json(['status' => 'false', 'message' => "Access only ajax request"]);
      }
   }


      
   public function active($id)
   {
       
       Admin::where('id', $id)->update(['status' => '0']);
      return redirect()->back();
   }


   public function inactive($id)
   {
   //   dd('Active method called with ID: ' . $id);
   Admin::where('id', $id)->update(['status' => '1']);
      return redirect()->back();
   }

}