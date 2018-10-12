@extends('adminlte::page')

@section('content')

<h4 style="background-color:#3c8dbc; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
       MODIFICATION DES COMPETENCES
</h4>
<div class="row">

    @foreach ($elem as $item)
    <form method="post" action="/adoffer/read" enctype="multipart/form-data">
        @csrf
        <div class="col-md-3 col-sm-6 col-xs-12">
                <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                        {{$item->titre}}
                 </h4>
            <div class="info-box">
                <div class="info-box col-md-3 col-sm-6 col-xs-12">
                    <span class="info-box-text"><span class="info-box-number">Font : </span> {{$item->font}}</span>
                    <span><span class="info-box-number">Titre :</span>{{$item->titre}}</span> <br>
                    <span><span class="info-box-number">Texte :</span>{{$item->texte}}</span> <br>
                    <a href="/admin/adoffer/editoffer/{{$item->id}}" type="submit" class="btn btn-primary">Edit</a>
                </div>
                <!-- /.info-box-content -->
            </div>
            

        </div>
    </form>
    @endforeach

</div>

@stop
