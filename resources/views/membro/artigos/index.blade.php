@extends('layouts.membro')

@section('principal')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><a href="{{route('artigo.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Publicar artigo</a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                   <div class="row">
                   @if($artigos)
                   @foreach ($artigos as $artigo)
                       
                   
                    <div class="col-xs-6 col-md-3">
                     
                        <a href="#" class="thumbnail">
                        <img src="{{asset('storage')}}/{{ $artigo->imagem }}" alt="...">
                        </a>
                        <div class="caption">
                            
                            <h4>{{ $artigo->titulo }}</h4>
                            <a href="{{ route('artigo.edit', ['id' => $artigo->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Actualizar</a>
                            <a href="{{ route('artigo.show', ['id' => $artigo->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar</a>
                            
                        </div>
                    </div> <!-- ./ col  -->

                   @endforeach
                    @endif
                    {!! $artigos->links() !!}
                    </div><!-- ./ row -->
                    

                </div>
            </div>
        </div>
    </div>
</div>
@stop