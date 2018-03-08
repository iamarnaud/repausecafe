@extends('layouts.app')
@section('title')
    <title>SeecretSpot | RESULTATS DE RECHERCHE </title>
@endsection
@section('content')
    <br>
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
                        <td><a href="" style="color: black">{{$user->prenom}} {{$user->nom}}</a></td>
                        {{--ligne suivante revoit la description liée à l'user trouvé--}}
                        <td>{{$user->description}} </td>
                        <td><button class="btn btn-outline-success"><i class="fa fa-user-plus"></i></button> <button class="btn btn-outline-danger"><i class="fa fa-user-times"></i></button></td>

                        {{--<td>@foreach()--}}
                        {{--@endforeach--}}
                        {{--</td>--}}
                        {{--<td>@foreach()--}}
                            {{--@endforeach--}}
                        {{--</td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    @endsection