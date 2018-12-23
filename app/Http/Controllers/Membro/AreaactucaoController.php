<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\AreaActuacao;

class AreaactucaoController extends Controller
{

    public function principal()
    {
        $params = [
            'titulo' => 'Principal',
        ];
        return view('membro.home.index')->with($params);
    }
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
        try{

            $params = [
                'titulo' => 'Eliminar',
                'area' => AreaActuacao::findOrFail($id),
            ];

            return view('membro.area.delete')->with($params);
        }
        catch (ModelNotFoundException $ex) 
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try
        {
            $params = [
                'titulo' => 'Editar ',
                'area' => AreaActuacao::findOrFail($id),
            ];

            return view('membro.area.edit')->with($params);
        }
        catch(ModelNotFoundException $ex)
        {

        }
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
        $nameFile = null;

        try
        {
            $this->validate($request, [
                'titulo' => 'required|unique:area_actuacaos,titulo,'.$id,
                'descricao' => 'required',
            ]);

            $area = AreaActuacao::findOrFail($id);

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

            $area->titulo = $request->input('titulo');
            $area->imagem = $nameFile;
            $area->descricao = $request->input('descricao');

            $area->save();

            return redirect()->route('area.index')->with('success', "A area (<strong>$area->titulo</strong>) foi actualizada.");
        }
        catch (ModelNotFoundException $ex) 
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $area = AreaActuacao::findOrFail($id);

            $area->delete();

            return redirect()->route('area.index')->with('success', "Eliminada area com sucesso!.");
        }
        catch (ModelNotFoundException $ex) 
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }
}
