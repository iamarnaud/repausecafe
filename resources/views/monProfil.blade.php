@extends ('layouts.app')
@section('title')
    <title>SeecretSpot | Profil {{ Auth::User()->prenom }}</title>
@endsection

@section('content')
    <div class="container">
        <div class="row col-md-10 col-xs-hidden">
                <h2 id="nom_profil">{{ Auth::User()->prenom }}s Profile'</h2>

        </div>
    </div>
    <div class="container ">
        <button type="button" class="btn" id="btn-share">      <span class="hidden-sm hidden-xs" id="menu_share_letter">Partager </span>
            <i class="fa fa-camera-retro" aria-hidden="true" id="menu_share_icon"></i></button>
        <div class="share col-8 offset-2">
            <form method="POST" action="{{route('postImagePost', ["user" =>Auth::user()->id])}}"
                  enctype="multipart/form-data" id="form-share">
                @csrf
                <fieldset class="border">
                    <legend>Partage ton Spot!</legend>
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


        <div class="row">

            <div class="offset-md-3 col-5">
                2 of 3 (wider)
            </div>
            <div class="col">
                <form enctype="multipart/form-data" action="{{route('monProfil')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="offset-3">
                <img src="/uploads/avatars/{{Auth::User()->avatar }}" style="width:150px; height:150px; float:right; border-radius:50%; margin-left:25px;">
                    </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="offset-4">
                            <label for="file" class="label-file">Choisir une image</label>
                            <input id="file" class="input-file" name="avatar"  type="file">

                    </div></div>
                    <div class="offset-5">
                    <div class="row" align="right">
                    <input type="submit" class="pull-right btn btn-sm btn-secondary">
                    </div></div>
                </form>
            </div>
        </div>
    </div>
@endsection