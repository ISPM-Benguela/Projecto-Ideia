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
            'actividades' => '',
        ];
        return view('paginas.index')->with($params);
    }
    public function contactos()
    {
        return view('paginas.contactos');
    }
    public function sobre()
    {
        return view('paginas.sobre');
    }
    public function sermembro()
    {
        return view('paginas.sermembro');
    }
    public function apoiar()
    {
        return view('paginas.apoiar');
    }
    public function blog()
    {
        $params = [
            //'artigos' => Artigo::paginate(3),
            'categorias' => Categoria::get(),
        ];

        return view('blog.index')->with($params);
    }
}
