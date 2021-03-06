<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
class UserController extends Controller
{
    public function profile(){
        return view('profil', array('profil' => Auth::User()));
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
        return view('profil', array('profil' => Auth::User()));
    }
    public function updateUser(Request $request){
        $user = Auth::user();

        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email =$request->input('email');
        $user->description = $request->input('description');


        if ( ! $request->input('password') == '')
        {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();


        return view('parametres')->with('message', 'Votre profil a été mis à jour!');

    }


}