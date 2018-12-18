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
					<form class="leave-comment">
						<h4 class="m-text26 p-b-36 p-t-15">
							Envia - nos a tua doação
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Nome completo">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Telefone">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email ">
						</div>
						<div class="bo4 of-hidden size15 m-b-20">
								<input class="sizefull s-text7 p-l-22 p-r-22" type="file" >
						</div>


							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@stop