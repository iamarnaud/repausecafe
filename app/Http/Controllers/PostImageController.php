<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostImageRequest;
use App\Images;
use App\Lieux;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostImageRequest $request
     * @param User $user
     * @return void
     */
    public function store(PostImageRequest $request, User $user)
    {


        $postImage = new Images();
        $postLieu = new Lieux();

        $postLieu->setAttribute('pays', $request->input('pays-share'));
        $postLieu->setAttribute('ville', $request->input('ville-share'));
        $postLieu->setAttribute('region', $request->input('region-share'));

        $postLieu->save();

        $postImage->setAttribute('id_lieu', $postLieu->id);
        $postImage->setAttribute('id_user', $user->id);
        $postImage->setAttribute('nom', $request->input('name-share'));
        $postImage->setAttribute('lien', $request->file('image-share')->getClientOriginalName());
        $postImage->setAttribute('description', $request->input('description-share'));
        $postImage->setAttribute('aime', 0);
        $postImage->setAttribute('coord_lat', 0);
        $postImage->setAttribute('coord_lon', 0);


        $postImage->save();

        Storage::put($request->file('image-share')->getClientOriginalName(), $request->file('image-share'));

        return back();
    }


    /**
     * Display the specified resource.*
     *
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
