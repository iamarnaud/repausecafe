@extends('layoutInscription')

@section('title')
    <title>SeecretSpot | Inscription</title>
@endsection
@section('content')
    <div class="container">
        <div class="offset-lg-2 col-lg-8 offset-lg-2 offset-md-2 col-md-8 offset-md-2 offset-sm-2 col-sm-8 offset-sm-2">
            <h1 id="titre-inscription">Inscription</h1><br>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="nom" class="col-md-4 col-form-label text-md-right">Nom</label>

                    <div class="col-md-6">
                        <input id="nom" type="text" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" name="nom" value="{{ old('nom') }}"  required autofocus>

                        @if ($errors->has('nom'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prenom" class="col-md-4 col-form-label text-md-right">Prénom</label>

                    <div class="col-md-6">
                        <input id="prenom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required >

                        @if ($errors->has('prenom'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tel" class="col-md-4 col-form-label text-md-right">Téléphone</label>

                    <div class="col-md-6">
                        <input id="tel" type="tel" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}"  value="{{ old('tel') }}" name="tel" >
                        @if ($errors->has('tel'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date_naiss" class="col-md-4 col-form-label text-md-right">Date de naissance</label>

                    <div class="col-md-6">
                        <input id="date_naiss" type="date" class="form-control{{ $errors->has('date_naiss') ? ' is-invalid' : '' }}"  value="{{ old('date_naiss') }}" name="date_naiss" >
                        @if ($errors->has('date_naiss'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date_naiss') }}</strong>
                                    </span>
                        @endif

                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-md-4 col-form-label text-md-right" for="genre">Vous êtes</label>
                    <div class="col-md-6">

                        <select class="form-control{{ $errors->has('genre') ? ' is-invalid' : '' }}" id="genre" name="genre"   >
                            <option value="">Choisir...</option>
                            <option value="femme">Une Femme (des années 80)</option>
                            <option value="homme">Un Homme (de cromagnon, un singe ou un poisson)</option>
                            <option value="<whoCares">Who cares..</option>
                        </select>
                        @if ($errors->has('genre'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('genre') }}</strong>
                                    </span>
                        @endif

                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                    <div class="col-md-6">
                        <textarea  id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"  name="description"   placeholder="Votre description">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="avatar" class="col-md-4 col-form-label text-md-right">Choisissez votre photo de profil</label>

                    <div class="col-md-6">
                        <input id="avatar" type="file"  class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}"  value="{{ old('avatar') }} "name="avatar"    >
                        @if ($errors->has('avatar'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                        @endif

                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Addresse E-Mail </label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required >

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmez votre mot de passe</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required >
                    </div>
                </div>

                <div class="form-group">
                    <p>
                        <label class="control-label" for="not-sms">Notification par SMS</label>
                        <input type="checkbox" name="notification" id="not-sms" value="1" data-validation-qty="min1" data-validation="checkbox_group">

                    </p>
                    <p>
                        <label class="control-label" for="not-mail">Notification par mail</label>
                        <input type="checkbox" name="notification" id="not-mail" value="1" data-validation-qty="min1" data-validation="checkbox_group">

                    </p>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-5">
                        <button type="submit" class="btn btn-success">
                            S'enregistrer
                        </button>
                        <input class="btn btn-danger" type="reset" value="Tout effacer">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>



@endsection


