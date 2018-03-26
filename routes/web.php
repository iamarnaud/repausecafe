<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//-------------Route de la Navbar du header---------------------


//User connected redirige vers le flux (concerne logo du header)

//Regroupement des routes pour l'utilisateur connecté
Route::middleware(['auth', 'web'])->group( function(){
    //Redirige vers monProfil.blade (icone profil)
    Route::get('profil', function(){
        return view('monProfil');
    })->name('user_profil.get');


    Route::get('/home', 'HomeController@index')->name('home');
    //Redirige vers parametres.blade (icone parametre)
    Route::get('parametre', function(){
        return view('parametres');
    })->name('parametres.get');


    //Redirige vers geoloc.blade (icone geoloc)
    Route::get('geoloc', function(){
        return view('geoloc');
    })->name('geoloc.get');

    Route::any('/home', 'FriendListCOntroller@getIndex');
  Route::any('/search', 'SearchController@getSearch');
    Route::get('/monProfil', 'UserController@profile')->name('monProfil');
    Route::post('/monProfil', 'UserController@avatar');
////redirige page recherche
    Route::any ( '/search', 'SearchController@index')->name('search');
    Route::get('/home{id}', 'FriendListCOntroller@getRemoveFriend')->name('friendRemove');
    Route::post('/home{id}', 'FriendListCOntroller@getAddFriend')->name('friendAdd');
    Route::get('/monProfil{id}', 'FriendListCOntroller@getRemoveFriend')->name('friendRemoveProf');
  Route::get('/search{id}', 'FriendListCOntroller@getRemoveFriend')->name('friendRemoveSearch');
 Route::post('/search{id}', 'FriendListCOntroller@getAddFriend')->name('friendAddSearch');
//pb de routes pour accéder à l'ajout d'amis sur search
});


// ------------- End Route de la Navbar du header---------------------

