<?php
 	include_once("funcaoLogar.php");
  $logado = estaLogado();
	$cod = $_GET['codProduto'];
  include ("buscarProduto.php");
	$textoBotao = "Comprar";

  ?>
<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Shop | HTML Commerce Template</title>
		<link rel="shortcut icon" href="images/favicon.ico">

		<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/modal.css' type='text/css' media='all'/>
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

        h2.modalheader {
          color: white;
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
                      <?php $user = unserialize($_COOKIE['usuario']); ?>
                      <li>Bem vindo, <?php echo $user['nomeUsuario']; ?></li>
                      <li> <form name="form2" method="post" action="paginaConta.php"><input type="submit" value="Minha Conta"></form></li>
                      <li> <form name="form1" method="post" action="deslogado.php"><input type="submit" value="Deslogar conta"></form></li>
                      <li> <label> Carteira: <?php echo $user['carteira']; ?></label></li>
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
                        <input type="submit" value="        Login       " >
                      </fieldset>
                    </form>
                    <form name="form2" method="post" action="cdastro.php">
                      <fieldset >
                        <input type="submit" value="Cadastre-se">
                      </fieldset>
                    </form>
                  </ul>
                </li>
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
				<div class="content-container no-padding">
					<div class="container-full">
						<div class="row">
							<div class="col-md-12">
								<div class="main-content">
									<div class="commerce">
										<div class="style-1 product">
											<div class="container">
												<div class="row summary-container">
													<div class="col-md-7 col-sm-6 entry-image">
														<img class="featurette-image img-responsive center-block" src=<?php echo $prod['imgSkin']; ?> data-src="holder.js/500x500/auto" alt="Generic placeholder image">
													</div>

													<div class="col-md-5 col-sm-6 entry-summary">
														<div class="summary">
															<h1 class="product_title entry-title"><?php echo $prod['nomeSkin']; ?></h1>
															<p class="price">
																<ins>
																	<span><?php echo "R$ "; echo $prod['precoSkin']; ?></span>
																</ins>
															</p>
															<div class="product-excerpt">
																<p>
																	<?php echo $prod['descSkin']; ?>
																</p>
															</div>

																<div class="cart">

																		<button id="myBtn" class="button"<?php
																			if($prod['quantSkin'] <= 0) {
																					echo "disabled";
																					$textoBotao = "Sem Estoque";

																			}else{

																			}
																		  ?> > <?php echo $textoBotao ?> </button> </br> </br>

																	<a class='page-numbers' href='shop.php?categoria='> <span> Voltar as Compras  </span> </a>
																</div>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



      <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modalheader">Confirmar Compra</h2>
          </div>
          <div class="modal-body">

<?php  if ($logado) { ?>
          <?php  if ($user['carteira'] < $prod['precoSkin']) { ?>
                  <p>  Você nao tem dinheiro para efetuar a compra  </p>
                  <input type="submit" name="Nao" value="Ok">
          <?php  }else{ ?>

            <p>  Deseja Realmente Comprar </p>
          <div class="row">
            <div class="col-lg-1">

              <form class="" action="vendaProc.php" method="post">
                <input hidden type="number" name="codSkin" value="<?php echo $prod['codSkin']?>">
                <input hidden type="number" name="codUsuario" value="<?php echo $user['codUsuario']?>">
                <input hidden type="number" name="preco" value="<?php echo $prod['precoSkin']?>">
                <input type="submit" name="Sim" value="Sim">
              </form>

            </div>
            <div class="col-lg-1">
              <input type="submit" name="Nao" value="Nao">
            </div>
            <br \>
            <br \>
          </div>
            <p> <b> <?php echo $prod['nomeSkin']; ?> </b></p>
            <br />
            <p><img class="img-circle" src=<?php echo $prod['imgSkin']; ?> alt="Generic placeholder image" width="140" height="140"></p>
            <p> <b> Valor: R$ <?php  echo $prod['precoSkin']; ?> </b></p>
          <?php  } ?>

<?php  }else{ ?>

          <p>  <b> Faça o login antes de comprar </b>  </p>
            <input type="submit" name="Nao" value="Ok">
<?php  } ?>
          </div>
        </div>

      </div>


      <script>
      // Get the modal
      var modal = document.getElementById('myModal');
      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");
      var form = document.getElementById("formularioCompra");

      // Get the <span> element that closes the modal
      var span = document.getElementsByName("Nao")[0];

      // When the user clicks the button, open the modal
      btn.onclick = function() {
          modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
          modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";

          }
      }
      </script>




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
