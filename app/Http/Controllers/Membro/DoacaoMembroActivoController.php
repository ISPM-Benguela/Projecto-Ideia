<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Storage;
use App\MembroActivo;
use APp\Perfil;

class DoacaoMembroActivoController extends Controller
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
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
            'titulo' => 'Cadastra doacao',
            'doacaos' => MembroActivo::all(), 
        ];
        return view('membro.doacaoactivo.index')->with($params);
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
            'titulo' => 'Cadastrar Doacao de membros activo',
        ];
        return view('membro.doacaoactivo.create')->with($params);
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
            
            'talao' => 'required',
            'valor' => 'required',
        ]);

        if ($request->hasFile('talao') && $request->file('talao')->isValid()){

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('talao')->extension();

            $nameFile = "{$nome}.{$extensao}";

            $upload = $request->file('talao')->storeAs('Talao', $nameFile);

            if(!$upload )
            {
                return redirect()
                    ->route('membroactivo.create')
                    ->with('error','Falha ao fazer upload');
            }
        }
        $area = MembroActivo::create([
            
            'user_id' => $request->input('usuario'),
            'talao' => $upload,
            'valor' => $request->input('valor'),
            
            
        ]);

        return redirect()->route('membroactivo.index')->with('success',"Cadastrado com sucesso.");

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
            'doacao' => MembroActivo::find($id),
            'titulo' => 'Eliminar',
        ];

        return view('membro.doacaoactivo.delete')->with($params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doacao = MembroActivo::find($id);


        return Storage::download($doacao->talao);
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
        $doacao = MembroActivo::find($id);

        $doacao->delete();

        return redirect()->route('membroactivo.index')->with('success', 'Doação eliminado com sucesso.');
    }

   
}
