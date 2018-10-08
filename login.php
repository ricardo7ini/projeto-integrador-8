
<?php include('header.php'); ?>
<?php
  if($_POST){
    if(file_exists('login.json')){
      $dados = json_decode(file_get_contents('login.json'), true);
    }else{
      $dados = [ "usuarios" => [] ];
    }
    if($_POST['senha'] == $_POST['confirma-senha']){
      $usuario = [
        "email" => $_POST['email'],
        "nome"  => $_POST['nome'],
        "sobrenome" => $_POST['sobrenome'],
        "nascimento" => $_POST['datan'],
        "rg" => $_POST['rg'],
        "rua" => $_POST['rua'],
        "cpf" => $_POST['cpf'],
        "numeror" => $_POST['numeror'],
        "bairro" => $_POST['bairro'],
        "estado" => $_POST['estado'],
        "cidade" => $_POST['cidade'],
        "cep" => $_POST['cep'],
        "login" => $_POST['login'],
        "hash" => password_hash($_POST['senha'], PASSWORD_DEFAULT)
      ];
      $dados['usuarios'][] = $usuario;
      $json = json_encode($dados);
      file_put_contents('login.json', $json);
    }
  }
  ?>
  <?php
if(isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] == UPLOAD_ERR_OK){
  $file_to = "uploads/".$_FILES['arquivo']['name'];
  if(file_exists($file_to)){
      echo "ERRO: Arquivo já existe!";
  }else{
    $ok = move_uploaded_file($_FILES['arquivo']['tmp_name'], $file_to);
    if($ok) { echo "Arquivo enviado com sucesso!"; }
  }
}
?>

<div class="container">
  <div class="form-group">

    <div class="col-md-offset-3 col-lg-6 text-center">

      <form class="form-horizontal form-horizontal-custom" action="valida-login.php" method="post">

          <div class="form-group">

            <div class="col-md-offset-1 col-sm-10">
              <label for="nome" class="control-label control-label-custom text-left">Email</label><br><br>
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
            </div>
          </div>

          <div class="form-group">

            <div class="col-md-offset-1 col-sm-10">
              <label for="pass" class="control-label text-left">Senha</label><br><br>
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="senha">
                <a href="#" >Esqueceu sua senha?</a>
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-offset-1 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-offset-1 col-sm-10">
              <button type="submit" class="btn btn-default btn-default-custom" value="Enviar">Sign in</button>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-offset-1 col-sm-10">
              <legend class="legenda"></legend>
              <h4>Não sou cliente</h4>
Ao criar uma conta, você concorda com nossos termos de uso, condições, política de privacidade e que tem pelo menos 16 anos de idade.
              <a class="btn btn-default btn-default-custom" href="nova_conta.php">Criar conta</a>
            </div>
          </div>

        </div>

        <div>

      </div>


  </form>

<div class="clearfix"></div>

     <div class="row text-center">
        <legend class="legenda">Fazer login com;</legend>
        <a class="icons-socials" href="#"><img src="imagens/icons/facebook-holly.png"></a>
        <a class="icons-socials" href="#"><img src="imagens/icons/twitter.png"></a>
      </div>

</div>

<?php include('footer.php'); ?>
