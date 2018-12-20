@extends('layouts.membro')

@section('principal')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Brands <a href="{{route('nivel.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create New </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    {{ Form::model($role, array('route' => array('nivel.update', $role->id), 'method' => 'PUT')) }}

                    <div class="form-group">
                        {{ Form::label('name', 'Role Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>
                
                    <h5><b>Assign Permissions</b></h5>
                    @foreach ($permissions as $permission)
                
                        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>
                
                    @endforeach
                    <br>
                    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}
                
                    {{ Form::close() }}    
                </div>
            </div>
        </div>
    </div>
</div>
@stop