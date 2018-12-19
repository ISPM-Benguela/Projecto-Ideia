@extends('layouts.membro')

@section('principal')
<div class="">
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Confirmar a eliminacao <a href="{{route('area.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Voltar </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p>Tens certeza que desejas eliminar <strong>{{$area->titulo}}</strong></p>

                    <form method="POST" action="{{ route('area.destroy', ['id' => $area->id]) }}">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger">Sim tenho certeza. Eliminar <strong>{{$area->title}}</strong></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop