@extends('layouts.app')
@section('title')
    <title>SeecretSpot | RESULTATS DE RECHERCHE </title>
@endsection
@section('content')

    <div class="container">
    <form action="/search" method="POST" role="search">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="query"
                   placeholder="Rechercher"> <span class="input-group-btn" autofocus>
            <button type="submit" class="btn btn-default">Rechercher
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
        </div>
    </form>
    </div><br>
    {{--<div class="container">{{$pasdeResultats}}</div>--}}
    <div class="container">
        @if(isset($details))

            <h2 id="titreSearch">Resultats de Recherche pour  {{ $query }}  </h2>
        <br>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Ajouter en ami</th>

                </tr>
                </thead>
                <tbody>
                @foreach($details as $user)
                    <tr>
                        {{-- a travailler pour que seulement le vert s'affiche si pas amis et messsage amis plus icone rouge supprimer
                        si dejà amis--}}
                       <td> <img src="/uploads/avatars/{{$user->avatar }}" style="width:50px; height:50px; float:right; border-radius:50%; margin-left:25px;"></td>
                        <td><a href="/profilVisiteur" style="color: black">{{$user->prenom}} {{$user->nom}}</a></td>
                        {{--ligne suivante revoit la description liée à l'user trouvé--}}
                        <td>{{$user->description}} </td>
                        <td><button class="btn btn-outline-success"><i class="fa fa-user-plus"></i></button> <button class="btn btn-outline-danger"><i class="fa fa-user-times"></i></button></td>


                    </tr>
                @endforeach
                </tbody>
            </table>
            {{--pour afficher le message d'erreur--}}
        @else <h2 class="titreSearch">{{$message}}</h2>
        @endif
    </div>
    @endsection