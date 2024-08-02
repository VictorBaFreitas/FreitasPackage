@extends('layouts.main')

@section('title', 'Criar Pacote')

@section('content')
<div class="container">
    <h1 class="text-center m-5">Criar Novo Pacote</h1>
    <hr>
    <form action="{{ route('pacotes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="destinatario" class="form-label">Destinatário</label>
            <input type="text" class="form-control" id="destinatario" name="destinatario" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>
        <div class="mb-3">
            <label for="data_envio" class="form-label">Data de Envio</label>
            <input type="date" class="form-control" id="data_envio" name="data_envio" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="Pendente">Pendente</option>
                <option value="Enviado">Enviado</option>
                <option value="Entregue">Entregue</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem (opcional)</label>
            <input type="file" class="form-control" id="imagem" name="imagem">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Salvar</button>
    </form>
</div>
@endsection
