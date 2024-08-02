@extends('layouts.main')

@section('title', 'Editar Movimento')

@section('content')
<div class="container mt-5">
    <h1>Editar Movimento</h1>

    <form action="{{ route('movimentos.update', $movimento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="data_movimento" class="form-label">Data de Movimento</label>
            <input type="date" class="form-control" id="data_movimento" name="data_movimento" value="{{ $movimento->data_movimento }}" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $movimento->descricao }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
