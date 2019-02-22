@extends('layouts.membro')
@section('principal')

<div class="">
  <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Data</th>
                                <th>Justificação</th>
                                @if ($perfil->tipo == "Administrador")
                                <th></th>
                                @endif
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Data</th>
                                <th>Justificação</th>
                                @if ($perfil->tipo == "Administrador")
                                <th></th>
                                @endif
                            </tr>
                        </tfoot>
                        <tbody>
                            @if (count($cadindatos))
                            @foreach($cadindatos as $row)
                            <tr>
                                <td>{{$row->nome}}</td>
                                <td>{{$row->no_bi}}</td>
                                <td>{{ $row->created_at->diffForHumans() }}</td>
                                <td>{{  $row->mensagem }}</td>
                                @if ($perfil->tipo == "Administrador")
                                <td>
                                    
                                    <a href="{{ route('eliminar.show', ['id' => $row->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar</a>
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
