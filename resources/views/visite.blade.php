@extends ('layouts.app')
@section('title')
    <title>SeecretSpot | {{$user->prenom}} {{$user->nom}}</title>
@endsection
@section('content')


        <div class="container">
            <div class="row col-md-10 col-xs-hidden">
                <img src="src=/uploads/avatars/{{$user->avatar }}" style="width:50px; height:50px; float:right; border-radius:50%; margin-left:25px;" alt="image de profil" > <h2 id="nom_profil"> <strong>{{$user->prenom}}</strong>
                      {{--@if(Auth::user()::has('amitieExiste(User $id)')->get())--}}
                       <form action="{{route('friendRemoveVisit', ['id'=> $user->id])}}" method="get">@csrf
                           <button class="btn btn-outline-danger"><i class="fa fa-user-times"></i></button>
                       </form>
                          {{--@else--}}
                       <form action="{{ route('friendAddVisit',['id'=> $user->id]) }}" method="post">
                           <button class="btn btn-outline-success">@csrf<i class="fa fa-user-plus"></i></button>
                       </form>
                  {{--@endif--}}
                  </h2>
            </div>
        </div>

    @endsection