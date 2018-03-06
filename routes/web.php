<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//-------------Route de la Navbar du header---------------------
//User connected redirige vers le flux (concerne logo du header)
Route::get('home', 'connectController@connected')->name('home.get');

//User disconnected redirige vers index (concerne logo du header)
Route::get('home', 'connectController@disconnected')->name('home.get');


//Regroupement des routes pour l'utilisateur connecté
Route::group(['prefix'=>'user'], function(){
    //Redirige vers monProfil.blade (icone profil)
    Route::get('profile', function(){
        return view('monProfil');
    })->name('user_profil.get');
    //Redirige vers monProfil.blade (icone partager)
    Route::get('partager', function(){
        return view('monProfil');
    })->name('partager.get');
    //Redirige vers parametres.blade (icone parametre)
    Route::get('parametre', function(){
        return view('parametres');
    })->name('parametres.get');
    //Redirige vers chat.blade (icone message)
    Route::get('chat', function(){
        return view('chat');
    })->name('chat.get');
    //Redirige vers geoloc.blade (icone geoloc)
    Route::get('geoloc', function(){
        return view('geoloc');
    })->name('geoloc.get');

});
// ------------- End Route de la Navbar du header---------------------

// routes vers pages amis et membres
Route::get('amis', function(){
    return view('amis');
})->name('ami');
Route::get('membres', function(){
    return view('membres');
})->name('membres');
