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
                   placeholder="Rechercher"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">Rechercher
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
        </div>
    </form>
    </div><br>
    <div class="container">
        @if(isset($details))

            <h2 id="titreSearch">Resultats de Recherche pour <b> {{ $query }} </b> </h2>
        <br>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Dernier SeecretSpot posté</th>
                    <th>Ajouter en ami</th>


                </tr>
                </thead>
                <tbody>
                @foreach($details as $user)
                    <tr>
                        <td>{{$user->prenom}} {{$user->nom}}</td>
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