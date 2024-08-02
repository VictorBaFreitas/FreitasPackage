@extends('layouts.main')

@section('title', 'Movimentos do Pacote')

@section('content')
<div class="container mt-5">
    <h1>Movimentos do Pacote - {{ $pacote->id }}</h1>
    <a href="{{ route('movimentos.create', $pacote->id) }}" class="btn btn-primary mb-3">Adicionar Movimento</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data de Movimento</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movimentos as $movimento)
            <tr>
                <td>{{ $movimento->id }}</td>
                <td>{{ $movimento->data_movimento }}</td>
                <td>{{ $movimento->descricao }}</td>
                <td>
                    <a href="{{ route('movimentos.edit', $movimento->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('movimentos.destroy', $movimento->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este movimento?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
