@extends('layouts.membro')
@section('principal')

<div class="">
  <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> <a href="{{route('membroactivo.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Cadastrar doacao </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    @if ($perfil->tipo == "Administrador")
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Valor da Doacao</th>
                                <th>Data</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Valor da Doacao</th>
                                <th>Data</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if (count($doacaos))
                            @foreach($doacaos as $row)
                            <tr>
                                <td>{{$row->valor }}</td>
                                <td>{{$row->created_at }}</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" title="Edit"></i> Visualizar</a>
                                    <a href="{{ route('membroactivo.show', ['id' => $row->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar </a>
                                    <a href="{{ route('membroactivo.edit', ['id' => $row->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-download" title="Delete"></i> Baixar talão</a>
                                </td>
                            </tr>
                            <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Comprovativo do bancario</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="thumbnail">
                                                <img src="{{asset('storage/')}}/{{ $row->talao }}" />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop
