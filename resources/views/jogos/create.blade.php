@extends('layouts.app')

@section('title', 'LISTAGEM')


@section('content')

    <div class="container">
        <h1>Adicionar Jogos</h1>
        <a href="{{ route('jogos.index') }}" class="btn btn-success">Voltar</a>
        <hr>
        <form action="{{ route('jogos.store') }}" method="post">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">NOME:</label>
                    <input type="text" name="nome" class="form-control" placeholder="Informe o nome">
                </div>

                <div class="form-group">
                    <label for="nome">CATEGORIA:</label>
                    <input type="text" name="categoria" class="form-control" placeholder="Informe a categoria">
                </div>

                <div class="form-group">
                    <label for="nome">LANÇAMENTO:</label>
                    <input type="text" name="ano_criacao" class="form-control" placeholder="Informe o ano de lançamento">
                </div>

                <div class="form-group">
                    <label for="nome">VALOR:</label>
                    <input type="text" name="valor" class="form-control" placeholder="Informe o valor">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </div>
            </div>
            </div>
        </form>
    </div>

@endsection
