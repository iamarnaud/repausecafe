@extends ('layouts.app')
@section('title')
    <title>SeecretSpot | Profil NOM UTILISATEUR</title>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <br>

                <img src="/uploads/avatars/{{Auth::User()->avatar }}"
                     style="width:150px; height:150px; float:right; border-radius:50%; margin-left:25px;">
                <h2>{{ Auth::User()->prenom }}'s Profile</h2>
                <form enctype="multipart/form-data" action="{{route('monProfil')}}" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection