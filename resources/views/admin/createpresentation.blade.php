@extends('adminlte::page')

@section('content')
    <h1>Create presentation</h1>
    <form action="/admin/adpresentation/create" method="post" enctype="multipart/form-data" role="form" >
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
            </div>
        </div>
    
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
      </form>
{{-- <img src="{{Storage::url('images/css.jpeg')}}" alt=""> --}}
@endsection
