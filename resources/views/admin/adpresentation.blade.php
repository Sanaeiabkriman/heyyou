@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Modification de la partie présentation image et description</h1>
@stop

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
{{-- {{dd($donnees)}} --}}

@foreach ($donnees as $item)
<form method="post" action="/read" enctype="multipart/form-data">
    @csrf
    <div class=" ">
        <div class="card " style="width: 50rem;">
            {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
            <div class="card-body">
                <h5 class="card-title">Titre : <br> {{$item->titre}}</h5>
                <p class="card-text"> Description: <br> {{$item->description}}</p>
            </div>
        </div>
    </div>
</form>
<a href="/admin/adpresentation/edit/{{$item->id}}" type="submit" class="btn btn-primary">Edit</a>

@endforeach


@stop
