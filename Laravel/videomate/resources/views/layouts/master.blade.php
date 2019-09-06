<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>videomate</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ url('css/app.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ url('css/videomate.css') }}" rel='stylesheet' type='text/css' />

    <script defer src="{{ url('js/app.js') }}"></script>
    <script defer src="{{ url('js/videomate.js') }}"></script>
</head>

<body onload="carregarPagina()">

<<<<<<< HEAD
    <header class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="/" class="navbar-brand"><img src="../images/Logo-Videomate.png" alt="Logo Videomate"
                    height=50 width=50></a>
            <h2><a class="title" href="/">videomate</a></h2>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
=======
    <header>
        <div class="container col-12">
>>>>>>> 98eeee923148636abf467f26e5f44db607b5ad29

            <nav class="navbar navbar-expand-md navbar-dark bg-dark rounded">
                <a href="/" class="navbar-brand"><img src="{{ url('images/Logo-Videomate.png') }}" alt="Logo Videomate"
                        height=50 width=50></a>
                <h2><a class="title mr-5" href="/">videomate</a></h2>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="pesquisa">
                        <button class="btn btn-outline-success my-2 my-sm-0 botaoHeader" type="submit">Pesquisa</button>
                    </form>
                    <label class="switch">
                        <input type="checkbox" onclick="alternarFundo();" id="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                {{-- 
                <section id="menu" class="col-2 col-md-2">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action" href="perfil.php" id="list-profile-list"
                            data-toggle="list" role="tab" aria-controls="profile">Perfil</a>
                        <a class="list-group-item list-group-item-action" href="mensagens.php" id="list-messages-list"
                            data-toggle="list" role="tab" aria-controls="messages">Mensagens</a>
                        <a class="list-group-item list-group-item-action" href="favoritos.php" id="list-favorites-list"
                            data-toggle="list" role="tab" aria-controls="settings">Favoritos</a>
                        <a class="list-group-item list-group-item-action" href="index.php" id="list-home-list"
                            data-toggle="list" role="tab" aria-controls="home">Home</a>
                    </div>
                </section> --}}

                @yield('content')

            </div>
        </div>
    </main>
    <div class="container d-flex justify-content-center col-11 page-footer font-small bg-dark pt-3 mt-3 rounded">
        <div class="footer-title">
            <h4>Nossas Redes</h4>
        </div>
        <div class="social">
            <ul class="social-list row">
                <li class="social-list-item col-sm-4 col-md-3 col-lg-2">
                    <a class="fb-ic social-list-item-icon social-list-item-icon-facebook" href="">
                        <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                    </a>
                </li>
                <li class="social-list-item col-sm-4 col-md-3 col-lg-2">
                    <a class="tw-ic social-list-item-icon social-list-item-icon-twitter" href="">
                        <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                </li>
                <li class="social-list-item col-sm-4 col-md-3 col-lg-2">
                    <a class="ins-ic social-list-item-icon social-list-item-icon-instagram" href="">
                        <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                </li>
                <li>
                    <div class="footer-copyright text-center">© 2019
                        <a class="text-warning" href="">videomate.com.br</a>
                    </div>
                </li>
                <!-- futuramente GitHub
                    <li class="social-list-item social-list-item-icon-github"></li>
                     -->
            </ul>
        </div>
    </div>
</body>

</html>