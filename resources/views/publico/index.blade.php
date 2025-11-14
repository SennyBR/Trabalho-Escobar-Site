@extends('template.index')
@section('title','Carros disponíveis')
@section('content')
  <h1 class="mb-4">Carros disponíveis</h1>
  <div class="row">
    @foreach($veiculos as $veiculo)
      <div class="col-md-4 mb-4">
        <div class="card card-custom">
          <a href="#card{{ $veiculo->id }}" style="text-decoration:none;color:inherit;">
            <img src="{{ $veiculo->foto1 }}" class="card-img-top" alt="foto">
            <div class="card-body">
              <h5 class="card-title">{{ $veiculo->nome_veiculo }}</h5>
              <p class="mb-1"><strong>{{ $veiculo->marca }}</strong> • {{ $veiculo->modelo }}</p>
              <p class="mb-1">Ano: {{ $veiculo->ano }} • {{ number_format($veiculo->quilometragem,0,',','.') }} km</p>
              <p class="h5 text-success">R$ {{ number_format($veiculo->valor,2,',','.') }}</p>
            </div>
          </a>
        </div>
        <div id="card{{ $veiculo->id }}" class="card-expanded p-3">
          <div class="row">
            <div class="col-md-8">
              <img src="{{ $veiculo->foto1 }}" style="width:100%; height:360px; object-fit:cover; border-radius:8px;">
              <div class="mt-3">
                <h3>{{ $veiculo->nome_veiculo }}</h3>
                <p><strong>{{ $veiculo->marca }} - {{ $veiculo->modelo }}</strong></p>
                <p>Ano: {{ $veiculo->ano }} • Quilometragem: {{ number_format($veiculo->quilometragem,0,',','.') }} km</p>
                <p class="h4 text-success">R$ {{ number_format($veiculo->valor,2,',','.') }}</p>
                <hr>
                <p>{{ $veiculo->descricao }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-custom p-3" style="background:#f8f9fa;color:#111;">
                <h5>Contato do proprietário</h5>
                <p><strong>Nome:</strong> {{ $veiculo->proprietario ?? '---' }}</p>
                <p><strong>Contato:</strong> {{ $veiculo->contato ?? '---' }}</p>
                <div class="mt-3">
                  <a href="#" class="btn btn-secondary">Fechar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <div class="d-flex justify-content-center">
    {{ $veiculos->links() }}
  </div>
@endsection
