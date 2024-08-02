@extends('layouts.main')

@section('title', 'Editar Pacote')

@section('content')
<div class="container">
    <h1 class="text-center m-5">Editar Pacote</h1>
    <hr>
    <form action="{{ route('pacotes.update', $pacote->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="destinatario" class="form-label">Destinatário</label>
            <input type="text" class="form-control" id="destinatario" name="destinatario" value="{{ $pacote->destinatario }}" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $pacote->endereco }}" required>
        </div>
        <div class="mb-3">
            <label for="data_envio" class="form-label">Data de Envio</label>
            <input type="date" class="form-control" id="data_envio" name="data_envio" value="{{ $pacote->data_envio }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="Pendente" {{ $pacote->status == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                <option value="Enviado" {{ $pacote->status == 'Enviado' ? 'selected' : '' }}>Enviado</option>
                <option value="Entregue" {{ $pacote->status == 'Entregue' ? 'selected' : '' }}>Entregue</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem (opcional)</label>
            <input type="file" class="form-control" id="imagem" name="imagem">
            <img src="/image/package/{{ $pacote->imagem }}" alt="{{ $pacote->destinatario }}" width="100" class="mt-2">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Salvar</button>
    </form>
</div>
@endsection
