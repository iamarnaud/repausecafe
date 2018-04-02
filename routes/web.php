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
Route::middleware(['auth', 'web'])->group(function () {
    //Redirige vers monProfil.blade (icone profil)
    Route::get('profil', function () {
        return view('profil');
    })->name('user_profil.get');


    Route::get('/home', 'HomeController@index')->name('home');
    //Redirige vers parametres.blade (icone parametre)
    Route::get('parametre', function () {
        return view('parametres');
    })->name('parametres.get');


    //Redirige vers geoloc.blade (icone geoloc)
    Route::get('geoloc', function () {
        return view('geoloc');
    })->name('geoloc.get');

    Route::any('/home', 'FriendListCOntroller@getIndex');
    Route::any('/search', 'SearchController@getSearch')->name('search');
    Route::get('/profil', 'UserController@profile')->name('profil');
    Route::post('/profil', 'UserController@avatar');
////redirige page recherche

    Route::get('/home{id}', 'FriendListCOntroller@getRemoveFriend')->name('friendRemove');
    Route::post('/home{id}', 'FriendListCOntroller@getAddFriend')->name('friendAdd');
    Route::get('/profil{id}', 'FriendListCOntroller@getRemoveFriend')->name('friendRemoveProf');
    Route::get('/search{id}', 'FriendListCOntroller@getRemoveFriend')->name('friendRemoveSearch');
    Route::post('/search{id}', 'FriendListCOntroller@getAddFriend')->name('friendAddSearch');

    Route::get('/visite/{id}', 'ProfilController@index')->name('profilVisit');

    Route::get('/visite{id}', 'FriendListCOntroller@getRemoveFriend')->name('friendRemoveVisit');
    Route::post('/visite{id}', 'FriendListCOntroller@getAddFriend')->name('friendAddVisit');
});


// ------------- End Route de la Navbar du header---------------------

