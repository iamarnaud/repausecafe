<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;


class SearchController extends Controller
{
    public function index(){

            $q = Input::get ( 'query' );
            $user = User::where ( 'nom', 'LIKE', '%' . $q . '%' )->orWhere ( 'prenom', 'LIKE', '%' . $q . '%' )->get ();
            if (count ( $user ) > 0)
                return view ( 'search' )->withDetails ( $user )->withQuery ( $q );
            else
                return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
        }


}
