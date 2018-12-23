@extends('layouts.app')

@section('titulo')
 - {{ $titulo }}
@stop

@section('principal')
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/mainbanner.png);">
		<h2 class="l-text2 t-center">
            Envie o seu donativo
            
        </h2>
        <small style="color: #fff;">para enviar o donativo vai ao banco BIC mais proximo de si.</small>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
                       
                            <h6>Ajude - nos ajudar quem mais Precise</h6>


                            <p style="text-align: justify;">
                                Sendo o projecto Ideia uma associação filantrópica, de âmbito nacional e interesse geral,
                                com autonomia financeira e sem fins lucrativo, e neste sentido que contamos muito com 
                                o apoio e colaboração de voces e este apoio pode ser financeiro, de bens pereciveis como de vestuarios e não só 
                            </p>
                            <div class="thumbnail">
                            <img src="images/apoio.jpg" width="400" height="200" class="img-responsive" alt="">
                            </div>    
                        </div>
				</div>

				<div class="col-md-6 p-b-30">
				    @include('includes.erro')
					
					<form class="leave-comment" action="{{route('apoio')}}" method="post" enctype="multipart/form-data">
						
						<h4 class="m-text26 p-b-36 p-t-15">
							Preencher o formulario de doacao
						</h4>

						<div class="bo4 of-hidden size15 m-b-20 {{ $errors->has('nome') ? ' has-error' : '' }} ">
							<input value="" class="sizefull s-text7 p-l-22 p-r-22"  value="{{ Request::old('nome') ?: '' }}" type="text" name="nome" placeholder="Nome completo">
							
                               
						</div>
						 @if ($errors->has('nome'))
                            <span class="help-block">{{ $errors->first('nome') }}</span>
                        @endif

						<div class="bo4 of-hidden size15 m-b-20 {{ $errors->has('telefone') ? ' has-error' : '' }} ">
							<input value="" class="sizefull s-text7 p-l-22 p-r-22"  value="{{ Request::old('telefone') ?: '' }}" type="text" name="telefone" placeholder="Telefone">
							
                               
						</div>
						 @if ($errors->has('telefone'))
                            <span class="help-block">{{ $errors->first('telefone') }}</span>
                        @endif

						<div class="bo4 of-hidden size15 m-b-20 {{ $errors->has('talao') ? ' has-error' : '' }}">
							<input class="sizefull s-text7 p-l-22 p-r-22" value="{{ Request::old('talao') ?: '' }}"  type="file" name="talao">
							
						</div>
						@if ($errors->has('talao'))
                                <span class="help-block">{{ $errors->first('talao') }}</span>
                                @endif

						<div class="bo4 of-hidden size15 m-b-20 {{ $errors->has('telefone') ? ' has-error' : '' }}">
							<input class="sizefull s-text7 p-l-22 p-r-22" value="{{ Request::old('valor') ?: '' }}"   type="text" name="valor" placeholder="Valor ">
							
						</div>

						@if ($errors->has('valor'))
                            	 <span class="help-block">{{ $errors->first('valor') }}</span>
                            @endif

						<div class="w-size25">
							<!-- Button -->
							 <input type="hidden" name="_token" value="{{ Session::token() }}">
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Enviar
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@stop