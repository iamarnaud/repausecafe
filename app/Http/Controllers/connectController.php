<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connectController extends Controller
{
    public function connected(){
        return view('flux');
    }
    public function disconnected(){
        return view('controllerSign/index');
    }
}
