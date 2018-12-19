@extends('layouts.membro')

@section('principal')
<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i> Gestão da area de actuacao</h1>
    <hr>
    <a href="{{route('area.create')}}" class="btn btn-primary" style="padding-bottom: 5px;">Cadastrar area de actuacao <i class="fa fa-plus"></i></a>

    <div class="row">
      <div class="col-sm-4 col-md-4 col-xs-4">
        <div class="thumbnail">
            <img src="" alt="">
            <div class="caption">
                <h3>Area </h3>
            </div>
        </div>
    </div>     
   </div><!-- ./ row -->
  s

</div>
@stop