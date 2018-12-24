@extends('layouts.membro')

@section('principal')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                        <h1> Publicar artigo</h1>
                            <hr>
                    <h2>Lista de artigos <a href="{{route('artigo.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Voltar </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <hr>

                    <form method="post" action="{{ route('artigo.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf

                    
                    <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                        {{ Form::label('titulo', 'Titulo do artigo') }}
                        <input type="text" value="{{ Request::old('titulo') ?: '' }}" name="titulo" class="form-control" />
                        @if ($errors->has('titulo'))
                            <span class="help-block">{{ $errors->first('titulo') }}</span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
                        {{ Form::label('imagem', 'imagem do artigo') }}
                        <input type="file" value="{{ Request::old('imagem') ?: '' }}" name="imagem" class="form-control" />
                        @if ($errors->has('imagem'))
                            <span class="help-block">{{ $errors->first('imagem') }}</span>
                        @endif
                    </div>  
                    <input type="hidden" name="usuario" value="{{ Auth::user()->id }}" />
                
                    <div class="form-group{{ $errors->has('conteudo') ? ' has-error' : '' }}">
                        {{ Form::label('conteudo', 'Artigo') }}
                        <textarea class="form-control" name="conteudo"></textarea>
                        @if ($errors->has('conteudo'))
                            <span class="help-block">{{ $errors->first('conteudo') }}</span>
                        @endif
                    </div>
                
                
                    {{ Form::submit('Publicar artigo', array('class' => 'btn btn-primary')) }}
                
                    {{ Form::close() }}
                
                </div>
            </div>
        </div>
    </div>
</div>
@stop
