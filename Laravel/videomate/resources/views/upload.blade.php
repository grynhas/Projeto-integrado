@extends('layouts.master')

@section('content')

<h1>Cadastro de Filmes</h1>

<form method="POST" action="/video/upload" enctype="multipart/form-data">
    @csrf
    {{ method_field('POST') }}

    <div class="form-group col-md-6 col-sm-12">
        <label for="titulo">Título</label>
        <input type="text" name="titulo" class="form-control" id="titulo">
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="sinopse">Sinopse</label>
        <input type="text" name="sinopse" class="form-control" id="sinopse">
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="imagem">Imagem</label>
        <input type="file" name="imagem" class="form-control" id="imagem">
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="genero">Gênero</label>
        <select class="form-control" name="genero" id="genero">
            <option value="">Selecione um gênero</option>
            @foreach ($generos as $genero)
            <option value="{{$genero->id}}">{{$genero->descricao}}</option>
            @endforeach
            
        </select>
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="ator">Ator Protagonista</label>
        <select class="form-control" name="ator" id="ator">
            <option value="">selecione um Protagonista</option>
            @foreach ($atores as $ator)
            <option value="{{$ator->id}}">{{$ator->nome}}</option> 
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-2">
        <button type="submit" class="form-control btn btn-primary">Enviar</button>
    </div>
</form>
@endsection