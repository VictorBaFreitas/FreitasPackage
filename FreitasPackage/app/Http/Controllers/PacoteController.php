<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacote;
use App\Models\Movimento;

class PacoteController extends Controller
{
    public function index()
    {
        $pacotes = Pacote::all();
        return view('pacotes.index', compact('pacotes'));
    }

    public function create()
    {
        return view('pacotes.create');
    }

    public function store(Request $request)
    {
        $pacote = new Pacote;
        $pacote->destinatario = $request->destinatario;
        $pacote->endereco = $request->endereco;
        $pacote->data_envio = $request->data_envio;
        $pacote->status = $request->status;

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('image/package'), $imageName);
            $pacote->imagem = $imageName;
        }

        $pacote->save();
        return redirect('/')->with('msg', 'Pacote criado com sucesso!');
    }

    public function show($id)
    {
        $pacote = Pacote::findOrFail($id);
        return view('pacotes.show', compact('pacote'));
    }

    public function edit($id)
    {
        $pacote = Pacote::findOrFail($id);
        return view('pacotes.edit', compact('pacote'));
    }

    public function update(Request $request, $id)
    {
        $pacote = Pacote::findOrFail($id);
        $pacote->destinatario = $request->destinatario;
        $pacote->endereco = $request->endereco;
        $pacote->data_envio = $request->data_envio;
        $pacote->status = $request->status;

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('image/package'), $imageName);
            $pacote->imagem = $imageName;
        }

        $pacote->save();
        return redirect()->route('pacotes.index')->with('msg', 'Pacote atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $pacote = Pacote::findOrFail($id);

        if ($pacote->movimentos()->exists()) {
            return redirect()->route('pacotes.index')->with('error', 'Não é possível excluir um pacote com movimentos associados.');
        }

        $pacote->delete();
        return redirect()->route('pacotes.index')->with('msg', 'Pacote excluído com sucesso!');
    }
}

