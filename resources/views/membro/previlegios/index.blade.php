@extends('layouts.membro')
@section('principal')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                        <h1><i class="fa fa-unlock"></i> Gestao de previlegios<a href="{{ route('nivel.index') }}" class="btn btn-default pull-right"><i class="fa fa-unlock"></i> Nivel</a>
                            <a href="{{ route('previlegio.index') }}" class="btn btn-default pull-right"><i class="fa fa-key"></i> Previlegio</a></h1>
                            <hr>
                   <div class="clearfix"></div>
                </div>
                <div class="x_content">
                   
            </div>
        </div>
    </div>
</div>
@stop