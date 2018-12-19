<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AreaActuacao;

class AreaactucaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = [
            'titulo' => 'Area de actuacao',
            'areas' => AreaActuacao::all(),
        ];
        return view('membro.area.index')->with($params);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $params = [
            'titulo' => 'Cadastrar area',
        ];
        return view('membro.area.create')->with($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nameFile = null;

        $this->validate($request, [
            'titulo' => 'required|unique:area_actuacaos',
            'imagem' => 'required',
            'descricao' => 'required',
        ]);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('imagem')->extension();

            $nameFile = "{$nome}.{$extensao}";

            $upload = $request->file('imagem')->storeAs('AreaActuacao', $nameFile);

            if(!$upload )
            {
                return redirect()
                    ->route('area.create')
                    ->with('error','Falha ao fazer upload');
            }
        }
        $area = AreaActuacao::create([
            'titulo' => $request->input('titulo'),
            'imagem' => $upload,
            'descricao' => $request->input('descricao'),
        ]);

        return redirect()->route('area.index')->with('success',"Area <strong>$area->titulo</strong> cadastrado.");
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
        //
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
        //
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
