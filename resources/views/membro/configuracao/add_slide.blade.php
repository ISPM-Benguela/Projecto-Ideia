@extends('layouts.membro')

@section('principal')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                        <h1> Configuração do sistema</h1>
                            <hr>
                    <h2>Ver configurações <a href="{{route('configuracao.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Voltar </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <hr>

                    <form method="post" action="{{ route('salva_slide') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf

                    
                    <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                        {{ Form::label('descricao', 'Descricao do slide') }}
                        <input type="text" value="{{ Request::old('descricao') ?: '' }}" name="descricao" class="form-control" />
                        @if ($errors->has('descricao'))
                            <span class="help-block">{{ $errors->first('descricao') }}</span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
                        {{ Form::label('imagem', 'imagem ') }}
                        <input type="file" value="{{ Request::old('imagem') ?: '' }}" name="imagem" class="form-control" />
                        @if ($errors->has('imagem'))
                            <span class="help-block">{{ $errors->first('imagem') }}</span>
                        @endif
                    </div>  
                   
                
                
                    {{ Form::submit('Salvar slide', array('class' => 'btn btn-primary')) }}
                
                    {{ Form::close() }}
                
                </div>
            </div>
        </div>
    </div>
</div>
@stop
