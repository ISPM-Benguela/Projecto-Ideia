@extends('layouts.membro')
@section('principal')

<div class="">
  <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    @if ($perfil->tipo == "Administrador")
                    <h2>Cadastrar membro <a href="{{route('usuarios.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Cradastrar membro </a></h2>
                    @endif
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
                                @if ($perfil->tipo == "Administrador")
                                <th></th>
                                @endif
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data</th>
                                <th>Perfil</th>
                                @if ($perfil->tipo == "Administrador")
                                <th></th>
                                @endif
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
                                @if ($perfil->tipo == "Administrador")
                                <td>
                                    <a href="{{ route('usuarios.edit', ['id' => $row->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> actualizar</a>
                                    <a href="{{ route('candidato.show', ['id' => $row->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar</a>
                                </td>
                                @endif
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
