@extends('layouts.membro')

@section('principal')
<div class="">
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Confirm Delete Record <a href="" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
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
                                            <a href="{{ URL::to('/membro/previlegio/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['previlegio.destroy', $permission->id] ]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                        
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="{{ route('previlegio.create') }}" class="btn btn-success">Cadastrar membro</a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop