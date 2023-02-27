@extends('layouts.app');

@section('title', 'LISTAGEM');


@section('content')

    <div class="container mt-5">

        <div class="row">
            <div class="col-sm 10">
                <h1>Listagem de Jogos</h1>
            </div>

            <div class="col-sm 12">
                <a href="{{ route('jogos.create') }}" class="btn btn-success">Novo Jogo</a>
            </div>

        </div>

        <table class="table m-3">
            <thead>
                <tr>
                    <th scope="col">Identificador</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Lançamento</th>
                    <th scope="col">Valor</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jogos as $jogo)
                    <tr>
                        <th>{{ $jogo->id }}</th>
                        <th>{{ $jogo->nome }}</th>
                        <th>{{ $jogo->categoria }}</th>
                        <th>{{ $jogo->ano_criacao }}</th>
                        <th>{{ $jogo->valor }}</th>
                        <th>
                            <a href="{{ route('jogos.edit', ['id' => $jogo->id]) }}">Editar</a>
                            <form action="{{ route('jogos.destroy', ['id' => $jogo->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </th>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
