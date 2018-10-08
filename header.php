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
		<!------ Include the above in your HEAD tag ---------->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">



	</head>
	<body>

		<nav class="navbar navbar-default navbar-custom">
			<div class="flipkart-navbar">
					<div class="container">
							<div class="row row1">
									<ul class="largenav pull-right">
											<li class="upper-links"><a class="links" href="#">Home</a></li>
											<li class="upper-links"><a class="links" href="#">Sobre</a></li>
											<li class="upper-links"><a class="links" href="#">Revenda</a></li>
											<li class="upper-links"><a class="links" href="#">Afiliados</a></li>
											<li class="upper-links"><a class="links" href="#">Informações</a></li>
											<li class="upper-links"><a class="links" href="#">Contato</a></li>
											<li class="upper-links"><a class="links" href="#"></a></li>
											<li class="upper-links"><a class="links" href="#">Meus dados</a></li>
											<li class="upper-links"><a class="links" href="#">Meus pedidos</a></li>
											<li class="upper-links"><a class="links" href="#">Lista de desejos</a></li>
											<li class="upper-links">
															<a  href="#">
																	<svg class="" width="16px" height="12px" style="overflow: visible;">
																			<i class="fas fa-1x fa-bell" style="color:#fff;"></i>
																	</svg>
															</a>
													</li>
													<li class="upper-links dropdown"><a class="links" href="login.php">Fazer login</a>
															<ul class="dropdown-menu">
																	<li class="profile-li"><a class="profile-links" href="nova_conta.php">Criar Conta</a></li>
															</ul>
													</li>

									</ul>
							</div>
							<div class="row row2">
									<div class="col-sm-2">
											<h2 style="margin:0px; text-align:center;">
												<span class="smallnav men"><a href="index.php" class="logo">HOLLY</a></span>
												<span class="smallnav menu" onclick="openNav()">☰</span>
											</h2>
											<h1 style="margin:0px;">
												<span class="largenav logo"><a href="index.php" class="logo">HOLLY</a></span>
											</h1>
									</div>
									<div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-10">
											<div class="row">
													<input class="flipkart-navbar-input col-xs-10" type="" placeholder="Digite o nome do produto..." name="">
													<button class="flipkart-navbar-button col-xs-2">
															<svg width="15px" height="15px">
																	<i class="fas fa-search"></i>
													</button>
											</div>
									</div>
									<div class="cart largenav col-sm-2">
											<a class="cart-button">
													<svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
														<i class="fas fa-1x fa-shopping-cart"></i>
													</svg> Link
													<span class="item-number ">0</span>
											</a>
									</div>

							</div>
					</div>
			</div>
			<div id="mySidenav" class="sidenav">
					<div class="container" style="background-color: #000; padding-top: 10px;">
							<span class="sidenav-heading logo">HOLLY</span>
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
					</div>
					<a href="#">masculino</a>
					<a href="#">feminino</a>
					<a href="#">infantil</a>
					<a href="#">esporte</a>
					<a href="#">inspiracao</a>
						<a href="#">outlet</a>

			</div>
  <div class="container">
    <ul class="nav navbar-nav nav-custom">

			<li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 um">
				<a class="links text-center" href="login.php" style="text-transform: uppercase;">MASCULINO</a>
					<ul class="dropdown-menu">
							<li class="profile-li"><a class="profile-links" href="#">link</a></li>
					</ul>
			</li>


			<li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 dois">
				<a class="links text-center" href="login.php" style="text-transform: uppercase;">FEMININO</a>
					<ul class="dropdown-menu">
							<li class="profile-li"><a class="profile-links" href="#">link</a></li>
					</ul>
			</li>


			<li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 tres">
				<a class="links text-center" href="login.php" style="text-transform: uppercase;">INFANTIL</a>
					<ul class="dropdown-menu">
							<li class="profile-li"><a class="profile-links" href="#">link</a></li>
					</ul>
			</li>


			<li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 quatro">
				<a class="links text-center" href="login.php" style="text-transform: uppercase;">ESPORTE</a>
					<ul class="dropdown-menu">
							<li class="profile-li"><a class="profile-links" href="#">link</a></li>
					</ul>
			</li>

			<li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 cinco">
				<a class="links text-center" href="login.php" style="text-transform: uppercase;">INSPIRAÇÃO</a>
					<ul class="dropdown-menu">
							<li class="profile-li"><a class="profile-links" href="#">link</a></li>
					</ul>
			</li>


			<li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 six">
				<a class="links text-center" href="login.php" style="text-transform: uppercase;">OUTLET</a>
					<ul class="dropdown-menu">
							<li class="profile-li"><a class="profile-links" href="#">link</a></li>
					</ul>
			</li>
			<hr />

    </ul>
  </div>
</nav>
<div class="header">
</div>
