@extends('adminlte::page')

@section('content')
<form action="/admin/adoffer/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box-body">
        {{-- font --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Font</label>
            <input type="text" name="font" class="form-control" value="{{$modif->font}}">
        </div>
        {{-- titre --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Titre</label>
            <input type="text" name="titre" class="form-control" value="{{$modif->titre}}">
        </div>
        {{-- texte --}}
        <div class="form-group">
            <label>texte</label>
            <textarea class="form-control" rows="3" name="texte">{{$modif->texte}}</textarea>
        </div>
        <!-- /.bouton submit -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
</form>

@stop
