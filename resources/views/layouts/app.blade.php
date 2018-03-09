<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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
    <script src="{{asset('plug/vide/jquery.vide.js')}}"></script>
    @yield('title')
</head>
<body style="font-family: 'Roboto', sans-serif;">

<nav class="nav">
    <div class="col-xs-8" id="logo_title"><a href={{route('home')}} id="retour-flux"><i class="fa fa-eye"
                                                                                        aria-hidden="true"></i>
            <span class="hidden-xs"> SeecretSpot</span></a></div>
    <div class="col-xs-4 col align-self-end">
        <ul id="menu_connect">
            {{--Si l'utilisateur n'est pas authentifié on aura ceci :--}}
            @guest
                <li><a class="nav-link" style="color:white; font-weight:bold; " href="{{ route('login') }}">Se
                        connecter</a></li>
                <li><a class="nav-link" style="color:white; font-weight:bold; " href="{{ route('register') }}">Nouvel
                        utilisateur ?</a></li>
                {{--Si l'utilisateur est connecté on aura la barre nav complète--}}
            @else
                    <li class="menu_icon" > <img src="/uploads/avatars/{{ Auth::user()->avatar}}"
                                 style="width:35px; height:35px; border-radius:50%"> </li>
                    <li class="menu_icon prenom_connect">{{Auth::user()->prenom}}</li>
                    <li class="menu_icon prenom_connect">{{Auth::user()->nom}}</li>
                    <li class="menu_icon"><a href={{route('monProfil')}} class="menu_lien"><i
                                    class="fa fa-user"></i></a>
                    </li>

                    <li class="menu_icon"><a href={{route('chat.get')}} class="menu_lien"><i class="fa fa-comments-o"
                                                                                             aria-hidden="true"></i></a>
                    </li>
                    <li class="menu_icon"><a href={{route('geoloc.get')}} class="menu_lien"><i class="fa fa-globe"
                                                                                               aria-hidden="true"></i></a>
                    </li>
                    <li class="menu_icon"><a href={{route('parametres.get')}} class="menu_lien"><i class="fa fa-cog"
                                                                                                   aria-hidden="true"></i></a>
                    </li>

                    <li class="menu_icon"><a class="menu_lien" href="{{route('logout')}}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"><i
                                    class="fa fa-sign-out"></i>{{ Auth::user()->name }} </a></li>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

            @endguest
        </ul>
    </div>
</nav>


@yield('content')


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
