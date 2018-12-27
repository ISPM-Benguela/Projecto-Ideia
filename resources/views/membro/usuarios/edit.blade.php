@extends('layouts.membro')

@section('principal')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                        <h1><i class="fa fa-user"></i> Gestao de Membros</h1>
                            <hr>
                    <h2>Lista de membros <a href="{{route('usuarios.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Voltar </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <hr>
                    {{ Form::model($user, array('route' => array('usuarios.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>
                
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', null, array('class' => 'form-control')) }}
                    </div>
                
                    <div class='form-group'>
                        {{ Form::label('email', 'Peril do membro') }}
                        <select name="tipo" class="form-control">
                            <option value=""> ---- Selecionar --- </option>
                            <option value="Administrador">Administrador</option>
                            <option value="Secretario">Secretario</optsion>
                            <option value="Membro">Membro</option>
                        </select>
                    </div>
                
                    <div class="form-group">
                        {{ Form::label('password', 'Password') }}<br>
                        {{ Form::password('password', array('class' => 'form-control')) }}
                
                    </div>
                
                    <div class="form-group">
                        {{ Form::label('password', 'Confirm Password') }}<br>
                        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                
                    </div>
                
                    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
                
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
