@extends ('layouts.app')
@section('title')
    <title>SeecretSpot | {{$user->prenom}} {{$user->nom}}</title>
@endsection
@section('content')


    <div class="container">
        <div class="row col-md-10 col-xs-hidden">
            <div><img src="src=/uploads/avatars/{{$user->avatar }}"
                      style="width:50px; height:50px; float:right; border-radius:50%; margin-left:25px;"
                      alt="image de profil"></div>
            <div><h2 id="nom_profil"><strong>{{$user->prenom}} {{$user->nom}} </strong></h2></div>
            <div>
                {{--utilisation de forelse empty pour aficher le bouton vert si non amis et rouge si amis--}}
                @forelse(Auth::user()->friends as $friend)
                    <form action="{{route('friendRemoveVisit', ['id'=> $friend->id])}}" method="get">@csrf
                        <button class="btn btn-outline-danger"><i class="fa fa-user-times"></i></button>
                    </form>
                @empty
                    <form action="{{ route('friendAddVisit',['id'=> $user->id]) }}" method="post">
                        <button class="btn btn-outline-success">@csrf<i class="fa fa-user-plus"></i></button>
                    </form>
                @endforelse
            </div>

        </div>
    </div>

@endsection