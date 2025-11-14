@extends('template.index')
@section('title','Entrar')
@section('content')
  <h2>Entrar</h2>
  <form method="POST" action="{{ route('login.post') }}">
    @csrf
    <div class="mb-3">
      <label>Email</label>
      <input name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Senha</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    @if($errors->has('login')) <div class="alert alert-danger">{{ $errors->first('login') }}</div> @endif
    <button class="btn btn-primary">Entrar</button>
  </form>
@endsection
