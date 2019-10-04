@extends('layouts.master')

@section('content')
    <div class="container">
        <section class="row">
            <header class="col-12">
                <h1 class="col-12 text-center">Resultados da Busca</h1>
                <p class="col-12 d-block text-center"><b>Vídeos</b></p>
            </header>
        </section>

        <section class="row">
            <article class="col-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Vídeo</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descrição</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach($videos as $video)
                        <tr>
                            <td>
                                <div class="thumbnail">
                                        <img src="https://img.youtube.com/vi/{{ $video->id_youtube }}/hqdefault.jpg" alt="">
                                        <div class="overlay">
                                            <a href="/video/reproduzir/{{ $video->id }}" class="icon" title="User Profile">
                                                <i class="fa fa-play-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                            </td>        
                            <td>{{$video->titulo}}</td>
                            <td>{{$video->descricao}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </article>
        </section>
    </div>
@endsection
