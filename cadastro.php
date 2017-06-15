<?php
include_once("funcaoLogar.php");
$logado = estaLogado();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>undeadskin</title>

    <!-- Bootstrap core CSS -->

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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->


    <style media="screen">
    .row-fluid{
      overflow: auto;
      white-space: nowrap;
    }

    .row-fluid .col-lg-4{
      display: inline-block;
      float: none;
    }

    h2{
      text-align: center;
    }

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

    .footer {
          position:absolute;
          position:fixed;
          left:0px;
          bottom:0px;
          height:50px;
          width:100%;
          background:#999;
        }


    </style>
  </head>
<!-- NAVBAR
================================================== -->
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
                  //if($_COOKIE["logado"] == "sim"){
                    if ($logado) {
                      # code...

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
                        <input type="submit" value="      Login      " >
                      </fieldset>
                    </form>
                    <form name="form2" method="post" action="cadastro.php">
                      <fieldset >
                        <input type="submit" value="Cadastre-se" >
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





    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->



        <div class="container marketing" >
      <!-- START THE FEATURETTES -->
      <br />
      <br />
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="container marketing" >
          <div class="col-sm-6">
            <h4><b>Cadastro</b></h4>
            <form name="form1" method="post" action="telaCadastroUsuarioProc.php">
              <div class="wpcf7-form-control-wrap name">
                <p><input class="wpcf7-form-control" name="nome" type="text" value="" required placeholder="Nome"/> </p>
              </div>

              <div class="wpcf7-form-control-wrap name">
                <p><input class="wpcf7-form-control" name="senha" type="password" value="" required placeholder="Senha"/> </p>
              </div>

              <div class="wpcf7-form-control-wrap name">
                <p> <input class="wpcf7-form-control" name="telefone" type="text" value="" required placeholder="Telefone"/> </p>
              </div>

              <div class="wpcf7-form-control-wrap name">
                <p> <input class="wpcf7-form-control" name="endereco" type="text" value="" required placeholder="Endereço"/> </p>
              </div>

              <input name="enviar" value="Cadastrar" type="submit" />
            </form>
          </div>
          <div class="col-sm-6">
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading"> Crie sua Conta <br/> <span class="text-muted"></span></h2>
                <p class="lead">Comece comprar agora mesmo em um clique. Cadastre-se e nao perca tempo.</p>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="img/dolar.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr class="featurette-divider">




      <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
      <!-- FOOTER -->


      <footer id="footer" class="footer">

				<div  class="footer-copyright text-center">
					© 2017 UNDEADSKIN - Trabalho Acadêmico
				</div>
			</footer>






    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
