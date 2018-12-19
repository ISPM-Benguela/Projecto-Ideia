@extends('layouts.membro')
@section('principal')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                        <h1><i class="fa fa-users"></i> Gestao de membros <a href="{{ route('nivel.index') }}" class="btn btn-default pull-right"><i class="fa fa-unlock"></i> Nivel</a>
                            <a href="{{ route('previlegio.index') }}" class="btn btn-default pull-right"><i class="fa fa-key"></i> Previlegio</a></h1>
                            <hr>
                   <div class="clearfix"></div>
                </div>
                <div class="x_content">
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                        
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Date/Time Added</th>
                                            <th>User Roles</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        @foreach ($usuarios as $user)
                                        <tr>
                        
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                                            <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                            <td>
                                            <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['usuarios.destroy', $user->id] ]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                        
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                        
                                </table>
                            </div>
                        
                            <a href="{{ route('usuarios.create') }}" class="btn btn-success">Cadastrar membro</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop