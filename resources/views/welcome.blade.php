@extends ('layoutInscription')
@section('title')
    <title>SeecretSpot | Bienvenue !</title>
@endsection

@section ('content')

    @if (Route::has('login'))

        @auth
            <a href="{{ url('/home') }}">Home</a>
                @else  <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8  offset-md-2 col-md-8 offset-s-2 col-s-8 offset-s-2 "
                         id="principal-block">
                        <h1 id="titreindex"><i class="fa fa-eye" aria-hidden="true"></i> SeecretSpot</h1>
                        <div class="row">
                            <aside class="col-lg-6 col-md-6 col-s-6">
                                <div class="well">

                                        <h2>Poursuivre avec</h2>
                                        <ul class="block-connexion">
                                            <li><a class="btn btn-default" href="https://fr-fr.facebook.com/"
                                                   id="bouton-fb"><i
                                                            class="fa fa-facebook-square" aria-hidden="true"></i>Facebook</a>
                                            </li>
                                            <li><a class="btn btn-default" href="https://www.instagram.com/?hl=fr"
                                                   id="bouton-inst"><i
                                                            class="fa fa-instagram" aria-hidden="true"></i>Instagram
                                                </a></li>
                                            <li><a class="btn btn-default" href="{{ route('register')}}"
                                                   id="bouton-mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>Email
                                                </a>

                                            </li>
                                        </ul>
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-s-6">
                                <div class="container">
                                    <div class="row justify-content-center">


                                        <form method="POST" action="{{ route('login') }}" class="well" id="font-index">
                                            <!--La ligne suivante est nécesssaire sinon erreur csrf_token sur la page chargée-->
                                            {{ csrf_field() }}
                                            <h2> Déjà membre ?</h2>
                                            <p class="form-group">
                                                <label class="control-label" for="email"> Email</label>

                                                <input id="email" type="email"
                                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                       name="email" value="{{ old('email') }}" required autofocus
                                                       data-validation-event="keyup" data-validation="email">

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </p>
                                            <p class="form-group ">
                                                <label for="password" class="col-form-label ">Password</label>
                                                <input id="password" type="password"
                                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                       name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </p>
                                            <p class="form-group">
                                            <div class="offset-md-2">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"
                                                               name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        Se Souvenir de moi
                                                    </label>
                                                </div>
                                            </div>
                                            </p>
                                            <p class="form-group">
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    Forgot Your Password?
                                                </a>
                                            </p>
                                            <p class="form-group">
                                                <input class="btn btn-success" type="submit" value="me connecter">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>

            </div>
        @endif
    @endauth
@endsection