<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//pour récupérer la valeur de l'input du champ recherche
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class SearchController extends Controller
{
    //fonction qui agit quand le search button est cliqué/function qui sert pour la route
    public function index(){
            // on place l input (champ de recherche qui a pour name query dasn
        //une variable que l'on réutilise par la suite
            $query = Input::get ( 'query' );
            //cherche dans la table user le nom avec l'operateur LIKE
            $user = User::where ( 'nom', 'LIKE', '%' . $query . '%' )->orWhere ( 'prenom', 'LIKE', '%' . $query . '%' )->get ();

            //s'il y a un resultat on a en retour la page search avec les resultats
            if (count ( $user ) > 0 )
                //withDetails withMessage methodes magiques auxquelles on accède avec
                //$details et $message
                return view ( 'search' )->withDetails ( $user )->withQuery ( $query );
            else // s'il n'y a pas de résultat, la phrase s'affiche sous la barre de recherche
                return view ( 'search' )->withMessage ( 'Humm.. aucun résultats trouvés cette recherche...' );
        }

    public function getSearch()
    {
        $not_friends = User::where('id', '!=', Auth::user()->id);
        if (Auth::user()->friends->count()) {
            $not_friends->whereNotIn('id', Auth::user()->friends->modelKeys());
        }
        $not_friends = $not_friends->get();

        return View('search')->with('not_friends', $not_friends);
    }
}
