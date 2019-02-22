<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Perfil;
use Auth;
use App\User;

class PerfilController extends Controller
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
            'titulo' => 'Editar membro',
            'usuario' =>  User::findOrFail($id),
        ];

        return view('membro.usuarios.delete')->with($params); //pass user and roles data to view
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
            'titulo' => 'Ver Perfil',
            'perfil' => Perfil::find($id),
        ];

        return view('membro.perfil.cada')->with($params);
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
        $upload = null;


        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('imagem')->extension();
            

            $nameFile = "{$nome}.{$extensao}";

            $upload = $request->file('imagem')->storeAs('Perfil', $nameFile);

            if(!$upload )
            {
                return redirect()->route('perfil.edit', ['id' => $perfil->id])->with('success', 'Perfil actializado com sucesso');
            }
        }

        $perfil = Perfil::find($id);
        $perfil->imagem = $upload;
        $perfil->nome = $request->input('nome');
        $perfil->snome = $request->input('snome');
        $perfil->save();
        return redirect()->route('perfil.edit', ['id' => $perfil->id])->with('success', 'Perfil actializado com sucesso');
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
