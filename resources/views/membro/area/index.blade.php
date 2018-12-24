@extends('layouts.membro')
@section('principal')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                      <h2>Cadastrar area <a href="{{route('area.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Cadastrar novo areas </a></h2>
                   <div class="clearfix"></div>
                </div>
                <div class="x_content">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Descricao</th>
                                    <th>Accao</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Descricao</th>
                                    <th>Accao</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if (count($areas))
                                @foreach($areas as $row)
                                <tr>
                                    <td>{{$row->titulo}}</td>
                                    <td>{{str_limit($row->descricao, 20)}}</td>
                                    <td>
                                        <a href="{{ route('area.edit', ['id' => $row->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> Editar</a>
                                        <a href="{{ route('area.show', ['id' => $row->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Emilinar</a>
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