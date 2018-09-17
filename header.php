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
	            <li class="menu-item"><a class="menu-link" href="#">Produtos</a></li>
	            <li class="menu-item">
					<div class="div-logo" id="logo">
						<a class="menu-link" href="index.php"><h1 class="logo">HOLLY!</h1></a>
					 </div>
				</li>
	            <li class="menu-item"><a class="menu-link" href="#">Categoria</a></li>
	            <li class="menu-item"><a class="menu-link" href="#">Contato</a></li>
			</ul>
			<div class="icon">
				<!-- Início Botão Modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Login <i class="fas fa-user-alt icon-stilo" onclick=""></i>
				</button>
				<!-- Fim Botão Modal -->
				<i class="fas fa-shopping-cart fa-2x icon-stilo" onclick=""></i>	
			</div>
			<ul class="menu-mobil">
				<div class="div-logo" id="logo">
					<a class="menu-link" href="index.html"><h1 class="logo">HOLLY!</h1></a>
				</div>
				<div class="icons" onclick=""><i class="fas fa-bars  fa-2x"></i></div>
					<li class="menu-item-mobil"><a class="menu-link" href="#">Home</a></li>
		            <li class="menu-item-mobil"><a class="menu-link" href="#">Produtos</a></li>
		            <li class="menu-item-mobil"><a class="menu-link" href="#">Categoria</a></li>
		            <li class="menu-item-mobil"><a class="menu-link" href="#">Contato</a></li>
		        </div>
	        </ul>
		</nav>
