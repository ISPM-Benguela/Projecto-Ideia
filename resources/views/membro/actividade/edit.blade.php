@extends('layouts.membro')


@section('principal')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Listar todas actividades <a href="{{route('actividade.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Voltar </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="{{ route('actividade.update', ['id' => $actividade->id]) }}" data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data">
                        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="c">Titulo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$actividade->titulo}}" id="titulo" name="titulo" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('titulo'))
                                <span class="help-block">{{ $errors->first('titulo') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="imagem">Titulo <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" value="{{ $actividade->imagem }}" id="imagem" name="imagem" class="form-control col-md-7 col-xs-12">
                                    @if ($errors->has('imagem'))
                                    <span class="help-block">{{ $errors->first('imagem') }}</span>
                                    @endif
                                </div>
                            </div>
                        
                        <div class="form-group{{ $errors->has('local') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="local">Local <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$actividade->local}}" id="local" name="local" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('local'))
                                <span class="help-block">{{ $errors->first('local') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('data_inicio') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="local">Data inicio <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$actividade->data_inicio}}" id="data_inicio" name="data_inicio" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('data_inicio'))
                                <span class="help-block">{{ $errors->first('data_inicio') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('data_termino') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="local">Data termino <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$actividade->data_inicio}}" id="data_termino" name="data_termino" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('data_termino'))
                                <span class="help-block">{{ $errors->first('data_termino') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <input name="_method" type="hidden" value="PUT">
                                <button type="submit" class="btn btn-success">Actualizar actividade</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop