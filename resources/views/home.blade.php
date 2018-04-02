@extends('layouts.app')
@section('title')
    <title>SeecretSpot | {{ Auth::User()->prenom }} </title>
@endsection
@section('content')
    <div class="container ">
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
        <br>
        <button type="button" class="btn" id="btn-share"><span class="hidden-sm hidden-xs" id="menu_share_letter">Partager </span>
            <i class="fa fa-camera-retro" aria-hidden="true" id="menu_share_icon"></i></button>
        <div class="share col-8 offset-2">
            <form method="POST" action="#"
                  enctype="multipart/form-data" id="form-share">
                @csrf
                <fieldset class="border">
                    <legend>Partage ton Spot!</legend>
                    <div class="form-group">
                        <label for="name-share">Nom </label>
                        <input class="form-control" type="text" name="nom" id="name-share"
                               value="{{old('name-share')}}">
                        @if(isset($errors))
                            <p class="error">{{$errors->first('nom')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image-share">Mon Spot ( photos ) :</label>
                        <input class="form-control" type="file" name="lien" id="image-share"
                               value="{{old('image-share')}}">
                        @if(isset($errors))
                            <p class="error">{{$errors->first('lien')}}</p>
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



    <div class="container">

        <div class="row offset-10 col-md-2 col-sm-hidden">
            <h4 class="subheader">Mes Amis</h4>
            <table style="width:80%">
                <thead>
                </thead>
                <tbody>
                @foreach (Auth::user()->friends as $friend)
                    <tr>
                        <td><img src="/uploads/avatars/{{$friend->avatar }}" style="width:50px; height:50px; float:right; border-radius:50%; margin-left:25px;" alt="image de profil"></td>
                        <td><a href="{{route('profilVisit', $friend->id )}}">{{ $friend->getFullName() }}</a></td>

                        <td>
                            <form action="{{route('friendRemove', ['id'=> $friend->id])}}" method="get">@csrf
                                <button class="btn btn-outline-danger"><i class="fa fa-user-times"></i></button>
                            </form>
                        </td>
                    </tr>
                    <br>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <br>
    <div class="row offset-9 col-md-4 col-sm-hidden">
        <h4 class="subheader align-right">Spotters à découvrir</h4>
        <table style="width:80%">
            <thead>

            </thead>
            <tbody>
            @foreach ($not_friends as $friend)
                <tr>
                    <td><img src="/uploads/avatars/{{$friend->avatar }}" style="width:50px; height:50px; float:right; border-radius:50%; margin-left:25px;" alt="image profil"></td>
                    <td><a href="{{route('profilVisit', $friend->id )}}">{{ $friend->getFullName() }}</a></td>

                    <td>
                        <form action="{{ route('friendAdd',['id'=> $friend->id]) }}" method="post">
                            <button class="btn btn-outline-success">@csrf<i class="fa fa-user-plus"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

    </div>

@endsection
