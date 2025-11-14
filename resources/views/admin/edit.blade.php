@extends('template.index')
@section('title','Editar veículo')

@section('content')
<h1 class="mb-4">Editar veículo</h1>

<form method="POST" action="{{ route('admin.veiculos.update', $veiculo->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nome do veículo</label>
        <input 
            name="nome_veiculo" 
            value="{{ old('nome_veiculo', $veiculo->nome_veiculo) }}" 
            class="form-control" 
            required
        >
    </div>

    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Marca</label>
            <input 
                name="marca" 
                value="{{ old('marca', $veiculo->marca) }}" 
                class="form-control" 
                required
            >
        </div>

        <div class="col">
            <label class="form-label">Modelo</label>
            <input 
                name="modelo" 
                value="{{ old('modelo', $veiculo->modelo) }}" 
                class="form-control" 
                required
            >
        </div>

        <div class="col">
            <label class="form-label">Cor</label>
            <input 
                name="cor" 
                value="{{ old('cor', $veiculo->cor) }}" 
                class="form-control" 
                required
            >
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Ano</label>
            <input 
                name="ano" 
                value="{{ old('ano', $veiculo->ano) }}" 
                class="form-control" 
                required
            >
        </div>

        <div class="col">
            <label class="form-label">Quilometragem</label>
            <input 
                name="quilometragem" 
                value="{{ old('quilometragem', $veiculo->quilometragem) }}" 
                class="form-control" 
                required
            >
        </div>

        <div class="col">
            <label class="form-label">Valor</label>
            <input 
                name="valor" 
                value="{{ old('valor', $veiculo->valor) }}" 
                class="form-control" 
                required
            >
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea 
            name="descricao" 
            class="form-control" 
            rows="4"
        >{{ old('descricao', $veiculo->descricao) }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Foto 1 (URL)</label>
        <input 
            name="foto1" 
            value="{{ old('foto1', $veiculo->foto1) }}" 
            class="form-control" 
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Foto 2 (URL)</label>
        <input 
            name="foto2" 
            value="{{ old('foto2', $veiculo->foto2) }}" 
            class="form-control" 
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Foto 3 (URL)</label>
        <input 
            name="foto3" 
            value="{{ old('foto3', $veiculo->foto3) }}" 
            class="form-control" 
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Proprietário</label>
        <input 
            name="proprietario" 
            value="{{ old('proprietario', $veiculo->proprietario) }}" 
            class="form-control"
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Contato</label>
        <input 
            name="contato" 
            value="{{ old('contato', $veiculo->contato) }}" 
            class="form-control"
        >
    </div>

    <button class="btn btn-success">Atualizar</button>

</form>
@endsection
