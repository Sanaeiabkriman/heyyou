@extends('adminlte::page')

@section('content')
<form action="/admin/adpresentation/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form" >
    @csrf
    <div class="box-body">
      <div class="form-group">
        {{-- titre --}}
        <label for="exampleInputEmail1">Titre</label>
        <input type="text" name="titre" class="form-control" value="{{$modif->titre}}">
      </div>
        {{-- description --}}
      <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" rows="3" name="description">{{$modif->description}}</textarea>
      </div>
        {{-- image --}}
      <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input type="file" id="exampleInputFile">
      </div>
    </div>

    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

@stop

