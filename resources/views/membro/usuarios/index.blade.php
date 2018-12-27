@extends('layouts.membro')
@section('principal')

<div class="">
  <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cadastrar membro <a href="{{route('usuarios.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create New </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data</th>
                                <th>Perfil</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data</th>
                                <th>Perfil</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if (count($usuarios))
                            @foreach($usuarios as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{ $row->created_at->format('F d, Y h:ia') }}</td>
                                <td>{{  $row->profile['tipo'] }}</td>
                                <td>
                                    <a href="{{ route('usuarios.edit', ['id' => $row->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> actualizar</a>
                                    <a href="/membro/usuarios/{{ $row->id }}/destroy" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
