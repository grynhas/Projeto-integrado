<?php
  require_once("inc/head.php");
  require_once("inc/header.php");
?>

<body class="container-fluid">
    <section class="row topo">
        <article class="">
            <?php require_once("inc/menu.php"); ?>
        </article>
        <article class="page-center col-10">
            <div class="title">
                <h1 class="col-10">Login</h1>
            </div>
            <form action="cadastro.php" method="post" class="col-md-7" enctype="multipart/form-data">
                <div class="col-md-12">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        placeholder="Insira seu email">
                </div>
                <div class="col-md-12">
                    <label for="exampleInputSenha">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputSenha"
                        placeholder="Insira sua senha">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </article>
    </section>
    </article>
    <?php require_once("inc/footer.php"); ?>
</body>