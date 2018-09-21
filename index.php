<?php include('header.php'); ?>

<div class="container">				
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
		
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img class="img-responsive" src="imagens/slider/moda.jpg" alt="Modelo1" style="width:100%;">
			</div>
			
			<div class="item">
				<img class="img-responsive" src="imagens/slider/moda1.jpg" alt="Modelo2" style="width:100%;">
			</div>
			
			<div class="item">
				<img class="img-responsive" src="imagens/slider/moda2.jpg" alt="Modelo3" style="width:100%;">
			</div>
		</div>
		
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>			
	
	</div><!-- FIM myCarousel -->
</div><!-- FIM CONTAINER SLIDER -->



<div class="container">
	<div class="row">
		<!--<div class="container">-->
		<div class="vip-product">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
				<div class="product">
				<img class="" src="imagens/img-categoria/esporte.jpg">
					<div class="categorias-box">
						<ul>
							<li><a class="categoria-text" href="#"><h3>ESPORTE</h3></a></li>
							<li><a href="#" class="box-link">MASCULINO</a></li>
							<li><a href="#" class="box-link">FEMININO</a></li>
						</ul>	
					</div>
				</div>
			</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
				<div class="product">
					<img class="" src="imagens/img-categoria/infantil.jpg">
					<div class="categorias-box">
						<ul>
							<li><a class="categoria-text" href="#"><h3>INFANTIL</h3></a></li>
							<li><a href="#" class="box-link">Calçados</a></li>
							<li><a href="#" class="box-link">Roupas</a></li>
							<li><a href="#" class="box-link">Acessórios</a></li>
						
						</ul>	
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
				<div class="product">
				<img class="" src="imagens/img-categoria/tualha.jpg">
					<div class="categorias-box">
						<ul>
							<li><a class="categoria-text" href="#"><h3>CASA</h3></a></li>
							<li><a href="#" class="box-link">Quarto</a></li>
							<li><a href="#" class="box-link">Sala</a></li>
							<li><a href="#" class="box-link">Cozinha</a></li>
							<li><a href="#" class="box-link">Banheiro</a></li>
						</ul>	
					</div>
				</div>
			</div>
		</div> 
	</div>
</div>

<div class="container"><!-- CONTAINER -->
	<div class="row">
		<div class="sobre">
			<div class="titulo-sobre text-center">
				<h2>Sobre a Holly</h2>
			</div>
			<div class="container">
				<p class="sobre-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt eros non mi aliquet, eget faucibus neque pharetra. Maecenas eget ullamcorper libero. Praesent congue aliquet ultricies. Maecenas interdum metus eu mi eleifend, ac vehicula massa venenatis. Etiam vel semper diam, nec aliquam nisi. Aenean quis lacus ullamcorper elit lacinia blandit quis non lorem. Curabitur in lorem fringilla, rutrum ligula in, eleifend nulla. Sed tincidunt dignissim eros, nec pharetra odio sollicitudin ac. Maecenas pellentesque sagittis diam nec ultrices. Integer commodo justo est, id rutrum risus aliquet a. Nam tincidunt ante nec congue mollis.</p>
				<p class="sobre-text">Donec vel scelerisque tortor. Phasellus fermentum neque sit amet pharetra pellentesque. Phasellus accumsan erat vel turpis finibus lacinia. Donec efficitur aliquam finibus. Cras venenatis laoreet lectus, nec auctor sem porttitor eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In laoreet orci aliquam pulvinar condimentum. Suspendisse aliquet ornare arcu, vel efficitur libero suscipit et.</p>
				<p class="sobre-text">Nullam lorem purus, consequat a orci quis, lacinia placerat neque. Nulla tristique porta scelerisque. Nullam pretium vel quam eget interdum. Sed blandit ac eros in rhoncus. Nunc eu ligula fermentum, commodo risus at, pellentesque tortor. Mauris orci nunc, pretium a ultricies suscipit, tempor ac nisi. Donec et lectus urna. Maecenas arcu mi, scelerisque mattis tortor tincidunt, aliquet tincidunt tellus. Curabitur in bibendum nibh.</p>
			</div>
		</div>
	</div>
</div><!-- FIM CONTAINER -->


<div class="container clearfix cupom">
	<div class="col-lg-4">
	GANHE R$20 NA PRIMEIRA COMPRA!
	</div>
	<div class="col-lg-8">
	<form action="index.php" method="get">
		<input type="text" placeholder="Digite seu e-mail">
		<input type="submit" value="masculino">
		<input type="submit" value="Feminino">
	</form>
	</div>
</div>
		

<!--</div>-->
<div class="container">
<div class="nav-footer">
	<div class="col-footer">
		<ul>
			<li><a href="#">Sobre nós</a></li>
			<li><a href="#">Produtos</a></li>
		</ul>
	</div>
	<div class="col-footer">
		<ul>
			<li><a href="#">Atacado</a></li>
			<li><a href="#">Regras</a></li>
		</ul>
	</div>
	<div class="col-footer">
		<ul>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="#">Contato</a></li>
			<li><a href="#">Trabalhe Conosco</a></li>
		</ul>
	</div>
	<div style="clear:both;"></div>
</div>
</div>

<?php include('footer.php'); ?>
