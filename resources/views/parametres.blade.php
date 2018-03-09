@extends ('layouts.app')
@section('title')
    <title>SeecretSpot | Paramètres</title>
@endsection
@section('content')

    <div class="container">
        <div class="offset-lg-2 col-lg-8 offset-lg-2 offset-md-2 col-md-8 offset-md-2 offset-sm-2 col-sm-8 offset-sm-2">
            <h1 id="titre-inscription">Paramètres de compte</h1>
            <form method="POST" id="font-inscription" action="{{route('register')}}" enctype="multipart/form-data" class="well" role="form">
                <fieldset>
@csrf

                    <p class="form-group">
                        <label class="control-label" for="nom">Nom</label>
                        <input name="nom" id="nomComplet" class="form-control" placeholder="Entrez votre nom"
                               type="text" data-validation="custom"
                               data-validation-regexp="^([ÀàÁáÂâÃãÄäÅåÆæÇçÐðÈèÉéÊêËëÌìÍíÎîÏïÑñÒòÓóÔôÕõÖöœŒØøßÙùÚúÛûÜüÝýÞþŸÿ\sa-zA-Z-]+)$"
                               data-validation-help="Carctères autorisés : Tous sauf certains caractères spéciaux : *$µ...">
                    </p>
                    <p class="form-group">
                        <label class="control-label" for="prenom">Prénom</label>
                        <input id="prenom" class="form-control" placeholder="Entrez votre prénom" type="text"
                               data-validation="custom"
                               data-validation-regexp="^([ÀàÁáÂâÃãÄäÅåÆæÇçÐðÈèÉéÊêËëÌìÍíÎîÏïÑñÒòÓóÔôÕõÖöœŒØøßÙùÚúÛûÜüÝýÞþŸÿ\sa-zA-Z-]+)$"
                               data-validation-help="Carctères autorisés : Tous sauf certains caractères spéciaux : *$µ...">
                    </p>
                    <p class="form-group">
                        <label class="control-label" for="telephone">Téléphone</label>
                        <input id="telephone" class="form-control" placeholder="Entrez votre numéro de téléphone" name="tel" type="tel">
                    </p>
                    <p class="form-group">
                        <label class="control-label" for="date_naiss">Date de naissance</label>
                        <input id="date_naiss" class="form-control" name="date_naiss" type="date">
                    </p>
                    <p class="form-group">
                        <label class="control-label" for="genre">Vous êtes</label>
                        <select class="form-control" id="pays" name="genre" data-validation="required">
                            <option value="">Choisir...</option>
                            <option value="france">Une Femme (des années 80)</option>
                            <option value="russie">Un Homme (de cromagnon, un singe ou un poisson)</option>
                            <option value="france">Who cares..</option>
                        </select>
                    </p>
                    <p class="form-group">
                        <label class="control-label" for="description">
                            <span id="max-length-element">240</span> caractères restants - Description</label>
                        <textarea name="description" id="description" class="form-control"
                                  placeholder="Votre description"
                                  data-validation-help="Message: max 240 caractères"></textarea>
                    </p>
                    <p class="form-group">
                        <label class="control-label" for="email">E-mail</label>
                        <input class="form-control" name="email" id="email" placeholder="Votre email"
                               data-validation="email" data-validation-help="Adresse email format : mailuser@mail.com">
                        <label class="control-label" for="repeat">Confimation E-mail</label>
                        <input class="form-control" name="repeat" id="repeat" placeholder="Votre email"
                               data-validation="confirmation" data-validation-confirm="email"
                               data-validation-help="Adresse email format : mailuser@mail.com">
                    </p>
                    <p class="form-group">
                        <label class="control-label" for="pass_confirmation">Password (Au moins 8 caractères)</label>
                        <input class="form-control" type="password" id="pass_confirmation"
                               placeholder="Votre mot de passe" name="pass_confirmation" data-validation="length"
                               data-validation-length="min8"
                               data-validation-help="Carctères autorisés : Tous | votre mot de passse doit avoir 8 caractères minimum">
                        <label class="control-label" for="pass">Confirmation password</label>
                        <input class="form-control" type="password" id="pass" placeholder="Votre mot de passe"
                               name="pass" data-validation="confirmation"
                               data-validation-help="Carctères autorisés : Tous | votre mot de passse doit avoir 8 caractères minimum">
                    </p>
                </fieldset>
                    <fieldset>
                        <legend>Photo de profil</legend>
                        <div class="form-group">
                            <input type="file" name="avatar" class="form-control {{ $errors->has('avatar') ? 'is-invalid' : '' }}"  id="image"  value="{{ old('avatar') }}">
                            <!-- <input type="submit" value="Utiliser" id="bouton-message"/><!--a définir si utile ou si la photo se charge toute seule-->
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Notification</legend>
                        <div class="form-group">
                            <p>
                                <label class="control-label" for="not-mail">Notification par mail</label>
                                <input type="checkbox" name="notification" id="not-mail" data-validation-qty="min1"
                                       data-validation="checkbox_group">
                            </p>
                            <p>
                                <label class="control-label" for="not-sms">Notification par SMS</label>
                                <input type="checkbox" name="notification" id="not-sms" data-validation-qty="min1"
                                       data-validation="checkbox_group">
                            </p>
                        </div>
                        <p class="form-group">
                            <input class="btn btn-success" type="submit" value="Valider">
                            <input class="btn btn-danger" type="reset" value="Tout effacer">
                        </p>
                    </fieldset>
            </form>
        </div>
    </div>

@endsection
