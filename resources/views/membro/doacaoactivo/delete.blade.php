@extends('layouts.membro')

@section('principal')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                        <h1><i class="fa fa-money"></i> Confirmar  a acção</h1>
                            <hr>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                   <h2>Ver todas doações <a href="{{route('membroactivo.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Voltar </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p>Tens certeza que desejas eliminar esta doaçao</p>

                    <form method="POST" action="{{ route('membroactivo.destroy', ['id' => $doacao->id]) }}">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger">Sim tenho certeza.<strong></strong></button>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@stop
