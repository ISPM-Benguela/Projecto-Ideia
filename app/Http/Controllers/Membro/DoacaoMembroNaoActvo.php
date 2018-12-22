<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DoacaoNaoActivo;

class DoacaoMembroNaoActvo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $doacao = DoacaoNaoActivo::create([
            'nome' => $request->input('nome'),
            'talao' => $talao,
            'valor' => $request->input('valor'),
            'telefone' => $request->input('telefone'),
        ]);

        return redirect()->route('apoiar');
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
