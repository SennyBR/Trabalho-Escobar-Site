@extends('template.index')
@section('title','Registrar')
@section('content')
  <h2>Registrar</h2>
  <form method="POST" action="{{ route('register.post') }}">
    @csrf
    <div class="mb-3">
      <label>Nome</label>
      <input name="name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input name="email" type="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Senha</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Confirmar senha</label>
      <input type="password" name="password_confirmation" class="form-control" required>
    </div>
    <button class="btn btn-success">Registrar</button>
  </form>
@endsection
