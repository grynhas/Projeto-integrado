<?php
require_once("carregarVideos.php");

$videoPlay = new Video();
$videoPlay->id = "indefinido";

if (isset($_GET["videoId"])) {
    $videoId = $_GET["videoId"];

    foreach ($videos as $key => $value) :
        if ($value->id === $videoId) {
            $videoPlay = $value;
            break;
        }
    endforeach;
}

$urlPlay = "http://www.youtube.com/embed/" . $videoPlay->idYoutube .
    "?autoplay=1&origin=http://videomate.com.br&modestbranding=1&rel=0&hl=pt&loop=0&showinfo=1" .
    "&mute=0&start=" . $videoPlay->Inicio() . "&end=" . $videoPlay->Fim();
?>

<header>
    <?php
    require_once("inc/header.php");
    require_once("inc/head.php");
    ?>
</header>

<main>
    <div class="container-fluid">
        <div class="row">
            <?php require_once("inc/menu.php"); ?>
        </div>

        <div id="player" class="col-7 col-md-7 embed-responsive embed-responsive-16by9">
            <iframe id="ytplayer" type="text/html" class="embed-responsive-item" src="<?php echo $urlPlay; ?>" frameborder="0" allow="autoplay; fullscreen"></iframe>
        </div>

        <div class="col-3 col-md-3 video">
            <strong><?php echo $videoPlay->titulo; ?></strong>
            <p><?php echo $videoPlay->descricao; ?></p>
        </div>
    </div>

    </div>

</main>

<footer class="footer">
    <?php require_once("inc/footer.php"); ?>
</footer>

</body>

</html>