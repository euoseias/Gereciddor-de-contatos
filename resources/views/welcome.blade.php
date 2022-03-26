@extends('layouts.main')

@section('title', 'Contantos')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Contatos cadastrados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Contato</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ações</th>
                      </tr>
                    </thead>

                    @foreach($events as $event)
                    <tbody>
                      <tr>
                        <td>{{ $event->nome }}</td>
                        <td>{{ $event->contato }}</td>
                        <td>{{ $event->email }}</td>
                        <td>

                        <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>

                        <form action="/events/{{ $event->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                        </form>

                    </td>
                      </tr>
                      <tr>
                    </tbody>
                    @endforeach
                  </table>
</div>
@endsection
