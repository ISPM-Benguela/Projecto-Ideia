<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Documentos;
use App\Perfil;
use Auth;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;

        $params = [
            'perfil' => Perfil::find($id),
            'titulo' => 'Documentos',
            'documentos' => Documentos::all(),
        ];
        return view('membro.documento.index')->with($params);
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
            'titulo' => 'Documentos',
        ];
        return view('membro.documento.create')->with($params);
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
            'documento' => 'required',
        ]);

        if ($request->hasFile('documento') && $request->file('documento')->isValid()){

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('documento')->extension();

            $nameFile = "{$nome}.{$extensao}";

            $upload = $request->file('documento')->storeAs('Documentos', $nameFile);

            if(!$upload )
            {
                return redirect()
                    ->route('documentos.create')
                    ->with('error','Falha ao fazer upload');
            }
        }
        $docs  = Documentos::create([
            'titulo' => $request->input('titulo'),
            'documento' => $upload,
            'carregado' => $request->input('membro'),
        ]);

        return redirect()->route('documentos.index')->with('success',"Area <strong>$docs->titulo </strong> cadastrado.");
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
            'titulo' => 'Eliminar documento',
            'documento' => Documentos::find($id),
        ];
        return view('membro.documento.delete')->with($params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documento = Documentos::find($id);


        return Storage::download($documento->documento);
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
        $documento = Documentos::find($id);

        $documento->delete();

        return redirect()->route('documentos.index')->with('success', 'Documento eliminado com sucesso.');
    }
}
