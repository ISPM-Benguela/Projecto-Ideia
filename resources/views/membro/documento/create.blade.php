@extends('layouts.membro')

@section('principal')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                        <h1><i class="fa fa-file"></i> Cadastrar doação</h1>
                            <hr>
                    <h2>Lista de documentos <a href="{{route('documentos.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Voltar </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <hr>

                    <form method="post" action="{{ route('documentos.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf
                    <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                        {{ Form::label('titulo', 'Titulo do documento') }}
                        <input type="text" value="{{ Request::old('titulo') ?: '' }}" name="titulo" id="titulo" class="form-control" placeholder="Titulo do documento" />
                        @if ($errors->has('titulo'))
                            <span class="help-block">{{ $errors->first('titulo') }}</span>
                        @endif
                    </div>


                    <div class="form-group{{ $errors->has('documento') ? ' has-error' : '' }}">
                        {{ Form::label('documento', 'Carregar o documento') }}
                        <input type="file" value="{{ Request::old('documento') ?: '' }}" name="documento" class="form-control" />
                        @if ($errors->has('documento'))
                            <span class="help-block">{{ $errors->first('documento') }}</span>
                        @endif
                    </div>

                    <input type="hidden" name="membro" value="{{ Auth::user()->name }}" />
                
                    
                
                
                    {{ Form::submit('Carregar', array('class' => 'btn btn-primary')) }}
                
                    {{ Form::close() }}
                
                </div>
            </div>
        </div>
    </div>
</div>
@stop
