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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

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


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/h1z1.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Seu site número 1 de skins</h1>
              <p> Faça a melhor compra pelo melhor preço</p>
            </div>
          </div>
        </div>
        <div class="item">
            <img class="second-slide" src="img/skinstitle2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Todas as Skins em Apenas um Lugar</h1>
                <p> Skins de todas as crates direto no seu inventario</p>

              </div>
            </div>
          </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" >
      <!-- Three columns of text below the carousel -->
      <h2>   SKINS  </h2>
      <div class="row-fluid">
        <div class="col-lg-4">
          <img class="img-circle" src="img/body.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Body</h2>
          <p>Skin para o torso</p>
          <p><a class="btn btn-default" href="shop.php?categoria=1&pagina=" role="button"> Acessar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/head.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Head</h2>
          <p>Skins de capacetes</p>
          <p><a class="btn btn-default" href="shop.php?categoria=2&pagina=" role="button"> Acessar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/weapon.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Weapon</h2>
          <p>Skins de armas em geral</p>
          <p><a class="btn btn-default" href="shop.php?categoria=3&pagina=" role="button"> Acessar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/face.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Face</h2>
          <p>Mascaras e oculos</p>
          <p><a class="btn btn-default" href="shop.php?categoria=4&pagina=" role="button"> Acessar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/feet.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Feet</h2>
          <p>Calçados em geral</p>
          <p><a class="btn btn-default" href="shop.php?categoria=5&pagina=" role="button"> Acessar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/hands.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Hands</h2>
          <p>Luvas diversas</p>
          <p><a class="btn btn-default" href="shop.php?categoria=6&pagina=" role="button"> Acessar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/legs.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Legs</h2>
          <p>Calças em geral</p>
          <p><a class="btn btn-default" href="shop.php?categoria=7&pagina=" role="button"> Acessar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/back.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Back</h2>
          <p>Mochilas de diversos tipos</p>
          <p><a class="btn btn-default" href="shop.php?categoria=8&pagina=" role="button"> Acessar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Um comércio seguro <br/> <span class="text-muted">Rápido e fácil </span></h2>
          <p class="lead"> Não se preocupe, nosso mercado funciona de uma maneira segura para te atender, após realizado sua compra, rapidamente enviaremos um code para ser resgatado.</p>
        </div>
        <div class="col-md-5">
          <img id="1" class="featurette-image img-responsive center-block" src="img/security.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Se a Steam não vende  <br/> <span class="text-muted">não é o fim</span></h2>
          <p class="lead"> Steam não comercializa itens de skins do h1z1, mas isso não é problema, uma vez que oferecemos a você essa incrivel oportunidade de obte-las direto na sua conta. </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/steamvende.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"> Skins trocaveis <br/> <span class="text-muted">Comercialize em outros sites</span></h2>
          <p class="lead">Nossas skins após ser efetuado a compra, existe um periodo de bloqueio do produto, pelos próprios desenvolvedores. Após este periodo, tenha um comércio livre.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/dolar.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer id="footer" class="footer">

				<div class="footer-copyright text-center">
					© 2017 UNDEADSKIN - Trabalho Acadêmico
				</div>
			</footer>

    </div><!-- /.container -->


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
