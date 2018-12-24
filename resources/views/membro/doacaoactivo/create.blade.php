@extends('layouts.membro')

@section('principal')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                        <h1><i class="fa fa-money"></i> Cadastrar doação</h1>
                            <hr>
                    <h2>Lista de doações <a href="{{route('membroactivo.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Voltar </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <hr>

                    <form method="post" action="{{ route('membroactivo.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf
                    <div class="form-group{{ $errors->has('talao') ? ' has-error' : '' }}">
                        {{ Form::label('name', 'Carregar o tao') }}
                        <input type="file" value="{{ Request::old('talao') ?: '' }}" name="talao" class="form-control" />
                        @if ($errors->has('talao'))
                            <span class="help-block">{{ $errors->first('talao') }}</span>
                        @endif
                    </div>

                    <input type="hidden" name="usuario" value="{{ Auth::user()->id }}" />
                
                    <div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                        {{ Form::label('valor', 'Valor') }}
                        <input type="valor" value="{{ Request::old('valor') ?: '' }}" name="valor" class="form-control" placeholder="Valor da doacao" />
                        @if ($errors->has('valor'))
                            <span class="help-block">{{ $errors->first('valor') }}</span>
                        @endif
                    </div>
                
                
                    {{ Form::submit('Cadastrar doacao', array('class' => 'btn btn-primary')) }}
                
                    {{ Form::close() }}
                
                </div>
            </div>
        </div>
    </div>
</div>
@stop
