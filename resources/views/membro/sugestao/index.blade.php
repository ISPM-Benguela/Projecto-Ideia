@extends('layouts.membro')
@section('principal')

<div class="">
  <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Brands <a href="{{route('sugestao.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create New </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Sugestao</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Sugestao</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if (count($sugestao))
                            @foreach($sugestao as $row)
                            <tr>
                                <td>{{$row->nome}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->telefone}}</td>
                                <td>{{str_limit($row->mensagem, 20)}}</td>
                                
                                <td>
                                    <a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil" title="Edit"></i> responder </a>
                                    <a href="{{ route('sugestao.show', ['id' => $row->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar</a>
                                </td>
                            </tr>
                            <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Reponder sugestao do {{ $row->nome }}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="responsive-table">
                                            <form action="{{route('email')}}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Enviado por</label>
                                                    <input type="text" name="from" class="form-control" value="{{ Auth::user()->email}}" placeholder="destinatario" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Enviado para</label>
                                                    <input type="text" name="from" class="form-control" value="{{ $row->email }}" placeholder="destinatario" />
                                                </div>
                                                <div class="form-group">
                                                    
                                                    <textarea nam="resposta" class="form-control" ></textarea>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary"><i class="fa fa-send"></i> Responder</button>
                                    </div>
                                    </div>
                                </div>
                                </div>

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
