<?php
$veiculo = $veiculo;
?>
@extends('template.index')
@section('title', $veiculo->nome_veiculo)
@section('content')
  <div class="row">
    <div class="col-md-8">
      <img src="{{ $veiculo->foto1 }}" style="width:100%; height:420px; object-fit:cover; border-radius:12px;">
      <div class="card card-custom mt-3 p-3">
        <h3>{{ $veiculo->nome_veiculo }}</h3>
        <p><strong>{{ $veiculo->marca }} - {{ $veiculo->modelo }}</strong></p>
        <p>Ano: {{ $veiculo->ano }} • Quilometragem: {{ number_format($veiculo->quilometragem,0,',','.') }} km</p>
        <p class="h4 text-success">R$ {{ number_format($veiculo->valor,2,',','.') }}</p>
        <hr>
        <p>{{ $veiculo->descricao }}</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-custom p-3">
        <h5>Contato do proprietário</h5>
        <p><strong>Nome:</strong> {{ $veiculo->proprietario ?? '---' }}</p>
        <p><strong>Contato:</strong> {{ $veiculo->contato ?? '---' }}</p>
      </div>
    </div>
  </div>
@endsection
