@extends('layouts.main')

@section('title', 'Detalhes do Pacote')

@section('content')
<div class="container">
    <h1 class="text-center m-5">Detalhes do Pacote</h1>
    <hr>
    <div class="card my-5">
        <img src="/image/package/{{ $pacote->imagem }}" alt="Pacote">
        <div class="card-body">
            <h5 class="card-title">Destinatário: {{ $pacote->destinatario }}</h5>
            <p class="card-text">Endereço: {{ $pacote->endereco }}</p>
            <p class="card-text">Data de Envio: {{ \Carbon\Carbon::parse($pacote->data_envio)->format('d/m/Y') }}</p>
            <p class="card-text">Status: {{ $pacote->status }}</p>
            <a href="{{ route('movimentos.index', $pacote->id) }}" class="btn btn-primary">Ver Movimentacao</a>
        </div>
        <a href="{{ route('pacotes.index') }}" class="btn btn-primary">Voltar para a lista</a>
    </div>
</div>
@endsection
