@extends('layouts.app')
@section('title')
    <title>SeecretSpot | NOM UTILISATEUR </title>
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
        <form action="/search" method="POST" role="search">
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

    <div class="row justify-content-center offset-2">

        <div class="col-md-8">
            <?php
            $posts = App\Images::take(15)->get()
            ?>

            @foreach ($posts as $post)
                <div class="row justify-content-center">
                    <div class="d-flex flex-column ">
                        <h2>{{ $post->nom }} {{ $post->id }}</h2>
                        <figure class="p-2 figure">
                            <img src="http://via.placeholder.com/450x450" class="figure-img img-fluid rounded"
                                 alt="{{ $post->nom }}">
                            <figcaption class="figure-caption">{{ $post->description }}</figcaption>
                            <p>Posté par <strong>
                                    {{$post->user->nom}}
                                </strong>le {{$post->created_at}}</p>
                        </figure>

                        <div class="row">
                            <div class="col l12 s12 center-align">
                                @if (session('status'))
                                    <div class="alert alert-info text-center" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                        </div>

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
                                          method="POST" class="form-comment" data-post="commmentBox{{ $post->id }}">
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

                <?php $users = App\User::take(10)->get();?>

                @foreach ($users as $user)
                    <?php  echo "<tr><td>" . $user->nom . "</td><td>" . $online = $user->en_ligne == '1' ? 'En Ligne' : 'Déconnecté' . "</td></tr>";?>

                @endforeach


            </table>

        </div>
    </div>
@endsection
