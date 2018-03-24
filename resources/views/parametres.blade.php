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
                        <input name="nom" id="nomComplet" class="form-control" placeholder="{{ Auth::User()->nom }}"
                               type="text" data-validation="custom"
                               data-validation-regexp="^([ÀàÁáÂâÃãÄäÅåÆæÇçÐðÈèÉéÊêËëÌìÍíÎîÏïÑñÒòÓóÔôÕõÖöœŒØøßÙùÚúÛûÜüÝýÞþŸÿ\sa-zA-Z-]+)$"
                               data-validation-help="Carctères autorisés : Tous sauf certains caractères spéciaux : *$µ...">
                    </p>
                    <p class="form-group">
                        <label class="control-label" for="prenom">Prénom</label>
                        <input id="prenom" class="form-control" placeholder="{{ Auth::User()->prenom }}" type="text"
                               data-validation="custom"
                               data-validation-regexp="^([ÀàÁáÂâÃãÄäÅåÆæÇçÐðÈèÉéÊêËëÌìÍíÎîÏïÑñÒòÓóÔôÕõÖöœŒØøßÙùÚúÛûÜüÝýÞþŸÿ\sa-zA-Z-]+)$"
                               data-validation-help="Carctères autorisés : Tous sauf certains caractères spéciaux : *$µ...">
                    </p>

                    <p class="form-group">
                        <label class="control-label" for="date_naiss">Date de naissance</label>
                        <input id="date_naiss" class="form-control" placeholder="{{ Auth::User()->date_naiss }}" name="date_naiss" >
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
                                  placeholder="{{ Auth::User()->description }}"
                                  data-validation-help="Message: max 240 caractères"></textarea>
                    </p>
                    <p class="form-group">
                        <label class="control-label" for="email">E-mail</label>
                        <input class="form-control" name="email" id="email" placeholder="{{ Auth::User()->email }}"
                               data-validation="email" data-validation-help="Adresse email format : mailuser@mail.com">
                        <label class="control-label" for="repeat">Confimation E-mail</label>
                        <input class="form-control" name="repeat" id="repeat" placeholder="{{ Auth::User()->email }}"
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



                        <p class="form-group">
                            <input class="btn btn-success" type="submit" value="Valider">
                            <input class="btn btn-danger" type="reset" value="Tout effacer">
                        </p>

            </form>
        </div>
    </div>

@endsection
