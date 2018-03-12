<?php

namespace App\Http\Controllers;

use App\User;
use App\Images;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()


    {

        $users = User::take(10)->get();
        $posts = Images::take(15)->get();


        return view('home', ['posts' => $posts, 'users' => $users]);
    }


}
