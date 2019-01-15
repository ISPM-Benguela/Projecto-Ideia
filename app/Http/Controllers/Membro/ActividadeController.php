<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actividade;

class ActividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = [
            'titulo' => 'Actividades',
            'actividades' => Actividade::all(),
        ];
        return view('membro.actividade.index')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $params = [
            'titulo' => 'Cadastrar actividade',
        ];
        return view('membro.actividade.create')->with($params);
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
            'local' => 'required',
            'data_inicio' => 'required',
            'data_termino' => 'required',
        ]);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('imagem')->extension();

            $nameFile = "{$nome}.{$extensao}";

            $upload = $request->file('imagem')->storeAs('Actividades', $nameFile);

            if(!$upload )
            {
                return redirect()
                    ->route('actividade.create')
                    ->with('error','Falha ao fazer upload');
            }
        }
        $artigo = Actividade::create([
            'titulo' => $request->input('titulo'),
            'imagem' => $upload,
            'local' => $request->input('local'),
            'data_inicio' => $request->input('data_inicio'),
            'data_termino' => $request->input('data_termino'),
            
            
        ]);

        return redirect()->route('actividade.index')->with('success',"Cadastrado com sucesso.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $params = [
            'titulo' => 'Editar actividade',
            'actividade' => Actividade::find($id),
        ];
        return view('membro.actividade.edit')->with($params);
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
        $this->validate($request, [
            'titulo' => 'required',
            'imagem' => 'required',
            'local' => 'required',
            'data_inicio' => 'required',
            'data_termino' => 'required',
        ]);

        $actividade = Actividade::findOrFail($id);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('imagem')->extension();

            $nameFile = "{$nome}.{$extensao}";

            $upload = $request->file('imagem')->storeAs('Actividades', $nameFile);

            if(!$upload )
            {
                return redirect()
                    ->route('acitividade.create')
                    ->with('error','Falha ao fazer upload');
            }
        }

        $actividade->titulo = $request->input('titulo');
        $actividade->imagem = $upload;
        $actividade->local = $request->input('local');
        $actividade->data_inicio = $request->input('data_inicio');
        $actividade->data_termino = $request->input('data_termino');

        $actividade->save();
        return redirect()->route('actividade.index')->with('success',"Actividade actualizado com sucesso.");
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

