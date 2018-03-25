<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class FriendListCOntroller extends Controller
{
    public function getIndex()
    {
        $not_friends = User::where('id', '!=', Auth::user()->id);
        if (Auth::user()->friends->count()) {
            $not_friends->whereNotIn('id', Auth::user()->friends->modelKeys());
        }
        $not_friends = $not_friends->get();

        return View('/home')->with('not_friends', $not_friends);
    }


    public function getAddFriend($id)
    {
        $user = User::find($id);
        Auth::user()->addFriend($user);
        $user->addFriend(Auth::user());
        return Redirect::back();
    }
    public function getRemoveFriend($id)
    {
        $user = User::find($id);
        Auth::user()->removeFriend($user);
        $user->removeFriend(Auth::user());
        return Redirect::back();
    }

}
