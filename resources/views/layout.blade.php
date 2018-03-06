<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Bienvenue sur la plateforme SEECRETSPOT, partagez les lieux encore inconnus"/>
    <meta name="keyword" content="reseau social,secret,spot,lieu,insolite,sport,paysage"/>
    <meta name="robot" content="index,follow"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Condensed" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script src="{{asset('plug/MagnificPopup/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('plug/AmaranJS/dist/js/jquery.amaran.js')}}"></script>
    <script src="{{asset('plug/tapmodo-Jcrop-1902fbc/js/jquery.Jcrop.min.js')}}"></script>

    <script src="{{asset('plug/vide/jquery.vide.js')}}"></script>
        @yield('title')
</head>
<body>
<nav class="nav">
    <div class="col-xs-8" id="logo_title"><a href={{route('flux.get')}} id="retour-flux"><i class="fa fa-eye" aria-hidden="true"></i><span class="hidden-xs"> SeecretSpot</span></a></div>
    <div class="col-xs-4 col align-self-end">
        <ul id="menu_connect">
            <li class="menu_share"><a href={{route('partager.get')}} id="menu_lien_share"><span class="hidden-sm hidden-xs" id="menu_share_letter">Partager </span><i class="fa fa-camera-retro" aria-hidden="true" id="menu_share_icon"></i></a></li>
            <li class="menu_icon"><a href={{route('user_profil.get')}} class="menu_lien"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            <li class="menu_icon"><a href={{route('chat.get')}} class="menu_lien"><i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
            <li class="menu_icon"><a href={{route('geoloc.get')}} class="menu_lien"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
            <li class="menu_icon"><a href={{route('parametres.get')}} class="menu_lien"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
            <li class="menu_icon"><form id="logout-form" action="{{ route('logout') }}" method="POST" ><a href={{route('signout')}} class="menu_lien"><i class="fa fa-sign-out"></i></a></form></li>
        </ul>
    </div>
</nav>


@yield ('content')


<footer class="mastfoot mt-auto">
    <div class="inner">
        <p><a href="{{asset('mentionsLegales')}}">Mentions Légales</a> | Plan du site | Contact</p>
    </div>
</footer>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/sessionStorage.js')}}"></script>

</body>
</html>