<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>admin-holly</title>
  	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- Use Font Awesome's  -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
		<link rel="stylesheet" href="css/style.css">
		<!-- Só carrega esse estilo se for a pagina comprar.php -->
		<link rel="stylesheet" href="css/compra-style.css">
		<!------ Include the above in your HEAD tag ---------->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<div class="container">
  <div class="img-admin">
  <img class="img-responsive" src="imagens/holly.png"/>
  </div>
  
  <div class="form-group">

    <div class="col-md-offset-3 col-lg-6 text-center">

      <form class="form-horizontal form-horizontal-custom" action="valida-login.php" method="post">

          <div class="form-group">

            <div class="col-md-offset-1 col-sm-10">
              <label for="nnome" class="control-label control-label-custom text-left">Nome</label><br><br>
              <input type="text" class="form-control" id="inputnome" placeholder="nome do administrador" name="nome">
            </div>
          </div>

          <div class="form-group">

            <div class="col-md-offset-1 col-sm-10">
              <label for="pass" class="control-label text-left">Senha</label><br><br>
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="senha">
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
              <button type="submit" class="btn btn-default btn-default-custom" value="Enviar">Entrar</button>
            </div>
          </div>
        </div>
        <div>
      </div>
  </form>

<div class="clearfix"></div>

   
</div>
</body>
</html>