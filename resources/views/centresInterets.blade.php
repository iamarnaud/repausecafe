@extends ('layoutInscription')
@section('title')
    <title>SeecretSpot | Centres d'intérêts</title>
@endsection

@section('content')

    <h1>Mes centres d'intérêts</h1><br><br>

    <form method="post" action="{{route('flux')}}" class="" id="form_interests">
        <!--La ligne suivante est nécesssaire sinon erreur csrf_token sur la page chargée-->
        {{ csrf_field() }}
        <div class="container">
            <div class="offset-lg-2 offset-md-2">
                <h2 class="h2-interets">QUELLE(S) REGION(S) DU MONDE ?</h2><br>
                <fieldset>
                    <div class="col-lg-12 col-xs-6">
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="afrique-nord" name="afrique-nord">
                            <label class="form-check-label" for="afrique-nord">Afrique du Nord</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="afrique-sud" name="afrique-sud">
                            <label class="form-check-label" for="afrique-sud">Afrique du Sud</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="ameriqueCentrale"
                                   name="ameriqueCentrale">
                            <label class="form-check-label" for="ameriqueCentrale">Amérique Centrale</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="amerique-nord" name="amerique-nord">
                            <label class="form-check-label" for="amerique-nord">Amérique du Nord</label>
                        </div>

                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="amerique-sud" name="amerique-sud">
                            <label class="form-check-label" for="amerique-sud">Amérique du Sud</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="asie" name="asie">
                            <label class="form-check-label" for="asie">Asie</label>
                        </div>

                    </div>
                    <div class="col-lg-12 col-xs-6">
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="asieSE" name="asieSE">
                            <label class="form-check-label" for="asieSE">Asie du Sud-Est</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="europe" name="europe">
                            <label class="form-check-label" for="europe">Europe</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="inde" name="inde">
                            <label class="form-check-label" for="inde">Inde</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="moyenO" name="moyenO">
                            <label class="form-check-label" for="moyenO">Moyen-Orient</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="oceanie" name="oceanie">
                            <label class="form-check-label" for="oceanie">Océanie</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="russie" name="russie">
                            <label class="form-check-label" for="russie">Russie</label>
                        </div>

                    </div>
                </fieldset>
                <br><br>
                <fieldset>
                    <h2 class="h2-interets"> POUR Y FAIRE QUOI ? </h2><br>

                    <div class="col-lg-12 col-xs-6">
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="archi" name="archi">
                            <label class="form-check-label" for="archi">Architecture</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="art" name="art">
                            <label class="form-check-label" for="art">Art</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="culture" name="culture">
                            <label class="form-check-label" for="culture">Culture</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="fete" name="fete">
                            <label class="form-check-label" for="fete">Fête</label>
                        </div>

                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="histoire" name="histoire">
                            <label class="form-check-label" for="histoire">Histoire</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="jardin" name="jardin">
                            <label class="form-check-label" for="jardin">Jardins</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-6">
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="pleinA" name="pleinAir">
                            <label class="form-check-label" for="pleinA">Plein Air</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="sport" name="sport">
                            <label class="form-check-label" for="sport">Sport</label>
                        </div>
                        <div class="form-check form-check-inline col-lg-3 col-xs-6">
                            <input class="form-check-input" type="checkbox" id="voyage" name="voyage">
                            <label class="form-check-label" for="voyage">Voyages</label>
                        </div>

                    </div>
                </fieldset><br><br>
                <div class="offset-3">
                    <input class="btn btn-success" type="submit" value="Valider mes Choix">
                </div>
            </div>

        </div>

    </form><br><br>


@endsection