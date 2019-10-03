@extends('layouts.master')

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
                                <a href="/videos/alterar/{{$video->id}}" data-toggle="modal" data-target="#editmodal{{$video->id}}">
                                    <i class="fas fa-edit"></i>
                                </a> 
                                <div class="modal fade" id="editmodal{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog " role="document">
                                        <div class="modal-content bg-dark">
                                            <div class="modal-header text-center">
                                                <h4 class="modal-title w-100 font-weight-bold">Alterar Video</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                
                                            </div>
                                            <div class="modal-body mx-3 bg-dark">
                                                <form method="POST" action="/videos/alterar/{{$video->id}}"  enctype="multipart/form-data">
                                                    @csrf
                                                    {{ method_field('PUT') }}
                                                    <div class="md-form mb-5 bg-dark">
                                                        <i class="fab fa-youtube"></i>
                                                        <input type="hidden" value={{$video->id_usuario}} name="id_usuario">  
                                                        <input type="text" id="id_youtube" value="{{$video->id_youtube}}" name="id_youtube" class="form-control validate">
                                                        <label data-error="wrong" data-success="right" for="id_youtube">Link do vídeo</label>
                                                    </div>
                        
                                                    <div class="md-form mb-5">
                                                        <i class="fas fa-heading"></i>
                                                        <input type="titulo" id="titulo" value="{{$video->titulo}}" name="titulo" class="form-control validate">
                                                        <label data-error="wrong" data-success="right" for="titulo">Titulo</label>
                                                    </div>
                        
                                                    <div class="md-form mb-5">
                                                        <i class="fas fa-hourglass-start"></i>
                                                        <input class="col-2" type="number" id="inicio_hora" value="{{$video->inicio_hora}}" name="inicio_hora"class="form-control validate">
                                                        <input class="col-2" type="number" id="inicio_minuto" value="{{$video->inicio_minuto}}" name="inicio_minuto" class="form-control validate">
                                                        <input class="col-2"type="number" id="inicio_segundo" value="{{$video->inicio_segundo}}" name="inicio_segundo" class="form-control validate">
                                                        <label data-error="wrong" data-success="right" for="minutoinicial">HH:MM:SS</label>
                                                    </div>
                        
                                                    <div class="md-form mb-5">
                                                            <i class="fas fa-hourglass-end"></i>
                                                            <input class="col-2" type="number" id="fim_hora" value="{{$video->fim_hora}}" name="fim_hora" class="form-cobg-da bg-darkntrol validate">
                                                            <input class="col-2" type="number" id="fim_minuto" value="{{$video->fim_minuto}}" name="fim_minuto" class="form-control validate">
                                                            <input class="col-2"type="number" id="fim_segundo" value="{{$video->fim_segundo}}" name="fim_segundo" class="form-control validate">
                                                            <label data-error="wrong" data-success="right" for="minutoinicial">HH:MM:SS</label>
                                                    </div>
                        
                                                    <div class="md-form">
                                                        <i class="fas fa-keyboard"></i>
                                                        <textarea type="text" id="descricao" name="descricao"  class="md-textarea form-control" rows="4">{{$video->descricao}}</textarea>
                                                        <label data-error="wrong" data-success="right" for="descricao">Descrição</label>
                                                    </div>
                        
                                                    <div class="md-form">
                                                        <i class="fas fa-hashtag"></i>
                                                        <textarea type="text" id="tags"  name="tags"  class="md-textarea form-control" rows="4">{{$video->tags}}</textarea>
                                                        <label data-error="wrong" data-success="right" for="tgs">Tags</label>
                                                    </div>
                        
                                                    <button type="submit" class="btn btn-unique"> {{_('Enviar')}}</button>
                                                </form>
                                               
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <small>Atenção: o vídeo deve ter no máximo 2 minutos.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modal{{$video->id}}">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modal{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content bg-dark">
                                            <div class="modal-header">
                                            <h5 class="modal-title">Deseja realmente excluir {{ $video->titulo }}?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Video: {{ $video->titulo }}</p>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <form action="/video/meusvideos/{{$video->id}}" method="POST">
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
            </article>
        </section>
    </div>
    @endif
@endsection
