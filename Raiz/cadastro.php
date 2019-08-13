<?php
  require_once("inc/head.php");
  require_once("inc/header.php");
?>

<div class="container-fluid">
    <section class="row">
        <?php require_once("inc/menu.php"); ?>

      <article class="page-center col-10">
        <div class>
          <h1 class="col-10">Cadastre-se</h1>
        </div>
        <form action="cadastro.php" method="post" class="col-md-7" enctype="multipart/form-data">
          <div class="col-md-12">
            <label for="exampleInputNome">Nome</label>
            <input type="text" name="nome" class="form-control" id="exampleInputNome" placeholder="Insira seu nome">
          </div>
          <div class="col-md-12">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Insira seu email">
          </div>
          <div class="col-md-12">
            <label for="exampleInputSenha">Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleInputSenha"
              placeholder="Insira sua senha">
          </div>
          <div class="col-md-12">
            <label for="exampleInputConfirmar">Confirme sua senha</label>
            <input type="password" name="confirmarSenha" class="form-control" id="exampleInputConfirmar"
              placeholder="Confirme sua senha">
          </div>
          <div class="col-md-12">
            <label for="inputFoto">Escolha uma foto para seu perfil</label>
            <input type="file" name="foto" class="form-control" id="inputFoto">
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="col-md-offset-9" href="login.php">Fazer login!</a>
          </div>
        </form>
      </article>
    </section>
</div>
  <?php require_once("inc/footer.php"); ?>
</body>
</html>