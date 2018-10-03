<?php
/*
	CONEXÃO COM O BANCO DE DADOS
	Mysqli_connect("servidor","usuario","senha","nome do banco"); ---> função pré definida que conecta o banco de dados <--
*/
//passo 1 - conectando ao banco de dados
$conecta = Mysqli_connect("localhost","root","","holly");


//passo 2 - testar coneexao
if(Mysqli_connect_errno())//0 = não tem erro, logo não mostra nada na tela
{
	die("Conexão falhou: ".Mysqli_connect_errno());
}

 ?>

<?php
	//passo 3 - criando uma consulta
	$consulta_categoria = "SELECT nome_categoria FROM categoria";
	$categorias = mysqli_query($conecta,$consulta_categoria);

	if(!$categorias)
	{
		die("Falha na consulta ao Banco.");
	}


?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>H O L L Y</title>
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

	</head>
	<body>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">

		        <!-- Início do Corpo do Modal -->
		        <form class="text-center" action="valida-login.php" method="post">
			        <div class="col-lg-12 col-md-12 col-sm-12">
			        	<div class="col-lg-7 col-md-7 col-lg-6">
			        		<label>Usuário</label>
			        		<input type="text" name="email">
			        	</div>
			        </div>

			        <div class="col-lg-12 col-md-12 col-sm-12">
			        	<div class="col-lg-7 col-md-7 col-lg-6">
			        		<label>Senha</label>
			        		<input type="password" name="senha">
			        	</div>
			        </div>

			        <div class="col-lg-12 col-md-12 col-sm-12">
			        	<div class="col-lg-2 col-md-7 col-lg-6">
			        		<input type="submit" class="btn btn-primary form-control" value="Enviar">
			        	</div>
			        </div>
			    </form>
		        <!-- Fim do Corpo do Modal -->
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
					</div>
							</div>
						</div>
					</div>

<nav class="nav-menu">
	<ul class="menu">
		<li class="menu-item"><a class="menu-link" href="#">Home</a></li>
		<li class="menu-item">
				<div class="div-logo" id="logo">
					<a class="menu-link" href="index.php"><h1 class="logo">HOLLY!</h1></a>
				</div>
		</li>
		<li class="menu-item"><a class="menu-link" href="#">Contato</a></li>
	</ul>
	<div class="icon">
		<!-- Início Botão Modal -->
		<button type="button" class="btn btn-primary btn-primary-custom" data-toggle="modal" data-target="#exampleModal">
		Login <i class="fas fa-user-alt icon-stilo" onclick=""></i>
		</button>
		<!-- Fim Botão Modal -->
		<i class="fas fa-shopping-cart fa-2x icon-stilo" onclick=""></i>
	</div>

	<ul class="menu-mobil">
		<div class="div-logo" id="logo">
		<a class="menu-link" href="index.html"><h1 class="logo">HOLLY!</h1></a>
		</div>
		<div class="icons" onclick=""><i class="fas fa-bars  fa-2x icon-stilo"></i></div>
		<li class="menu-item-mobil"><a class="menu-link" href="#">Home</a></li>
		<li class="menu-item-mobil"><a class="menu-link" href="#">Contato</a></li>
		</div>
	</ul>
</nav>

<nav class="navbar navbar-default navbar-custom">
  <div class="container">
    <ul class="nav navbar-nav nav-custom">
			<?php
				while($registro = mysqli_fetch_assoc($categorias))
				{
					foreach ($registro as $value)
					{
						if($value == 'masculino')
						{
								echo '<li class="link col-lg-2 col-md-2 col-sm-12 um"><a style="text-transform: uppercase;" class="text-center" href="#">'.$value.'</a></li>';
						}

						if($value == 'feminino')
						{
								echo '<li class="link col-lg-2 col-md-2 col-sm-12 dois"><a style="text-transform: uppercase;" class="text-center" href="#">'.$value.'</a></li>';
						}

						if($value == 'infantil')
						{
								echo '<li class="link col-lg-2 col-md-2 col-sm-12 tres"><a style="text-transform: uppercase;" class="text-center" href="#">'.$value.'</a></li>';
						}

						if($value == 'esporte')
						{
								echo '<li class="link col-lg-2 col-md-2 col-sm-12 quatro"><a style="text-transform: uppercase;" class="text-center" href="#">'.$value.'</a></li>';
						}

						if($value == 'inspiracao')
						{
								echo '<li class="link col-lg-2 col-md-2 col-sm-12 cinco"><a style="text-transform: uppercase;" class="text-center" href="#">'.$value.'</a></li>';
						}

						if($value == 'outlet')
						{
								echo '<li class="link col-lg-2 col-md-2 col-sm-12 six"><a style="text-transform: uppercase;" class="text-center" href="#">'.$value.'</a></li>';
						}
					}
				}
			 ?>

			<hr />
    </ul>
  </div>
</nav>
