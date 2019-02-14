<ul class="nav side-menu">
    <li><a hef="{{route('principal')}}"><i class="fa fa-home"></i> Inicio </a></li>
     <li><a><i class="fa fa-edit"></i> Painel de controle <span class="fa fa-chevron-down"></span></a>
     <ul class="nav child_menu">
        <li><a href="{{route('usuarios.index')}}">Membros</a></li>
      </ul>
      </li>
     <li><a><i class="fa fa-money"></i> Doação <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
      <li><a href="{{route('membroactivo.index')}}">Doação de Membro activo</a></li>
     </ul>
      </li>
    <li><a href="{{route('inicio')}}"><i class="fa fa-eye"></i> Visuaizar o Site </a></li>
    <li><a href="{{route('sugestao.index')}}"><i class="fa fa-rss"></i> Sugestão </a></li>
      <li><a href="{{route('documentos.index')}}"><i class="fa fa-file-text"></i> Documentos </a></li>
     
 </ul>