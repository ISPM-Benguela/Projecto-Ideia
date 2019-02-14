@extends('layouts.membro')

@section('principal')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                        <h1> Publicar actividade</h1>
                            <hr>
                    <h2>Lista de actividade <a href="{{route('actividade.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Voltar </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <hr>

                    <form method="post" action="{{ route('actividade.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf

                    
                    <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                        {{ Form::label('titulo', 'Titulo do artigo') }}
                        <input type="text" value="{{ Request::old('titulo') ?: '' }}" name="titulo" class="form-control" />
                        @if ($errors->has('titulo'))
                            <span class="help-block">{{ $errors->first('titulo') }}</span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
                        {{ Form::label('imagem', 'imagem da actividade') }}
                        <input type="file" value="{{ Request::old('imagem') ?: '' }}" name="imagem" class="form-control" />
                        @if ($errors->has('imagem'))
                            <span class="help-block">{{ $errors->first('imagem') }}</span>
                        @endif
                    </div>  
                    <div class="form-group{{ $errors->has('local') ? ' has-error' : '' }}">
                        {{ Form::label('local', 'Local da actividade') }}
                        <input type="text" value="{{ Request::old('local') ?: '' }}" name="local" class="form-control" />
                        @if ($errors->has('local'))
                            <span class="help-block">{{ $errors->first('local') }}</span>
                        @endif
                    </div> 

                    <div class="form-group{{ $errors->has('data_inicio') ? ' has-error' : '' }}">
                        {{ Form::label('inicio', 'Data inicio') }}
                        <input type="date" value="{{ Request::old('data_inicio') ?: '' }}" name="data_inicio" class="form-control" />
                        @if ($errors->has('data_inicio'))
                            <span class="help-block">{{ $errors->first('data_inicio') }}</span>
                        @endif
                    </div> 

                    
                
                    <div class="form-group{{ $errors->has('data_termino') ? ' has-error' : '' }}">
                        {{ Form::label('inicio', 'Data termino') }}
                        <input type="date" value="{{ Request::old('data_termino') ?: '' }}" name="data_termino" class="form-control" />
                        @if ($errors->has('data_termino'))
                            <span class="help-block">{{ $errors->first('data_termino') }}</span>
                        @endif
                    </div> 
                
                
                    {{ Form::submit('Publicar actividade', array('class' => 'btn btn-primary')) }}
                
                    {{ Form::close() }}
                
                </div>
            </div>
        </div>
    </div>
</div>
@stop
