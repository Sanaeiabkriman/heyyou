@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<h1>Modification de la partie présentation image et description</h1>
@stop

@section('content')
{{-- <a href="/admin/adpresentation/create" class="btn btn-primary">Nouveau</a> --}}
<h1>Create presentation</h1>
<form action="/admin/adpresentation/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box-body">
        <div class="form-group">
            {{-- titre --}}
            <label for="exampleInputEmail1">Titre</label>
            <input type="text" name="titre" class="form-control">
        </div>
        {{-- description --}}
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" rows="3" name="description"></textarea>
        </div>
        {{-- image --}}
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="validatedCustomFile">
            <label class="custom-file-label" for="validatedCustomFile">Choisissez une image...</label>
            <button type="submit" class="btn btn-primary">ajouter</button>
        </div>
    </div>
</form>
<br>
{{-- <img src="{{Storage::url('images/css.jpeg')}}" alt=""> --}}

@foreach ($donnees as $item)
<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            About me
        </h4>
        {{-- box de modif --}}
        <div class="media" style=" padding: 15px 20px; margin-top: 0;">
            <div class="media-body">
                <div class="clearfix">
                    {{-- Titre --}}
                    <div style="padding: 1px 10px;" class="bg-gray disabled color-palette">
                        <h4 style="margin-top: 0">Titre</h4>
                    </div>
                    <p>{{$item->titre}}</p>
                    {{-- Description --}}
                    <div style="padding: 1px 10px;" class="bg-gray disabled color-palette">
                        <h4 style="margin-top: 0">Description</h4>
                    </div>
                    <p>{{$item->description}}</p>
                    {{-- Image --}}
                    <div style="padding: 1px 10px" class="bg-gray disabled color-palette">
                        <h4 style="margin-top: 0">Image</h4>
                    </div>
                    <img style=" height:30%;width:30%" src={{Storage::url($item->image)}} alt="">
                    {{-- bouton --}}
                    <p class="">
                        <a href="/admin/adpresentation/editpresentation/{{$item->id}}" type="submit" class="btn btn-primary">Editer</a>
                    </p>
                        <form action="/admin/adpresentation/delete/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-dark" type="submit">supprimer</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach


@stop
