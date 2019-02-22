@extends('layouts.app')

@section('titulo')
 - {{ $titulo }}
@stop

@section('principal')

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url({{asset('images/mainbanner.png')}});">
		<h2 class="l-text2 t-center">
			{{ $artigo->titulo }}
		</h2>
	</section>
   	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">
						<!-- item blog -->
						<div class="item-blog p-b-80">
							<a href="#" class="item-blog-img pos-relative dis-block hov-img-zoom">
								<img src="{{asset('storage')}}/{{ $artigo->imagem }}" alt="IMG-BLOG">

								<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 " style="color: #fff;">
									{{ $artigo->created_at->diffForHumans() }}
								</span>
							</a>

							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									<a href="blog-detail.html" class="m-text24">
										{{ $artigo->titulo }}
									</a>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										Publicado em {{  $artigo->created_at }}
										<span class="m-l-3 m-r-6">|</span>
									</span>

								</div>

								<p class="p-b-12" style="text-align: justify;">
									{{  $artigo->conteudo }}
								</p>
							</div>
						</div>
					</div>

					
				</div>

				<div class="col-md-4 col-lg-3 p-b-75">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Featured Products -->
						<h4 class="m-text23 p-t-65 p-b-34">
							Artigos antigos
						</h4>

						<ul class="bgwhite">

						  @foreach($mais_vistos as $artigo)
							<li class="flex-w p-b-20">
								<a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img src="{{asset('storage')}}/{{ $artigo->imagem }}" alt="IMG-PRODUCT">
								</a>

								<div class="w-size23 p-t-5">
									<a href="product-detail.html" class="s-text20">
										{{ $artigo->titulo }}
									</a>

								</div>
							</li>
						@endforeach
						</ul>

						

						<!-- Tags -->
						
					</div>
				</div>
			</div>
		</div>
	</section>

@stop