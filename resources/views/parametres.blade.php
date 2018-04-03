@extends ('layouts.app')
@section('title')
    <title>SeecretSpot | Paramètres</title>
@endsection
@section('content')
    <div class="container">
        <div class="offset-lg-2 col-lg-8 offset-lg-2 offset-md-2 col-md-8 offset-md-2 offset-sm-2 col-sm-8 offset-sm-2">
            <h1 id="titre-inscription">Modifier mes informations personnelles</h1><br>
            <form method="POST" action="{{ route('updateUser') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="nom" class="col-md-4 col-form-label text-md-right">Nom</label>

                    <div class="col-md-6">
                        <input id="nom" type="text" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}"
                               name="nom" value="{{ Auth::user() ->nom}}" required autofocus>

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
                        <input id="prenom" type="text"
                               class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom"
                               value="{{ Auth::user() ->prenom}}" required>

                        @if ($errors->has('prenom'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                    <div class="col-md-6">
                        <textarea id="description"
                                  class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                  name="description" placeholder="Votre description"
                                  required>{{ Auth::user() ->description}}</textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Addresse E-Mail </label>

                    <div class="col-md-6">
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ Auth::user() ->email}}" required>

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
                        <input id="password" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmez votre mot de
                        passe</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <br>
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
