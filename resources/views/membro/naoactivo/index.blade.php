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
                                <th>Valor</th>
                                <th>Enviado em</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Enviado em</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if (count($membros))
                            @foreach($membros as $row)
                            <tr>
                                <td>{{$row->nome}}</td>
                               <td>{{$row->valor}}</td>
                                <td>{{ $row->created_at->format('F d, Y h:ia') }}</td>
                                <td>
                                    <a href="{{ route('membronaoactivo.show', ['id' => $row->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar</a>
                                    <a href="{{ route('membronaoactivo.edit', ['id' => $row->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-download" title="Delete"></i> Baixar tão</a>
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
