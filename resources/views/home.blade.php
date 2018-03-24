@extends('layouts.app')
@section('title')
    <title>SeecretSpot | {{ Auth::User()->prenom }} </title>
@endsection
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}

                    </div>
                @endif

            </div>


        </div>
        <form action="{{route('search')}}" method="POST" role="search">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" name="query"
                       placeholder="Rechercher"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">Rechercher
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
            </div>
        </form>
    </div>

    <br>
    <div class="container text-center">
        <button type="button" class="btn" id="btn-share">      <span class="hidden-sm hidden-xs" id="menu_share_letter">Partager </span>
            <i class="fa fa-camera-retro" aria-hidden="true" id="menu_share_icon"></i></button>
        <div class="share col-8 offset-2">
            <form method="POST" action="{{route('postImagePost', ["user" =>Auth::user()->id])}}"
                  enctype="multipart/form-data" id="form-share">
                @csrf
                <fieldset class="border">
                    <legend>Partage ton Spot !</legend>
                    <div class="form-group">
                        <label for="name-share">Nom: </label>
                        <input class="form-control" type="text" name="name-share" id="name-share"
                               value="{{old('name-share')}}">
                        @if(isset($errors))
                            <p class="error">{{$errors->first('name-share')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image-share">Mon Spot ( photos ) :</label>
                        <input class="form-control" type="file" name="image-share" id="image-share"
                               value="{{old('image-share')}}">
                        @if(isset($errors))
                            <p class="error">{{$errors->first('image-share')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description-share">Description : </label>
                        <textarea class="form-control" name="description-share" id="description-share"
                                  placeholder="Description du spot..."></textarea>
                        @if(isset($errors))
                            <p class="error">{{$errors->first('description-share')}}</p>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="btn-sub-share"></label>
                        <input class="btn btn-secondary" type="submit" id="btn-sub-share" value="ENVOYER">

                        <label for="btn-cancel-share"></label>
                        <input class="btn btn-secondary" type="reset" id="btn-cancel-share" value="EFFACER">
                    </div>

                </fieldset>
            </form>
        </div>
    </div>

    <div class="row justify-content-center offset-2">

        <div class="col-md-8">


            @foreach ($posts as $post)
                <div class="row justify-content-center">
                    <div class="d-flex flex-column ">
                        <h2>{{ $post->nom }} {{ $post->id }}</h2>
                        <figure class="p-2 figure">
                            <img src="http://via.placeholder.com/650x450" class="figure-img img-fluid rounded"
                                 alt="{{ $post->nom }}">
                            <figcaption class="figure-caption">{{ $post->description }}</figcaption>
                            <p>Posté par <strong>
                                    {{$post->user->nom}}
                                </strong>le {{$post->created_at}}</p>
                        </figure>


                        <div class="p-2 d-flex justify-content-between bg-light">
                            <p>J'aime : {{ $post->aime }}</p>
                            <button type="button" class="btn btn-primary" id="btn-comment{{$post->id}}"
                                    data-toggle="modal"
                                    data-target="#commmentBox{{$post->id}}">
                                Commenter
                            </button>
                        </div>
                        @foreach($post->comments as $comment)
                            <div class=" flex justify-content-between bg-info" id="comment{{ $post->id }}">
                                <p>{{ $comment->commentaire }}</p>
                                <p>posté le : {{ $comment->created_at }} par {{Auth::user()->prenom }}</p>
                                <hr>
                            </div>

                        @endforeach
                        <div class="modal fade" id="commmentBox{{$post->id}}" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Poster votre
                                            commentaire</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>


                                    <form action="{{ route('commentPost',["image"=>$post->id , "user" =>Auth::user()->id] ) }}"
                                          method="POST" class="form-comment" data-post="{{ $post->id }}">
                                        @csrf

                                        <div class="modal-body">
                                            <label for="comment_area"></label>
                                            <textarea id="comment_area" name="comment_area" maxlength="250"
                                                      cols="40" rows="8"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Annuler
                                            </button>
                                            <input type="submit" id="snd_com" value="Envoyer"
                                                   class="btn btn-primary"/>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-4">
            <table class="table table-striped">
                <tr>
                    <td>Utilisateur</td>
                    <td>Status</td>
                </tr>


                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ $user->nom }}
                        </td>
                        <td>
                            {{ $online = $user->en_ligne == '1' ? 'En Ligne' : 'Déconnecté' }}
                        </td>
                    </tr>
                @endforeach


            </table>

        </div>
    </div>
@endsection
