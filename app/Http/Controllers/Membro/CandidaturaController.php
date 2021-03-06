<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Perfil;
use App\Candidatura;
use Auth;
use App\User;

class CandidaturaController extends Controller
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
            'cadindatos' => Candidatura::all(),
        ];
        return view('membro.candidatos.index')->with($params);
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
        $this->validate($request, [
            'nome' => 'required',
            'no_bi' => 'required|unique:candidaturas',
            'mensagem' => 'required',
        ]);

        $candidato = Candidatura::create([
            'nome' => $request->input('nome'),
            'no_bi' => $request->input('no_bi'),
            'mensagem' => $request->input('mensagem'),
        ]);

        return redirect()->route('sermembro');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = User::find($id);
        $id2 = Auth::user()->id;


        $params = [
             'perfil' => Perfil::find($id2),
            'user' => $user,
        ];

        return view('membro.usuarios.delete')->with($params);
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
