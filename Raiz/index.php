        <?php
        require_once("carregarVideos.php");
        require_once("inc/head.php");
        require_once("inc/header.php");
        ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php require_once("inc/menu.php"); ?>

                <div id="galeria" class="col-10 col-md-10">
                    <!--carousel-->
                    <div class="row m-auto">
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
                                    <img src="images/imagem5.jpeg" class="img-fluid" alt="">
                                    <div class="carousel-caption">
                                        <h3>Como funciona</h3>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet repellendus, necessitatibus, debitis sint quae ratione, officiis quas eos est aperiam excepturi quia porro unde repudiandae. Corrupti ipsum nemo repellendus aspernatur.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/imagem4.jpeg" class="img-fluid" alt="">
                                    <div class="carousel-caption">
                                        <h3>Como funciona</h3>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam accusamus sed ad adipisci maxime autem delectus libero, qui iure quo nemo consectetur obcaecati distinctio sint voluptatem voluptas quod commodi optio.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/imagem3.jpeg" class="img-fluid" alt="">
                                    <div class="carousel-caption">
                                        <h3>Como funciona</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic vel sequi explicabo recusandae nulla laudantium labore autem deserunt necessitatibus illo nobis optio, voluptatibus reprehenderit consectetur unde adipisci ipsa error fuga?</p>
                                    </div>
                                </div>
                            </div>
                            <!--controle-->
                            <a href="#carousel-controles" class="carousel-control-prev" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a href="#carousel-controles" class="carousel-control-next" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>

                        </section>
                    </div>
                    <div class="row">
                        <?php foreach ($videos as $key => $value) : ?>
                            <div class="video">
                                <div class="thumbnail">
                                    <img src="https://img.youtube.com/vi/<?php echo $value->idYoutube; ?>/hqdefault.jpg" alt="">
                                    <div class="overlay">
                                        <a href="player.php?videoId=<?php echo $value->id; ?>" class="icon" title="User Profile">
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
        </div>
    </main>
        <?php require_once("inc/footer.php"); ?>    
    </body>

    </html>