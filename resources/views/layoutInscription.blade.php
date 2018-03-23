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
    <script src="{{asset('js/videScript.js')}}"></script>
    <script src="{{asset('plug/vide/jquery.vide.js')}}"></script>

    <script src="{{asset('js/sessionStorage.js')}}"></script>

    @yield('title')
</head>

<body @yield('body')>
<header>
<nav class="nav">
    <div class="col-xs-8" id="logo_title">
        <i class="fa fa-eye " aria-hidden="true"></i><span class="hidden-xs"> SeecretSpot</span>
    </div>
</nav>
</header>
<br>
@yield ('content')

<footer class="mastfoot mt-auto">
    <div class="inner">
        <p><a href="{{asset('mentionsLegales')}}">Mentions Légales</a> | Plan du site | Contact</p>
    </div>
</footer>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>