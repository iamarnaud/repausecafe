@extends('layouts.app')
@section('title')
    <title>SeecretSpot | NOM UTILISATEUR </title>
    @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>


        <form action="/search" method="POST" role="search">
           @csrf
            <div class="input-group">
                <input type="text" class="form-control" name="query"
                       placeholder="Rechercher"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">Rechercher
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
            </div>
        </form>

</div>

@endsection
