<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    public function profileEdit($id=null)
    {
        if($id == null){
            $id = Auth::user()->id;
        }
        $profile = User::find($id);
        return view('admin.pages.profile.profile', compact('profile'))->with('title', 'Manage Profile');
    }
    public function profileUpdate(Request $request)
    {
        $profile = User::find($request->user_id);

        $extension = array("jpeg", "jpg", "png", "jfif");
        if (isset($request->image)) {
            $file = $request->image;
            $ext = $request->image->getClientOriginalExtension();
            if (in_array($ext, $extension)) {
                $file_name = $request->image->getClientOriginalName();
                $file_name = substr($file_name, 0, strpos($file_name, "."));
                $name = "uploads/profile/" . $file_name . "_" . time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path() . '/uploads/profile/';
                $share = $request->image->move($destinationPath, $name);
                $image = $name;
                $profile->image = $image;
            } else {
                $warning = "This File type is not Supported!";
                return redirect()->back()->with('error', "Error Code: " . $warning);
            }
        }

        $profile->name = $request->name;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->save();
        return redirect()->route('admin.profileEdit')->with('message', 'Profile Updated Successfully');
    }
    public function PasswordEdit()
    {
        $passUpdate = User::find(Auth::user()->id);
        return view('admin.pages.updatepassword', compact('passUpdate'))->with('title', 'Update Password');
    }

    public function PasswordUppdate(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'current_password' => 'required',
            'newpassword' => 'required|min:6',
            'cnfpassword' => 'required_with:newpassword|same:newpassword|min:6'
        ]);
        $auth = Auth::user();
        if (!Hash::check($request->get('current_password'), $auth->password)) {
            return back()->with('error', "Current Password is Invalid");
        }

        if (strcmp($request->get('current_password'), $request->newpassword) == 0) {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
        if ($validated->fails()) {
            return redirect()->back()->with('validationerror', $validated->errors()->all());
        }
        $password = Hash::make($request->newpassword);
        $passUpdate =  User::find($auth->id);
        $passUpdate->password = $password;
        $passUpdate->save();
        return redirect()->back()->with('message', 'Password Updated Successfully');
    }
}
