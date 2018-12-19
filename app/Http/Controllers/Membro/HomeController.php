<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {
        $params = [
            'titulo' => 'Painel de controle',
        ];
        return view('membro.home.index')->with($params);
    }
}
