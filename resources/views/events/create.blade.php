@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Criar novo contato</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Nome Completo:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
    </div>


    <div class="form-group">
        <label for="contato">Contato:</label>
        <input type="text" class="form-control" id="contato" name="contato" placeholder="contato">
      </div>

      <div class="form-group">
        <label for="contato">E-mail:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email">
      </div>






    <input type="submit" class="btn btn-primary" value="Cadastrar">
  </form>
</div>

@endsection
