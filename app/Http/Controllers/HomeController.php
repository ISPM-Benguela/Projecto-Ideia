<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AreaActuacao;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\MembroNaoActivo;
use App\Actividade;
use App\Artigo;
use App\Carousel;

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
            'areas' => AreaActuacao::take(3)->orderBy('created_at', 'desc')->get(),
            'actividades' => Actividade::all(),
            'carousel' => Carousel::all(),
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
    public function store(Request $request)
    {
        $talao = null;

        $this->validate($request, [
            'nome' => 'required',
            'talao' => 'required',
            'valor' => 'required',
            'telefone' => 'required',
        ]);

        if ($request->hasFile('talao') && $request->file('talao')->isValid()){

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('talao')->extension();

            $talao = "{$nome}.{$extensao}";

            $upload = $request->file('talao')->storeAs('Talao', $talao);

            if(!$upload )
            {
                return redirect()
                    ->route('apoiar')
                    ->with('error','Falha ao fazer upload');
            }
        }
        
        $doacao = MembroNaoActivo::create([
            'nome' => $request->input('nome'),
            'talao' => $talao,
            'valor' => $request->input('valor'),
            'telefone' => $request->input('telefone'),
        ]);

        return redirect()->route('apoiar')->with('success',"Cadastrado {$doacao->nome } doacao com sucesso.");
    }
    public function blog()
    {
        $params = [
            'artigos' => Artigo::paginate(10),
            'mais_vistos' => Artigo::orderBy('titulo','ASC')->get(),
            'titulo' => 'Blog',
        ];

        return view('blog.index')->with($params);
    }
}
