@extends('layouts.membro')

@section('principal')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><a href="{{route('actividade.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Publicar actividade</a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                   <div class="row">
                   @if($actividades)
                   @foreach ($actividades as $artigo)
                       
                   
                    <div class="col-xs-6 col-md-3">
                       
                        <a href="#" class="thumbnail" style="margin-top: 10px;">
                        <img src="{{asset('storage')}}/{{ $artigo->imagem }}" alt="...">
                        </a>
                        <div class="caption">
                            
                            <h4>{{ $artigo->titulo }}</h4>
                            <p>{{ $artigo->local }}</p>
                            <a href="{{ route('actividade.edit', ['id' => $artigo->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-pencil" title="Delete"></i> Actualizar</a>
                            <a href="{{ route('actividade.show', ['id' => $artigo->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar</a>
                            
                        </div>
                    </div> <!-- ./ col  -->

                   @endforeach
                   @else
                     <h2>Sem actividade</h2>
                    @endif
                    </div><!-- ./ row -->
                    

                </div>
            </div>
        </div>
    </div>
</div>
@stop