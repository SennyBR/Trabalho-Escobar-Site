@extends('template.index')
@section('title','Cadastrar veículo')
@section('content')
  <h1>Novo Veículo</h1>
  <form method="POST" action="{{ route('admin.veiculos.store') }}">
    @csrf
    <div class="mb-3">
      <label>Nome do veículo</label>
      <input name="nome_veiculo" value="{{ old('nome_veiculo') }}" class="form-control" required>
    </div>

    <div class="row mb-3">
      <div class="col">
        <label>Marca</label>
        <input name="marca" value="{{ old('marca') }}" class="form-control" required>
      </div>

      <div class="col">
        <label>Modelo</label>
      <input name="modelo" value="{{ old('modelo') }}" class="form-control" required>
    </div>

      <div class="col">
        <label>Cor</label>
        <input name="cor" value="{{ old('cor') }}" class="form-control" required>
    </div>
    </div>
  
    <div class="row mb-3">
      <div class="col">
        <label>Ano</label>
        <input name="ano" value="{{ old('ano') }}" class="form-control" required>
    </div>

      <div class="col">
        <label>Quilometragem</label>
        <input name="quilometragem" value="{{ old('quilometragem') }}" class="form-control" required>
    </div>
      <div class="col">
        <label>Valor</label>
        <input name="valor" value="{{ old('valor') }}" class="form-control" required>
    </div>


    <div class="mb-3">
      <label>Descrição</label>
    <textarea name="descricao" class="form-control">{{ old('descricao') }}</textarea>
   
    <div class="mb-3"><label>Foto 1 (URL)</label>
    <input name="foto1" value="{{ old('foto1') }}" class="form-control" required>
  </div>

    <div class="mb-3">
      <label>Foto 2 (URL)</label>
      <input name="foto2" value="{{ old('foto2') }}" class="form-control" required>
  </div>

    <div class="mb-3">
      <label>Foto 3 (URL)</label>
      <input name="foto3" value="{{ old('foto3') }}" class="form-control" required>
  </div>

    <div class="mb-3">
      <label>Proprietário</label>
      <input name="proprietario" value="{{ old('proprietario') }}" class="form-control">
  </div>

    <div class="mb-3">
      <label>Contato</label>
      <input name="contato" value="{{ old('contato') }}" class="form-control">
  </div>

    <button class="btn btn-success">Salvar</button>
  </form>
@endsection
