@extends('layouts.membro')

@section('principal')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><a href="{{route('add_slide')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Adicionar Slide</a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                   <div class="row">
                   @if(count($carousel) > 0)
                   @foreach ($carousel as $carouse)
                       
                   
                    <div class="col-xs-6 col-md-3">
                     
                        <a href="#" class="thumbnail">
                        <img src="{{asset('storage')}}/{{ $carouse->imagem }}" alt="...">
                        </a>
                        <div class="caption">
                            
                            <h4>{{ $carouse->titulo }}</h4>
                            <a href="{{ route('configuracao.slide_edit', ['id' => $carouse->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Actualizar</a>
                            <a href="{{ route('configuracao.slide_edit', ['id' => $carouse->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar</a>
                            
                        </div>
                    </div> <!-- ./ col  -->

                     @endforeach
                     @else 
                       <h3>Nao temos dados do slide de imagem</h3>
                    @endif
                    </div><!-- ./ row -->
                    

                </div>
            </div>
        </div>
    </div>
</div>
@stop