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