<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\MembroNaoActivo;
use App\Perfil;

class DoacaoMembroNaoActvo extends Controller
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
            'titulo' => 'Doacao de membro nao activo',
            'membros' => MembroNaoActivo::all(),
        ];
        return view('membro.naoactivo.index')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            'doacao' => MembroNaoActivo::find($id),
            'titulo' => "Eliminar doacao",
        ];
        return view('membro.naoactivo.delete')->with($params);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doacao = MembroNaoActivo::find($id);

        return Storage::download("Talao/". $doacao->talao);
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
        $id = Auth::user()->id;

        $params = [
            'perfil' => Perfil::find($id),
            'titulo' => 'Eliminar Doacao',
        ];

        $doacao = MembroNaoActivo::findOrFail($id);
        $doacao->delete();

        return redirect()->route('membronaoactivo.index', 'Doacao eliminado com sucesso!');
    }
    public function download($id)
    {
        return "download";
    }

}
