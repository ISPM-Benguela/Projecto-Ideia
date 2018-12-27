<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Carousel;

class ConfiguracaoController extends Controller
{
    public function index()
    {
        $params = [
            'titulo' => 'Configuracao',
            'carousel' => Carousel::all(),
        ];
        return view('membro.configuracao.index')->with($params);
    }
    public function add_slide(){
        $params = [
            'titulo' => 'Adicionar slide',
        ];

        return view('membro.configuracao.add_slide')->with($params);
    }

    public function salva_slide(Request $request)
    {
        return "salva slide";
    }
}
