<?php
	include_once("funcaoLogar.php");
	$logado = estaLogado();
	if($_GET != null){
		$categoria = $_GET['categoria'];

	}else{
			$categoria = null;
	}
  include ("ecommerceCon.php");

	//verifica a página atual caso seja informada na URL, senão atribui como 1ª página
  $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
	//variavel para calcular o início da visualização com base na página atual
  $inicio = ($registros*$pagina)-$registros;

	include("produtosCon.php");
  ?>
<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Shop | HTML Commerce Template</title>
		<link rel="shortcut icon" href="images/favicon.ico">

		<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/swatches-and-photos.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/jquery.selectBox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/elegant-icon.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/custom.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/magnific-popup.css' type='text/css' media='all'/>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

				<style media="screen">
		    li.active a{
		      color: white;
		    }
		    li.active a:hover{
		      color: grey;
		    }
				li.dropdown a.dropdown-toggle:hover{
		      color: Gray;
		    }

		    li.dropdown a.dropdown-toggle{
		      color: white;
		    }

				.dropdown:hover .dropdown-menu {
    			display: block;
  			}



		    </style>

	</head>
	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">

					<a class="navbar-brand" href="index.php">UndeadSkin</a>

					<div class="masthead">
						<nav>
							<ul class="nav nav-justified">
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Parceiros <span class="caret"></span></a>
													<ul class="dropdown-menu">
															<li ><a href="http://wancharle.com.br/ce/matheus/"> MM Veiculos </a></li>
															<li ><a href="http://wancharle.com.br/ce/erick/"> SSCSGO </a></li>
															<li ><a href="http://wancharle.com.br/ce/ludivan/"> Lud_iFit </a></li>
														</ul>
												</li>
								<li class="active"><a href="#">Sobre nós</a></li>
								<li class="active"><a href="#">Contato</a></li>

								<?php
									if($logado){
										//$x = $_POST['pessoa'];
								?>

								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Olá <span class="caret"></span></a>
									<ul class="dropdown-menu">
											<?php $user = unserialize($_COOKIE['usuario']); ?>
											<li>Bem vindo, <?php echo $user['nomeUsuario']; ?></li>
											<li> <form name="form2" method="post" action="paginaConta.php"><input type="submit" value="Minha Conta"></form></li>
                      <li> <form name="form1" method="post" action="deslogado.php"><input type="submit" value="Deslogar conta"></form></li>
										</ul>

								<?php
									} else {
								?>
								<li class="dropdown" ><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log in <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<form name="form1" method="post" action="loginProc.php">
											<fieldset >
												<input type="text" name="nome" placeholder="Digite seu Nome" required>
												<input type="password" name="senha" placeholder="Digite sua senha" required>
											</fieldset>
											<fieldset >
												<input type="submit" value="        Login      " >
											</fieldset>
										</form>
										<form name="form2" method="post" action="cadastro.php">
											<fieldset >
												<input type="submit" value="Cadastre-se">
											</fieldset>
										</form>
									</ul>
								</li>
								<?php
									}
								 ?>

							</ul>
						</nav>
					</div>
				</div>


			</div>

		</nav>



		<div id="wrapper" class="wide-wrap">
			<div class="offcanvas-overlay"></div>



			</div>
			<div class="heading-container heading-resize heading-no-button">
				<div class="heading-background heading-parallax bg-shop">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="heading-wrap">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content-container commerce page-layout-left-sidebar">
				<div class="container">
					<div class="row">
						<div class="col-md-9 main-wrap">
							<div class="main-content">

								<div class="shop-loop grid">
									<ul class="products">

										<?php
													$i = 0;
													foreach( $prod as $prods) {

										?>

										<li class="product product-no-border style-2 col-md-3 col-sm-6">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
															<a href="shop-detail-2.php?codProduto=<?php echo $prod[$i]['codSkin']?>"><img width="450" height="450" src=<?php echo $prod[$i]['imgSkin']; ?> alt=""/></a>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-meta clearfix">
															</div>
															<div class="info-content-wrap">
																<h3 class="product_title">
																	<a href="shop-detail-2.php"><?php echo $prod[$i]['nomeSkin']; ?></a>
																</h3>
																<div class="info-price">
																	<span class="price">
																		<span><?php echo "R$ "; echo $prod[$i]['precoSkin']; ?></span>
																	</span>
																</div>
																<div class="loop-action">
																	<div class="loop-add-to-cart">
																		<a href="shop-detail-2.php?codProduto=<?php echo $prod[$i]['codSkin']?>" class="add_to_cart_button">
																			Detalhes
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>

										<?php
											$i++;
										 }
										 ?>

									</ul>
								</div>


								<nav class="commerce-pagination">
									<p class="commerce-result-count">
										Mostrando <?php if ($i <= 1) {
																				echo "$totalRegistro";
																		}else{
																				if($pagina == null){
																					echo "$i"*1;
																				}else{
																					echo "$i"*$pagina;
																				}
																		} ?> de <?php echo "$totalRegistro"; ?> resultados
									</p>
									<div class="paginate">
										<?php for($i = $numPaginas; $i >= 1; $i--) { ?>
										<div class="paginate_links">
											<a class='page-numbers' href='shop.php?categoria=<?php echo "$categoria" ?>&pagina=<?php echo "$i" ?>'> <?php echo "$i" ?></a>
										</div>
										<?php	} ?>
									</div>
								</nav>
							</div>
						</div>
						<div class="col-md-3 sidebar-wrap">
							<div class="main-sidebar">
								<div class="widget widget_product_categories">
									<h4 class="widget-title"><span>Categories</span></h4>
									<ul class="product-categories">
										<li><a href="shop.php">All</a></li>
										<li><a href="shop.php?categoria=1">Body</a></li>
										<li><a href="shop.php?categoria=2">Head</a></li>
										<li><a href="shop.php?categoria=3">Weapon</a></li>
										<li><a href="shop.php?categoria=4">Face</a></li>
										<li><a href="shop.php?categoria=5">Feet</a></li>
										<li><a href="shop.php?categoria=6">Hands</a></li>
										<li><a href="shop.php?categoria=7">Legs</a></li>
										<li><a href="shop.php?categoria=8">Back</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer id="footer" class="footer">

				<div class="footer-copyright text-center">
					© 2017 UNDEADSKIN - Trabalho Acadêmico
				</div>
			</footer>



		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='js/easing.min.js'></script>
		<script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='js/bootstrap.min.js'></script>
		<script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='js/jquery.appear.min.js'></script>
		<script type='text/javascript' src='js/script.js'></script>
		<script type='text/javascript' src='js/swatches-and-photos.js'></script>
		<script type='text/javascript' src='js/jquery.cookie.min.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.init.min.js'></script>
		<script type='text/javascript' src='js/jquery.selectBox.min.js'></script>
		<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='js/jquery.transit.min.js'></script>
		<script type='text/javascript' src='js/jquery.carouFredSel.js'></script>
		<script type='text/javascript' src='js/jquery.magnific-popup.js'></script>
		<script type='text/javascript' src='js/jquery.parallax.js'></script>

		<script type='text/javascript' src='js/core.min.js'></script>
		<script type='text/javascript' src='js/widget.min.js'></script>
		<script type='text/javascript' src='js/mouse.min.js'></script>
		<script type='text/javascript' src='js/slider.min.js'></script>
		<script type='text/javascript' src='js/jquery-ui-touch-punch.min.js'></script>
		<script type='text/javascript' src='js/price-slider.js'></script>
	</body>
</html>
