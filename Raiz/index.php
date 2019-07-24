    <header>
        <?php
        require_once("carregarVideos.php");
        require_once("inc/head.php");
        require_once("inc/header.php");
        ?>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php require_once("inc/menu.php"); ?>

                <div id="galeria" class="col-10 col-md-10">
                    <?php foreach ($videos as $key => $value) : ?>
                        <div class="video">
                            <div class="thumbnail">
                                <img src="https://img.youtube.com/vi/<?php echo $value->id; ?>/hqdefault.jpg" alt="">
                                <div class="overlay">
                                    <a href="player.php?videoid=<?php echo $value->id; ?>" class="icon" title="User Profile">
                                        <i class="fa fa-play-circle"></i>
                                    </a>
                                </div>
                            </div>
                            <strong><?php echo $value->titulo; ?></strong>
                            <p><?php echo $value->descricao; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
        </div>
    </main>

    <footer class="footer">
        <?php require_once("inc/footer.php"); ?>
    </footer>

    </body>

    </html>