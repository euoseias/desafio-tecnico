@extends('layouts.main')

@section('title', 'Zukkin')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h5>Erro ao acessar um repositório do GitHub informe um usuário válido</h5><br>
        <h1>Repositorios GitHub</h1>
        <br>
        <form action="{{ route('repositories') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Informe um nome de usuário do GitHub:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Nome do usuário"
                    required>
            </div>
            <input type="submit" class="btn btn-primary" value="Buscar">
        </form>
    </div>

@endsection
