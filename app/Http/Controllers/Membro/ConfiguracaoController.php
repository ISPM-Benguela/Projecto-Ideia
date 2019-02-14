<?php

namespace App\Http\Controllers\Membro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Perfil;
use App\Carousel;
use Auth;

class ConfiguracaoController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;

        $params = [
            'perfil' => PErfil::find($id),
            'titulo' => 'Configuracao',
            'carousel' => Carousel::all(),
        ];
        return view('membro.configuracao.index')->with($params);
    }
    public function add_slide(){
        $id = Auth::user()->id;

        $params = [
            'perfil' => Perfil::find($id),
            'titulo' => 'Adicionar slide',
        ];

        return view('membro.configuracao.add_slide')->with($params);
    }

    public function salva_slide(Request $request)
    {
        $nomeFile = null;
        $upload = null;

        $this->validate($request, [
            'descricao' => 'required',
            'imagem' => 'required',
        ]);
        
        if ( $request->hasFile('imagem') && $request->file('imagem')->isValid())
        {
            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('imagem')->extension();
            $nomeFile = "{$nome}.{$extensao}";

            $upload = $request->file('imagem')->storeAs('Perfil', $nomeFile);

            if ( !$upload)
            {
                return redirect()
                    ->route('salva_slide')
                    ->with('error','Nao foi possivel guardar a imagem');
            }
        }

        $slide = Carousel::create([
            'descricao' => $request->input('descricao'),
            'imagem' => $upload,
        ]);

        return redirect()->route('configuracao.index')->with('success', 'Slide criado com sucesso!.');
    }
    public function slide_edit($id)
    {
        return 'editar';
    }
}
