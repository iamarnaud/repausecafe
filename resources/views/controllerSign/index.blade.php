@extends ('layoutInscription')
@section('title')
    <title>SeecretSpot | Bienvenue !</title>
@endsection

@section ('content')

    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8  offset-md-2 col-md-8 offset-s-2 col-s-8 offset-s-2 " id="principal-block">
                <h1 id="titreindex"><i class="fa fa-eye" aria-hidden="true"></i> SeecretSpot</h1>
                <div class="row">
                    <aside class="col-lg-6 col-md-6 col-s-6">
                        <div class="well">
                            <h2>Poursuivre avec</h2>
                            <ul class="block-connexion">
                                <li><a class="btn btn-default" href="https://fr-fr.facebook.com/" id="bouton-fb"><i
                                                class="fa fa-facebook-square" aria-hidden="true"></i>Facebook</a></li>
                                <li><a class="btn btn-default" href="https://www.instagram.com/?hl=fr" id="bouton-inst"><i
                                                class="fa fa-instagram" aria-hidden="true"></i>Instagram </a></li>
                                <li><a class="btn btn-default" href="{{ route('inscription')}}"
                                       id="bouton-mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>Email </a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="col-lg-6 col-md-6 col-s-6">
                        <form method="post" action="{{ route('flux')}}" class="well" id="font-index">
                            <!--La ligne suivante est nécesssaire sinon erreur csrf_token sur la page chargée-->
                            {{ csrf_field() }}
                            <h2> Déjà membre ?</h2>
                            <p class="form-group">
                                <label class="control-label" for="utilisateur"> Pseudo</label>
                                <input class="form-control" name="pseudo" id="utilisateur" type="text"
                                       data-validation-event="keyup" data-validation="length"
                                       data-validation-length="min3" />
                                {{ $errors->first('pseudo') }}
                            </p>
                            <p class="form-group">
                                <label class="control-label" for="pass_confirmation">Mot de passe</label>
                                <input class="form-control" id="pass_confirmation" name="password"
                                       type="password" data-validation-event="keyup" data-validation="length"
                                       data-validation-length="min8"/>
                                    {{ $errors->first('password') }}
                                <!-- mettre dans le .js validateOnEvent : true,  pour le keyup-->
                            </p>
                            <p class="form-group">
                                <input class="btn btn-success" type="submit" value="me connecter">
                            </p>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>

@endsection
