@extends('layouts.app')
@section('title')
    <title>SeecretSpot | RESULTATS DE RECHERCHE </title>
@endsection
@section('content')

    <div class="container">
        <form action="{{route('search')}}" method="POST" role="search">
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

    <div class="container">
        @if(isset($details))
            <h2 class="titreSearch">Resultats de Recherche pour {{ $query }}  </h2>
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

                @foreach (Auth::user()->friends as $friend)
                    <tr>
                        <td><img src="/uploads/avatars/{{$friend->avatar }}"
                                 style="width:50px; height:50px; float:right; border-radius:50%; margin-left:25px;"
                                 alt="image profil">
                        </td>
                        <td><a href="{{route('profilID', $friend->id )}}">{{ $friend->getFullName() }}</a></td>
                        <td>{{$friend->description}} </td>

                        <td>
                            <form action="{{route('friendRemove', ['id'=> $friend->id])}}" method="get">@csrf
                                <button class="btn btn-outline-danger"><i class="fa fa-user-times"></i></button>
                            </form>
                        </td>
                    </tr>
                    <br>
                @endforeach

                @foreach ($not_friends as $friend)
                    <tr>
                        <td><img src="/uploads/avatars/{{$friend->avatar }}"
                                 style="width:50px; height:50px; float:right; border-radius:50%; margin-left:25px;"
                                 alt="image profil">
                        </td>
                        <td><a href="{{route('profilVisit', $friend->id )}}">{{ $friend->getFullName() }}</a></td>
                        <td>{{$friend->description}} </td>

                        <td>
                            <form action="{{ route('friendAdd',['id'=> $friend->id]) }}" method="post">
                                <button class="btn btn-outline-success">@csrf<i class="fa fa-user-plus"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else <h2 class="titreSearch">{{$message}}</h2>
        @endif
    </div>
@endsection