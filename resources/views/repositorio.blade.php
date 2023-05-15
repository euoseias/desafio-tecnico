@extends('layouts.main')

@section('title', 'Zukkin Repository')

@section('content')
    <h2>Repositório GitHub de: {{ $username }}</h2>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Estrela</th>
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($repositories as $repository)
                <tr>
                    <td>{{ $repository['name'] }}</td>
                    <td>{{ $repository['description'] }}</td>
                    <td>{{ $repository['stargazers_count'] }}</td>
                    <td><a href="{{ $repository['html_url'] }}">Link</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <a href="{{ route('index') }}" class="btn btn-info">Nova busca</a>
@endsection
