@extends('template.index')

@section('title', 'Meu perfil')

@section('content')
    <h1>Editar perfil</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf

        <div class="mb-3">
            <label>Nome</label>
            <input name="name"
                   value="{{ old('name', $user->name) }}"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input name="email"
                   type="email"
                   value="{{ old('email', $user->email) }}"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Nova senha (deixe em branco para manter)</label>
            <input name="password"
                   type="password"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Confirmar nova senha</label>
            <input name="password_confirmation"
                   type="password"
                   class="form-control">
        </div>

        <button class="btn btn-primary">
            Salvar
        </button>
    </form>
@endsection
