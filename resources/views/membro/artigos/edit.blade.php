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
                    <form method="post" action="{{ route('artigo.update', ['id' => $artigo->id]) }}" data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data">
                        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="c">Titulo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$artigo->titulo}}" id="titulo" name="titulo" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('titulo'))
                                <span class="help-block">{{ $errors->first('titulo') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="imagem">Titulo <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" value="{{ $artigo->imagem }}" id="imagem" name="imagem" class="form-control col-md-7 col-xs-12">
                                    @if ($errors->has('imagem'))
                                    <span class="help-block">{{ $errors->first('imagem') }}</span>
                                    @endif
                                </div>
                            </div>
                        
                        <div class="form-group{{ $errors->has('conteudo') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="local">Local <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                
                                <textarea name="conteudo" class="form-control col-md-7 col-xs-12">{{ $artigo->conteudo }}</textarea>                                
                                @if ($errors->has('local'))
                                <span class="help-block">{{ $errors->first('conteudo') }}</span>
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