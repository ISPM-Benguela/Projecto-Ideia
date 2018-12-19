<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use AreaActuacao;

class HomeController extends Controller
{
    public function index()
    {
        $params = [
            'titulo' => 'Painel de controle',
            'areas' => AreaActuacao::take(3),
        ];
        return view('membro.home.index')->with($params);
    }
}
