<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Projecto Ideia @yield('titulo')</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/themify/themify-icons.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/elegant-font/html-css/style.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}" />
</head>
<body>
    	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						info@projectoedeia.com 
					</span>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="" class="logo">
					<img src="{{asset('images/logo.png')}}" width="80" height="120" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li class="active">
								<a href="{{ url('/') }}">Inicio</a>
							</li>

							<li>
								<a href="{{ route('sobre') }}">O que fazemos</a>
							</li>
							<li>
								<a href="{{ route('sermembro') }}">Quero ser membro</a>
							</li>
							<li>
									<a href="{{route('blog')}}">Blog</a>
								</li>

							<li>
								<a href="{{ route('apoiar') }}">Apoiar</a>
							</li>

							<li>
								<a href="{{ route('contactos') }}">Contactos</a>
							</li>
						</ul>
					</nav>
				</div>
				@guest
				<!-- Header Icon -->
				<div class="header-icons">
					<a href="{{ route('login') }}" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					</div>
				</div>
				@else 
				<div class="header-icons">
						<a href="{{route('principal')}}">{{ Auth::user()->name }}</a>
						 <a style="margin-left: 12px;" href="{{ route('logout') }}">
                              Sair
                          </a>
                                     
						</div>
					
				@endguest
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="images/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="{{ route('login') }}" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			
				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li class="active">
								<a href="{{ url('/') }}">Inicio</a>
							</li>

							<li>
								<a href="{{ route('sobre') }}">O que fazemos</a>
							</li>
							<li>
								<a href="{{ route('sermembro') }}">Quero ser membro</a>
							</li>
							<li>
									<a href="{{route('blog')}}">Blog</a>
								</li>

							<li>
								<a href="{{ route('apoiar') }}">Apoiar</a>
							</li>

							<li>
								<a href="{{ route('contactos') }}">Contactos</a>
							</li>
						</ul>
					</nav>
				</div>
				@guest
				<!-- Header Icon -->
				<div class="header-icons">
					<a href="{{ route('login') }}" class="header-wrapicon1 dis-block">
						<img src="{{asset('images/icons/icon-header-01.png')}}" class="header-icon1" alt="ICON">
					</a>

					</div>
				</div>
				@else 
				<div class="header-icons">
						<a href="{{route('principal')}}">{{ Auth::user()->name }}</a>
						 <a style="margin-left: 12px;" href="{{ route('logout') }}">
                              Sair
                          </a>
                                     
						</div>
					
				@endguest
		</div>
    </header>

    @yield('principal')
	
	
		<!-- Footer -->
		<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
			<div class="flex-w p-b-90">
				<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
					<h4 class="s-text12 p-b-30">
						ENTRARAR EM CONTACTO
					</h4>
	
					<div>
						<p class="s-text7 w-size27">
							Tens uma dúvida? Não exite em nos procurar estamos em Benguela, no edificio do mercado Municipal escritorio Nº 52,or ligue para (+244) 924 785 345
						</p>
	
						<div class="flex-m p-t-30">
							<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
						</div>
					</div>
				</div>
	
				<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
					<h4 class="s-text12 p-b-30">
						Projectos
					</h4>
	
					<ul>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Comer com eles
							</a>
						</li>
	
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Jogar bola com eles
							</a>
						</li>
	
						<li class="p-b-9">
							<a href="#" class="s-text7">
								A noite da fugueira
							</a>
						</li>
	
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Outro
							</a>
						</li>
					</ul>
				</div>
	
				<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
					<h4 class="s-text12 p-b-30">
						Links
					</h4>
	
					<ul>
					    <li class="p-b-9">
							<a href="{{route('apoiar')}}" class="s-text7">
								Apoiar a causa
							</a>
						</li>
						<li class="p-b-9">
							<a href="{{route('sermembro')}}" class="s-text7">
								Quero ser membro
							</a>
						</li>
	
						<li class="p-b-9">
							<a href="{{route('sobre')}}" class="s-text7">
								Sobre nós
							</a>
						</li>
	
						<li class="p-b-9">
							<a href="{{route('contactos')}}" class="s-text7">
								Contactos
							</a>
						</li>
	
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Doação
							</a>
						</li>
					</ul>
				</div>
	
				
	
				
			</div>
	
			<div class="t-center p-l-15 p-r-15">
				
	
				<div class="t-center s-text8 p-t-20">
					Copyright © 2019. </a>
				</div>
			</div>
		</footer>
	
	
	
		<!-- Back to top -->
		<div class="btn-back-to-top bg0-hov" id="myBtn">
			<span class="symbol-btn-back-to-top">
				<i class="fa fa-angle-double-up" aria-hidden="true"></i>
			</span>
		</div>
	
		<!-- Container Selection1 -->
		<div id="dropDownSelect1"></div>

    <!-- Javascript -->


<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('vendor/select2/select2.min.js')}}"></script>
        <script type="text/javascript">
            $(".selection-1").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('#dropDownSelect1')
            });
        </script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('vendor/slick/slick.min.js')}}"></script>
        <script type="text/javascript" src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('vendor/lightbox2/js/lightbox.min.js')}}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
        <script type="text/javascript">
            $('.block2-btn-addcart').each(function(){
                var nameActividae = $(this).parent().parent().parent().find('.block2-name').html();
                var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
                $(this).on('click', function(){
                    swal(nameProduct, "Para participar nesta actividade ligue para 994 490 116.", "success");
                });
            });

            $('.block2-btn-addwishlist').each(function(){
                var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to wishlist !", "success");
                });
            });
        </script>

    <!--===============================================================================================-->
        <script src="{{asset('js/main.js')}}"></script>

</body>
</html>
