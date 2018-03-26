@extends ('layouts.app')
@section('title')
    <title>SeecretSpot | Profil {{ Auth::User()->prenom }}</title>
@endsection

@section('content')
    <div class="container">
        <div class="row col-md-10 col-xs-hidden">
            <h2 id="nom_profil">{{ Auth::User()->prenom }}'s Profile</h2>

        </div>
    </div>
    <div class="container ">
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


    <div class="row ">

        <div class="offset-md-3 col-5  ">
            2 of 3 (wider)
        </div>
        <div class="col justify-content-end ">
            <form enctype="multipart/form-data" action="{{route('monProfil')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="offset-md-3 hidden-sm-down">
                        <img src="/uploads/avatars/{{Auth::User()->avatar }}"
                             style="width:150px; height:150px; float:right; border-radius:50%; margin-left:25px;">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="offset-md-4 hidden-sm-down">
                        <label for="file" class="label-file">Choisir une image</label>
                        <input id="file" class="input-file" name="avatar" type="file">

                    </div>
                </div>
                <div class="offset-md-5 hidden-sm-down">
                    <div class="row" align="right">
                        <input type="submit" class="pull-right btn btn-sm btn-secondary">
                    </div>
                </div>
            </form>

        <br>
            <br>
        <div class="row">
            <div class="offset-md-4 hidden-sm-down">
                <h2 class="subheader">Mes Amis</h2>
                <table style="width:100%">
                    <thead>
                    </thead>
                    <tbody>
                    @foreach (Auth::user()->friends as $friend)
                        <tr>
                            <td><img src="/uploads/avatars/{{$friend->avatar }}" style="width:50px; height:50px; float:right; border-radius:50%; margin-left:25px;"></td>
                            <td>{{ $friend->getFullName() }}</td>
                            <td>
                                <form action="{{route('friendRemoveProf', ['id'=> $friend->id])}}" method="get">@csrf
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
    </div>
    </div>




@endsection