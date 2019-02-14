<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\Artigo;
use App\Perfil;

class ArtigoController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = AUth::user()->id;

        $params = [
            'titulo' => 'Artigos',
            'perfil' => Perfil::find($id),
            'artigos' => Artigo::paginate(10),
        ];
        return view('membro.artigos.index')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;

        $params = [
            'perfil' => Perfil::find($id),
            'titulo' => 'Artigos',
        ];
        return  view('membro.artigos.create')->with($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $nomeFile = null;
        $upload = null;

        $this->validate($request, [
            
            'titulo' => 'required',
            'imagem' => 'required',
            'conteudo' => 'required',
        ]);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('imagem')->extension();

            $nameFile = "{$nome}.{$extensao}";

            $upload = $request->file('imagem')->storeAs('Artigos', $nameFile);

            if(!$upload )
            {
                return redirect()
                    ->route('artigo.create')
                    ->with('error','Falha ao fazer upload');
            }
        }
        $artigo = Artigo::create([
            'titulo' => $request->input('titulo'),
            'imagem' => $upload,
            'conteudo' => $request->input('conteudo'),
            
            
        ]);

        return redirect()->route('artigo.index')->with('success',"Cadastrado com sucesso.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Auth::user()->id;

        $params = [
            'perfil' => Perfil::find($id),
            'titulo' => 'eliminando',
            'artigo' => Artigo::find($id),
        ];
        return view('membro.artigos.delete')->with($params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Auth::user()->id;

        $params = [
            'perfil' => Perfil::find($id),
            'titulo' => 'Editar',
            'artigo' => Artigo::find($id),
        ];
        return view('membro.artigos.edit')->with($params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nomeFile = null;
        $upload = null;

        $this->validate($request, [
            'titulo' => 'required',
            'imagem' => 'required',
            'conteudo' => 'required',
        ]);

        $artigo = Artigo::find($id);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('imagem')->extension();

            $nameFile = "{$nome}.{$extensao}";

            $upload = $request->file('imagem')->storeAs('Artigos', $nameFile);

            if(!$upload )
            {
                return redirect()
                    ->route('artigo.create')
                    ->with('error','Falha ao fazer upload');
            }
        }
        $artigo->titulo = $request->input('titulo');
        $artigo->imagem = $upload;
        $artigo->conteudo = $request->input('conteudo');

        $artigo->save();

        return redirect()->route('artigo.index')->with('success', 'Artigo actualizado com sucesso.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
