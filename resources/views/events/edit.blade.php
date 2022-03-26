
@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando contato</h1>
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Nome Completo:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" value="{{ $event->nome }}">
    </div>
    <div class="form-group">
        <label for="contato">Contato:</label>
        <input type="text" class="form-control" id="contato" name="contato" placeholder="contato" value="{{ $event->contato }}">
      </div>
      <div class="form-group">
        <label for="contato">E-mail:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{ $event->email }}">
      </div>

    <input type="submit" class="btn btn-primary" value=" Editar cadastro">
  </form>
</div>

@endsection
