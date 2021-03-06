@extends('layouts.master')

@section('content')

<section class="botoes bottom-nav container-fluid navbar-expand-md navbar-dark bg-dark header2">
        <li class="row">
            @foreach ($tags as $tag)
            <a
                href="/tag/busca/{{ $tag->tag }}" class="link col-2" name="tag" id="tag"> #{{ $tag->tag }} 
            </a>
            @endforeach
        </li>
</section>

<div id="galeria" class="col-12 justify-content-center">
    <section id="carousel-controles" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <ol class="carousel-indicators">
                        <li class="active" data-target="#carousel-controles" data-slide-to="0">
                        </li>
                        <li data-target="#carousel-controles" data-slide-to="1">
                        </li>
                        <li data-target="#carousel-controles" data-slide-to="2">
                        </li>
                    </ol>
                    <div class="carousel-item active">
                        <img src="../images/imagem5.jpeg" class="img-fluid" alt="">
                        <div class="carousel-caption">
                            <h3></h3>
                            <h2>Auxiliar nos estudos...</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/imagem5.jpeg" class="img-fluid" alt="">
                        <div class="carousel-caption">
                            <h3></h3>
                            <h2>Cadastre Videos do Youtube.</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/imagem5.jpeg" class="img-fluid" alt="">
                        <div class="carousel-caption">
                            <h3></h3>
                            <h2>Compartilhe Conhecimento.</h2>
                        </div>
                    </div>
                </div>
                <a href="#carousel-controles" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a href="#carousel-controles" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
    </section>
</div>
            <div class="row">
                @foreach ($videos as $video)
                <div class="col-m video jumbotron" align="center">
                    <div class="thumbnail">
                        <img src="https://img.youtube.com/vi/{{ $video->id_youtube }}/hqdefault.jpg" alt="">
                        <div class="overlay">
                            <a href="video/reproduzir/{{ $video->id }}" class="icon" title="User Profile">
                                <i class="fa fa-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <strong>{{ $video->titulo }}</strong>
                    <p>{{ $video->descricao }}</p>
                </div>
                @endforeach
            </div>

@endsection