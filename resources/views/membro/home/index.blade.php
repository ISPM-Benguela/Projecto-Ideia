@extends('layouts.membro')

@section('head')
<link href="{{asset('membros/css/index.css')}}" rel="stylesheet">
@stop



@section('principal')
<div class="jumbotron img-responsive" >
    <h2>Seja bem-vindo a pagina restrita do membro!</h2>
    @role('Admin')
        Admin
    @endrole
</div>

<h2 style="text-align: center; text-transform: uppercase;">O que temos para si.</h2>

<p style="text-align: center">De acordo com o nivel de acesso, o membro aqui pode fazer de tudo um pouco que fazemos no nosso escritorio</p>

<div class="container">
    <div class="row seccao" style="margin-left: 120px;">
        <div class="parte col-md-4 col-lg-4 col-xs-4" style="background: yellow;">
            <h3>Gerir documentos</h3>

            <i class="fa fa-file-text"></i>
            <p style="text-align: justify;">Este é um modulo do sistema onde os membros podem compartilhar documentos 
                e os  membros com mais previlegios podem fazer Gestão dos mesmo documentos.
            </p>
        </div>
        <div class="parte col-md-4 col-lg-4 col-xs-4" style="background: #233b60;">
           <h3>Gerir  Membros</h3>
           <i class="fa fa-group"></i>

           <p style="text-align: justify;">Este é um modulo do sistema onde os membros podem compartilhar documentos 
                e os  membros com mais previlegios podem fazer Gestão dos mesmo documentos.
            </p>
        </div>
        <div class="parte col-md-4 col-lg-4 col-xs-4" style="background: #5e636b;">
            <h3>Gerir Actividades</h3>

            <i class="fa fa-calendar"></i>

            <p style="text-align: justify;">Este é um modulo do sistema onde os membros podem compartilhar documentos 
                    e os  membros com mais previlegios podem fazer Gestão dos mesmo documentos.
            </p>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@stop