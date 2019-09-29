@extends('layouts.master')

@section('title', 'Meus Vídeos')

@section('content')
    @if (is_null($videos))
        <section class="row">
            <header class="col-12">
                <h1 class="col-12 text-center">Você não tem vídeos ainda. Faça upload para começar</h1>
            </header>
        </section>
    @else
    <div class="container">
        <section class="row">
            <header class="col-12">
                <h1 class="col-12 text-center">videos</h1>
                <p class="col-12 d-block text-center"><b>Todos os vídeos</b></p>
            </header>
        </section>

        <section class="row">
            <article class="col-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Título</th>
                            <th scope="col">Descrição</th>
                            <th scope="col-md-1">Alterar</th>
                            <th scope="col-md-1">Deletar</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach($videos as $video)
                        <tr>
                            {{-- <td scope="row">
                                <img src="{{$videos->imagem}}" width="80" height="80"alt="">
                            </td> 
                            <td>{{$video->id}}</td> --}}
                            <td>{{$video->titulo}}</td>
                            <td>{{$video->descricao}}</td>
                            <td>
                                <a href="/videos/alterar/{{$video->id}}">
                                    <i class="fas fa-edit"></i>
                                </a> 
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modal{{$video->id}}">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modal{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Deseja realmente excluir ?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Filme: {{ $video->titulo }}</p>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <form action="/video/remover/{{$video->id}}" method="POST">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <div class="d-flex justify-content-center">
                    {{$videos->links()}}
                </div> --}}
            </article>
        </section>
    </div>
    @endif
@endsection
