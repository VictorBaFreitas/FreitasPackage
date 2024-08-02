@extends('layouts.main')

@section('title', 'Pacotes')

@section('content')
<div class="container mt-5">
    <h1>Lista de Pacotes</h1>

    @if(session('msg'))
        <div class="alert alert-success">{{ session('msg') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <a href="{{ route('pacotes.create') }}" class="btn btn-primary mb-3">Adicionar Pacote</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Destinatário</th>
                <th>Endereço</th>
                <th>Data de Envio</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pacotes as $pacote)
            <tr>
                <td>{{ $pacote->id }}</td>
                <td>{{ $pacote->destinatario }}</td>
                <td>{{ $pacote->endereco }}</td>
                <td>{{ $pacote->data_envio }}</td>
                <td>{{ $pacote->status }}</td>
                <td>
                    <a href="{{ route('pacotes.show', $pacote->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('pacotes.edit', $pacote->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('pacotes.destroy', $pacote->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este pacote?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
