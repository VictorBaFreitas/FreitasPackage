<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacote;
use App\Models\Movimento;

class MovimentoController extends Controller
{
    public function index($pacote_id)
    {
        $pacote = Pacote::findOrFail($pacote_id);
        $movimentos = $pacote->movimentos;
        return view('movimentos.index', compact('pacote', 'movimentos'));
    }

    public function create($pacote_id)
    {
        $pacote = Pacote::findOrFail($pacote_id);
        return view('movimentos.create', compact('pacote'));
    }

    public function store(Request $request, $pacote_id)
    {
        $pacote = Pacote::findOrFail($pacote_id);

        $movimento = new Movimento();
        $movimento->pacote_id = $pacote->id;
        $movimento->data_movimento = $request->data_movimento;
        $movimento->descricao = $request->descricao;

        $movimento->save();

        return redirect()->route('movimentos.index', $pacote->id)->with('msg', 'Movimento adicionado com sucesso!');
    }

    public function edit($id)
    {
        $movimento = Movimento::findOrFail($id);
        return view('movimentos.edit', compact('movimento'));
    }

    public function update(Request $request, $id)
    {
        $movimento = Movimento::findOrFail($id);
        $movimento->data_movimento = $request->data_movimento;
        $movimento->descricao = $request->descricao;
        $movimento->save();

        return redirect()->route('movimentos.index', $movimento->pacote_id)->with('msg', 'Movimento atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $movimento = Movimento::findOrFail($id);
        $movimento->delete();

        return back()->with('msg', 'Movimento removido com sucesso!');
    }
}
