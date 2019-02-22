@extends('layouts.membro')
@section('principal')

<div class="">
  <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    @if ($perfil->tipo == "Administrador")
                        <h2> <a href="{{route('documentos.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Carregar documento</a></h2>
                    @elseif ($perfil->tipo == "Secretario")
                        <h2> <a href="{{route('documentos.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Carregar documento</a></h2>
                    @endif
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>documento</th>
                                <th>Carregado por</th>
                                <th>Data</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>titulo</th>
                                <th>Carregado por</th>
                                <th>Data</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if (count($documentos))
                            @foreach($documentos as $row)
                            <tr>
                                <td>{{$row->titulo}}</td>
                                <td>{{$row->carregado}}</td>
                                <td>{{ $row->created_at->format('F d, Y h:ia') }}</td>
                                <td>
                                    @if ($perfil->tipo == "Administrador")
                                    <a href="{{ route('documentos.show', ['id' => $row->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar</a>
                                    @endif
                                    <a href="{{ route('documentos.edit', ['id' => $row->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-download" title="Delete"></i> Baixar documento</a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div><div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
@stop
