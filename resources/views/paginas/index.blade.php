@extends('layouts.app')

@section('titulo')
  - {{ $titulo }} 
@stop

@section('principal')
  	<!-- Slide1 -->
      <section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/1.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Projecto Ideia
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Não há limites para quem quer fazer o bem
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="blog.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Saber Mais
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(images/2.jpeg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Convivendo com eles
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							Quem partoilha rem mais
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							<!-- Button -->
							<a href="blog.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Saber Mais
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(images/3.jpeg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Dia Mundial da saude 2018
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							A saude Importa
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button -->
							<a href="blog.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Saber Mais
							</a>
						</div>
					</div>
				</div>

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
                    
					<div  class="col-sm-8 col-md-8 col-lg-4 m-l-r-auto curva-banner">
						<!-- block1 -->
						<div  class="block-curva block1 hov-img-zoom pos-relative m-b-30">

							<img src="images/entrega.jpeg" class="img-responsive" alt="IMG-BENNER">

						</div>
						<div class="block-desc">
								<h2>A GRANDE ENTREGA</h2>

								<p>é uma campanha a ser realizada quadrimestral,
									 onde é feita a entrega de diversos bens de
									  primeira necessidade aos Centros de Acolhimentos,
									   Lares de Assistência Social, Instituições Hospitalares
									    comunidades e outros.
								</p>

							</div>
					</div>

					<div  class="col-sm-8 col-md-8  col-lg-4 m-l-r-auto curva-banner">
						<!-- block1 -->
						<div  class="block-curva block1 hov-img-zoom pos-relative m-b-30">

							<img src="images/comer.jpeg" class="img-responsive" alt="IMG-BENNER">

						</div>
						<div class="block-desc">
							<h2>COMER COM ELES</h2>

							<p>Actividade semestral, tendo como foco a distribuição
							 de refeições aos mais necessitados que fazem de seus 
							 lares as ruas, praças e largos públicos das artérias 
							 da cidade e não só, bem como aos trabalhadores ambulantes
							  e de serviços de guarda..
							</p>
						</div>
					</div>

					<div  class="col-sm-8 col-md-8  col-lg-4 m-l-r-auto curva-banner">
								<!-- block1 -->
						<div  class="block-curva block1 hov-img-zoom pos-relative m-b-30">

							<img src="images/jogar.jpg" class="img-responsive" alt="IMG-BENNER">
						</div>
						<div class="block-desc">
								<h2>JOGAR PELA SOLIDARIEDADE</h2>

								<p>Actividade lúdica a ser realizada quadrimestral
									, que visa levar os associados ao projecto,
									 a prática de desportos, ginástica e através
									  destas, angariar bens de primeira necessidade
									   para os mais necessitados.
								</p>
							</div>

					</div>
				</div>
			</div>
		</section>

    <!-- Ultimos Eventos -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Ultimos Eventos
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="images/item-02.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

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
									Uma boa actividades
								</a>

								<span class="block2-price m-text6 p-r-5">
									Local:  }}
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

  <!-- Banner2 -->
	<section class="banner2 bg5 p-t-55 p-b-55" style="background-image: url(images/banner2.jpeg); background-size: 100% 100%; height: 300px; color: #fff;">
		<h3>Nos somos uma ONG o nosso trabalha objectiva ajudar as crias e os idosos</h3>

    <!-- Button -->
						<button class="butao-banner flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Venha fazer parte
						</button>
	</section>
  <!-- Blog -->
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Nossa Derecao
				</h3>
			</div>

			<div class="row">
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-01.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									Humberto Fortes
								</a>
							</h4>

							<span class="s-text6">Cargo: </span> <span class="s-text7">Coordenador do projecto</span>


							<p class="s-text8 p-t-16">
								Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-02.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									Angelino Valeta
								</a>
							</h4>

							<span class="s-text6">Cargo: </span> <span class="s-text7">Vice - Coordenador do projecto</span>

							<p class="s-text8 p-t-16">
								Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-03.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									Bernadeth Bueke
								</a>
							</h4>

							<span class="s-text6">Cargo: </span> <span class="s-text7">Secretaria</span>

							<p class="s-text8 p-t-16">
								Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop