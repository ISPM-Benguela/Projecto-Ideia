@extends('layouts.app')

@section('titulo')
  - {{ $titulo }}
@stop

@section('principal')
  	<!-- Slide1 -->
      <section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
			  @if(count($carousel) > 0)
			    @foreach($carousel as $slide)
					<div class="item-slick1 item1-slick1" style="background-image: url('/storage/{{ $slide->imagem}}');">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							{{ $slide->descricao }}

						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="{{route('sobre')}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Saber Mais
							</a>
						</div>
					</div>
				</div>
				@endforeach
			  @else
				<div style="padding: 10px; height: 360px; border: 1px solid #ccc;">
					<h2 style="margin-left: 250px; margin-top: 120px; color: red;">Precisas carregar os slide no back office</h2>
				</div>
			  @endif

			</div>
		</div>
	</section>

		<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
			<div class="container">
                <h2 style="text-align: center">Em que estamos envolvidos</h2>

				<p style="text-align: justify">O Projecto Ideia, é uma associação filantrópica,
					de âmbito nacional e interesse geral, sem fins lucrativos, constituída por
					 pessoas, independentemente do género, raça, origem étnica, ou condição
					 sócio-económica, que respeitem a Lei Cristã e as normas existente em
					  cada território, com autonomia administrativa, financeira, jurídica
					  e patrimonial, podendo alargar sua acção aos vários campos que constituem
					   a sociedade (igreja, escola, família...). .</p>
                <br /><br /><br />
				<div class="row">
                    @foreach($areas as $area)
					<div  class="col-sm-8 col-md-8 col-lg-4 m-l-r-auto curva-banner">
						<!-- block1 -->
						<div  class="block-curva block1 hov-img-zoom pos-relative m-b-30">

							<img src="/storage/{{$area->imagem }}" class="img-responsive" alt="{{$area->title}}">

						</div>
						<div class="block-desc">

								<h2>{{$area->titulo}}</h2>

								<p>{{ $area->descricao }}</p>

							</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>

    <!-- Últimos Eventos -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Últimos Eventos
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
				 @if (count($actividades) > 0)
					@foreach($actividades as $actividade)
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="{{asset('storage')}}/{{ $actividade->imagem }}" height="200" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Saber Mais
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
									{{ $actividade->titulo }}
								</a>

								<span class="block2-price m-text6 p-r-5">
									Local: {{ $actividade->local }} de  à {{ $actividade->data_termino }}
								</span>
								<p>Publicado à {{ $actividade->created_at->diffForHumans() }}</p>
								<p>De {{ $actividade->data_inicio }} à {{ $actividade->data_termino }}</p>
								
							</div>
						</div>
					</div><!-- /. aio -->
					@endforeach
					@else
                      <div style="padding: 10px; height: 360px; border: 1px solid #ccc;">
					<h6 style="margin-left: 20px; margin-top: 120px; color: red;">Precisas carregar os activdades no back office</h6>
				</div>
					@endif
				</div>
			</div>

		</div>
	</section>

  <!-- Banner2 -->
	<section class="banner2 bg5 p-t-55 p-b-55" style="background-image: url(images/banner2.jpeg); background-size: 100% 100%; height: 300px; color: #fff;">
		<h3 style="text-transform: uppercase; color: #fff;">Nos somos uma ONG o nosso trabalha objectiva ajudar as crias e os idosos</h3>

    <!-- Button -->
	<a href="{{route('sermembro')}}" class="butao-banner flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
		Venha fazer parte
	</a>
	</section>
  <!-- Blog -->
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Nossa Direção
				</h3>
			</div>

			<div class="row">
			   @if(count($perfils) > 0)
			   @foreach($perfils as $perfil)

			   @if ( $perfil->tipo == 'Administrador')
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="#" class="block3-img dis-block hov-img-zoom">
							<img width="129" height="229" style="border-radius: 10px;" src="{{asset('storage')}}/{{ $perfil->imagem }}" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="#" class="m-text11">
									{{ $perfil->nome }} {{ $perfil->snome }}
								</a>
							</h4>
                            
							<span class="s-text6">Cargo: </span> <span class="s-text7">{{ $perfil->tipo }}</span>


							<p class="s-text8 p-t-16">
								Olá meu nome é {{ $perfil->nome }} {{ $perfil->snome }}, sou a administrador do projecto Ideia nova.
							</p>
						</div>
					</div>
				</div>
				@endif
				@if ( $perfil->tipo == 'Secretario')
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href=""  class="block3-img dis-block hov-img-zoom">
							<img width="129" style="border-radius: 10px;"   height="229" src="{{asset('storage')}}/{{ $perfil->imagem }}" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="#" class="m-text11">
									{{ $perfil->nome }} {{ $perfil->snome }} 
								</a>
							</h4>
                         
							<span class="s-text6">Cargo: </span> <span class="s-text7">{{ $perfil->tipo }}</span>


							<p class="s-text8 p-t-16">
								Olá meu nome é {{ $perfil->nome }} {{ $perfil->snome }}, sou a Secretarios do projecto Ideia nova.
							</p>
						</div>
					</div>
				</div>
				@endif
			  @endforeach
			  @else
				<h3>Cadastrar a direcção no backoffice</h3>
			  @endif
			</div>
		</div>
	</section>
@stop
