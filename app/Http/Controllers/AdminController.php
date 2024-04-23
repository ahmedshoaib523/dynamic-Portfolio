<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\User;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('isAdmin');
    }
    public function adminHome()
    {
        return view('admin.index');
    }

    public function logoEdit() {
        $logo_dark = Logo::where('slug', 'logo_dark')->where('tag', 'logo_fav')->first();
        $logo_light = Logo::where('slug', 'logo_light')->where('tag', 'logo_fav')->first();
        $favicon = Logo::where('slug', 'favicon')->where('tag', 'logo_fav')->first();
        return view('admin.pages.logo&fav.edit', compact('logo_dark','logo_light','favicon'))->with('title','Manage Logo & Fav');
    }

    public function logoUpdate(Request $request) {
        $token_ignore = ['_token' => '', 'logo_dark' => '', 'logo_light' => '', 'favicon' => ''];
        $post_feilds = array_diff_key($request->all(), $token_ignore);
        $files = $request->allFiles();
        foreach ($files as $key => $value) {
            $file = $value;
            $ext = $value->getClientOriginalExtension();
            $file_name = $value->getClientOriginalName();
            $file_name = substr($file_name, 0, strpos($file_name, "."));
            $name = "uploads/logo/" . $file_name . "_" . time() . '.' . $file->getClientOriginalExtension();

            $destinationPath = public_path() . '/uploads/logo/';
            $share = $value->move($destinationPath, $name);
            $update = Logo::where('slug', $key)->update(['value' => $name]);
        }
        foreach ($post_feilds as $key => $value) {
            $update = Logo::where('slug', $key)->update(['value' => $value]);
        }
        return back()->with('message', 'Record has been updated');
    }

    public function configEdit()
    {
        $config = Config::first();
        return view('admin.pages.config.config', compact('config'))->with('title', 'Manage config');
    }
    public function configUpdate(Request $request)
    {
        $config = Config::first();
        $config->email = $request->email;
        $config->address = $request->address;
        $config->phone_no = $request->phone_no;
        $config->facebook = $request->facebook;
        $config->instagram = $request->instagram;
        $config->twitter = $request->twitter;
        $config->youtube = $request->youtube;
        $config->copyright = $request->copyright;
        $config->foot_desc = $request->foot_desc;
        $config->save();
        return redirect()->route('admin.configEdit')->with('message', 'Config Updated Successfully');
    }
}
