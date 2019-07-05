<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videomate</title>

    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap-grid.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <?php require_once("inc/header.php"); ?>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                <?php require_once("inc/menu.php"); ?>
            </div>

            <div id="player" class="col-7 col-md-7 embed-responsive embed-responsive-16by9">
                <iframe id="ytplayer" type="text/html" class="embed-responsive-item" src="http://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&origin=http://videomate.com.br&modestbranding=1&rel=0&hl=pt&loop=0&showinfo=1" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="col-3 col-md-3 video">
                <strong>Vídeo X</strong>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci quo corrupti,
                    necessitatibus architecto sed autem consequatur hic blanditiis.</p>
            </div>
        </div>

        </div>

    </main>

    <footer class="footer">
        <?php require_once("inc/footer.php"); ?>
    </footer>

</body>

</html>