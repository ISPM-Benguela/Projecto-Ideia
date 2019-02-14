<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use APp\Perfil;

class HomeController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;

        $params = [
            'perfil' => Perfil::find($id),
            'titulo' => 'Painel de controle',
        ];
        return view('membro.home.index')->with($params);
    }
}
