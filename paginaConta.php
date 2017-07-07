<?php
	include_once("funcaoLogar.php");
	$conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");
	$logado = estaLogado();
 	$user = unserialize($_COOKIE['usuario']);
	$codUsuario = $user['codUsuario'];
	$i = 0;

	if($_GET != null){
		$categoria = $_GET['categoria'];
	}else{
			$categoria = null;
	}

	$sqlCount ="SELECT COUNT(*) AS total FROM vendas WHERE codUsuario = '$codUsuario'; ";
	$resultado = $conexaoBanco->query($sqlCount);
	$total = $resultado->fetchAll();
	$registros = 9;
	$totalRegistro = $total[0]['total'];
	$numPaginas = ceil($totalRegistro/$registros);
	//verifica a página atual caso seja informada na URL, senão atribui como 1ª página
  $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
	//variavel para calcular o início da visualização com base na página atual
  $inicio = ($registros*$pagina)-$registros;

	include("vendasCon.php");
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


								<?php
									if($logado){
										//$x = $_POST['pessoa'];
								?>

								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Olá <span class="caret"></span></a>
									<ul class="dropdown-menu">
											<li>Bem vindo, <?php echo $user['nomeUsuario']; ?></li>
											<li> <form name="form2" method="post" action="paginaConta.php"><input type="submit" value="Minha Conta"></form></li>
                      <li> <form name="form1" method="post" action="deslogadoIndex.php"><input type="submit" value="Deslogar conta"></form></li>
											<li> <label> Carteira: <?php echo $user['carteira']; ?></label></li>
										</ul>

								<?php
									}

								?>
								<li class="active"><a href="administradorLogin.php">Area Administrativa</a></li>
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


								<?php if ($categoria == "historico") { ?>
									<h3> Historico de Compras</h3>
								<div class="shop-loop grid">
									<ul class="products">

										<?php

													foreach( $prod as $prods) {

										?>

										<li class="product product-no-border style-2 col-md-3 col-sm-6">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
															<a href="shop-detail-2.php?codProduto=<?php echo $prod[$i]['codSkin']?>"><img width="450" height="450" src=<?php echo $prod[$i]['imgSkin']; ?> alt=""/></a>
														</div>
														<div class="info-price">
															<span class="price">
																<span><?php echo "R$ "; echo $prod[$i]['precoSkin']; ?></span>
															</span>
														</div>
													</div>
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
											<a class='page-numbers' href='paginaConta.php?categoria=historico&pagina=<?php echo "$i" ?>'> <?php echo "$i" ?></a>
										</div>
										<?php	} ?>
									</div>
								</nav>


								<?php }else{ ?>

												<script>

														function somenteNumeros(num) {
														var er = /[^0-9.]/;
														er.lastIndex = 0;
														var campo = num;
														if (er.test(campo.value)) {
																campo.value = "";
															}
														}
													</script>

													<h3> Dados do Usuário </h3><br>

													<h4> <p> Nome:   <?php echo $user['nomeUsuario']; ?></p></h4><br>
													<h4> <p> Telefone:   <?php echo $user['telUsuario']; ?></p></h4><br>
													<h4> <p> Endereço:   <?php echo $user['endUsuario']; ?></p></h4><br>
													<h4> <p> Carteira:   <?php echo $user['carteira']; ?></p></h4>
													<form  id="form" action="fundos.php" method="post">
														<input type="text" onkeyup="somenteNumeros(this);" name="valor" value="">
														<input type="submit" class="btn btn-default" value="Colocar Fundos" >
													</form>




									<?php } ?>


							</div>
						</div>
						<div class="col-md-3 sidebar-wrap">
							<div class="main-sidebar">
								<div class="widget widget_product_categories">
									<h4 class="widget-title"><span> <?php echo $user['nomeUsuario'] ?></span></h4>
									<ul class="product-categories">
										<li><a href="paginaConta.php?categoria=dado"><b> Dados </b></a></li>
										<li><a href="paginaConta.php?categoria=historico"><b> Historico </b></a></li>
										<li><a href="shop.php?categoria="><b> Voltar as Compras </b></a></li>
										<li><a href="deslogadoIndex.php"><b> Encerrar Sessão </b></a></li>
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
		</div>

		<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userloginModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Login</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" id="username" name="log" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" id="password" required value="" name="pwd" class="form-control" placeholder="Password">
							</div>
							<div class="checkbox clearfix">
								<label class="form-flat-checkbox pull-left">
									<input type="checkbox" name="rememberme" id="rememberme" value="forever">
									<i></i>&nbsp;Remember Me
								</label>
								<span class="lostpassword-modal-link pull-right">
									<a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your password?</a>
								</span>
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-register pull-left">
								<a data-rel="registerModal" href="#">Not a Member yet?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userregisterModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Register account</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="user_email">Email</label>
								<input type="email" id="user_email" name="user_email" required class="form-control" value="" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="user_password">Password</label>
								<input type="password" id="user_password" required value="" name="user_password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="user_password">Retype password</label>
								<input type="password" id="cuser_password" required value="" name="cuser_password" class="form-control" placeholder="Retype password">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userlostpasswordModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Forgot Password</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Username or E-mail:</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username or E-mail">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="minicart-side">
			<div class="minicart-side-title">
				<h4>Shopping Cart</h4>
			</div>
			<div class="minicart-side-content">
				<div class="minicart">
					<div class="minicart-header no-items show">
						Your shopping bag is empty.
					</div>
					<div class="minicart-footer">
						<div class="minicart-actions clearfix">
							<a class="button no-item-button" href="#">
								<span class="text">Go to the shop</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

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
