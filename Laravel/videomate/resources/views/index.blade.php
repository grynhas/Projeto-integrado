@extends('layouts.master')

@section('content')

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
                        <img src="../images/imagem2.jpeg" class="img-fluid" alt="">
                        <div class="carousel-caption">
                            <a href="#"><i class="fas fa-play text-white bg-danger rounded-circle p-3 mb-3"></i></a>
                            <h3>Como funciona</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet repellendus, necessitatibus,
                                debitis sint quae ratione, officiis quas eos est aperiam excepturi quia porro unde
                                repudiandae. Corrupti ipsum nemo repellendus aspernatur.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/imagem2.jpeg" class="img-fluid" alt="">
                        <div class="carousel-caption">
                            <a href="#"><i class="fas fa-play text-white bg-danger rounded-circle p-3 mb-3"></i></a>
                            <h3>Como funciona</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam accusamus sed ad adipisci
                                maxime autem delectus libero, qui iure quo nemo consectetur obcaecati distinctio sint
                                voluptatem voluptas quod commodi optio.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/imagem2.jpeg" class="img-fluid" alt="">
                        <div class="carousel-caption">
                            <a href="#"><i class="fas fa-play text-white bg-danger rounded-circle p-3 mb-3"></i></a>
                            <h3>Como funciona</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic vel sequi explicabo recusandae
                                nulla laudantium labore autem deserunt necessitatibus illo nobis optio, voluptatibus
                                reprehenderit consectetur unde adipisci ipsa error fuga?</p>
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
                <div class="col-m video">
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