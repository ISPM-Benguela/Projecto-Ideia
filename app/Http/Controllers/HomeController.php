<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
      
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = [
            'titulo' => 'Inicio',
        ];
        return view('paginas.index')->with($params);
    }
    public function contactos()
    {
        return view('paginas.contactos');
    }
    public function sobre()
    {
        $params = [
            'titulo' => 'Sobre nos',
        ];
        return view('paginas.sobre')->with($params);
    }
    public function sermembro()
    {
        $params = [
            'titulo' => 'Quero ser membro',
        ];
        return view('paginas.sermembro')->with($params);
    }
    public function apoiar()
    {
        $params = [
            'titulo' => 'Apoiar a organizacao',
        ];
        return view('paginas.apoiar')->with($params);
    }
    public function blog()
    {
        $params = [
            //'artigos' => Artigo::paginate(3),
            'titulo' => 'Blog',
        ];

        return view('blog.indexs')->with($params);
    }
}
