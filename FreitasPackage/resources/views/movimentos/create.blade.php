@extends('layouts.main')

@section('title', 'Adicionar Movimento')

@section('content')
<div class="container mt-5">
    <h1>Adicionar Movimento ao Pacote {{ $pacote->id }}</h1>

    <form action="{{ route('movimentos.store', $pacote->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="data_movimento" class="form-label">Data do Movimento</label>
            <input type="date" class="form-control" id="data_movimento" name="data_movimento" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Adicionar Movimento</button>
    </form>
    <a href="{{ route('movimentos.index', $pacote->id) }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
