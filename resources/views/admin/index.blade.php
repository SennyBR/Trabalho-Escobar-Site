@extends('template.index')

@section('title', 'Meus veículos')

@section('content')
    <h1>Meus anúncios</h1>

    <a href="{{ route('admin.veiculos.create') }}" class="btn btn-primary mb-3">
        Adicionar veículo
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Marca/Modelo</th>
                <th>Ano</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($veiculos as $v)
                <tr>
                    <td>
    <div class="d-flex gap-1">
        @foreach([$v->foto1, $v->foto2, $v->foto3] as $foto)
            <img src="{{ $foto }}"
                 style="width:70px; height:50px; object-fit:cover; border-radius:4px;">
        @endforeach
    </div>
</td>


                    <td>{{ $v->nome_veiculo }}</td>

                    <td>
                        {{ $v->marca }} / {{ $v->modelo }}
                    </td>

                    <td>{{ $v->ano }}</td>

                    <td>
                        R$ {{ number_format($v->valor, 2, ',', '.') }}
                    </td>

                    <td>
                        <a href="{{ route('admin.veiculos.edit', $v->id) }}"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>

                        <form action="{{ route('admin.veiculos.destroy', $v->id) }}"
                              method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Excluir?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $veiculos->links() }}
@endsection
