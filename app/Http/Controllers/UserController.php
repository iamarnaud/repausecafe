<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
class UserController extends Controller
{
    public function profile(){
        return view('monProfil', array('monProfil' => Auth::User()));
    }

    public function avatar(Request $request){ //handle the user upload avatar
        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/uploads/avatars/' . $filename));
            $user = Auth::User();
            $user->avatar = $filename;
            $user->save();
        }
        return view('monProfil', array('monProfil' => Auth::User()));
    }
}