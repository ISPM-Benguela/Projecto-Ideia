@extends('layouts.membro')
@section('principal')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                        <h1><i class="fa fa-unlock"></i> Gestao de previlegios<a href="{{ route('nivel.index') }}" class="btn btn-default pull-right"><i class="fa fa-unlock"></i> Nivel</a>
                            <a href="{{ route('previlegio.index') }}" class="btn btn-default pull-right"><i class="fa fa-key"></i> Previlegio</a></h1>
                            <hr>
                   <div class="clearfix"></div>
                </div>
                <div class="x_content">
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                        
                                    <thead>
                                        <tr>
                                            <th>Permissions</th>
                                            <th>Operation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->name }}</td> 
                                            <td>
                                            <a href="" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['', $permission->id] ]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                        
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        
                            <a href="{{ route('previlegio.create') }}" class="btn btn-success">cadastrar previlegio</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop