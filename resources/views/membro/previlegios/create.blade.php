@extends('layouts.membro')
@section('principal')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                        <h1><i class="fa fa-unlock"></i> Gestao de previlegio<a href="{{ route('nivel.index') }}" class="btn btn-default pull-right"><i class="fa fa-unlock"></i> Nivel</a>
                            <a href="{{ route('previlegio.index') }}" class="btn btn-default pull-right"><i class="fa fa-key"></i> Previlegio</a></h1>
                            <hr>
                   <div class="clearfix"></div>
                </div>
                <div class="x_content">
                        
                        <form method="post" action="{{ route('previlegio.store') }}" data-parsley-validate class="form-horizontal form-label-left">
                                @csrf
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', '', array('class' => 'form-control')) }}
                            @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div><br>
                        @if(!$roles->isEmpty()) //If no roles exist yet
                            <h4>Assign Permission to Roles</h4>
                    
                            @foreach ($roles as $role) 
                                {{ Form::checkbox('roles[]',  $role->id ) }}
                                {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                    
                            @endforeach
                        @endif
                        <br>
                        {{ Form::submit('Cadastrar previlegio', array('class' => 'btn btn-primary')) }}
                    
                        {{ Form::close() }}
                                
            </div>
        </div>
    </div>
</div>
@stop