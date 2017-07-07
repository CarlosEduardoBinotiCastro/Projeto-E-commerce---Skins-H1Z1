<?php
$registros = 4;
$categoria = null;
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
//variavel para calcular o início da visualização com base na página atual
$inicio = ($registros*$pagina)-$registros;
include("ecommerceCon.php");
include("listTopProc.php");
 ?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DW - Área Administrativa</title>
        <link href="adm/css/bootstrap.css" rel="stylesheet">
        <link href="adm/css/personalizado.css" rel="stylesheet">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row content">
                <div class="col-sm-3 sidenav hidden-xs">
                    <h2>Dashboard</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="listarTop.php">Mais Vendidos</a></li>
                        <li><a href="controlProduto.php">Produtos</a></li>
                        <li><a href="administradorLogout.php">Sair</a></li>
                    </ul>
                </div><br>
                <div class="col-sm-9"><div class="well text-center">
    Mais Vendidos
</div>
                </div>
                        <div class="page-header">
                            <h1>&nbsp &nbsp &nbsp Listar Top 10 Skins</h1>
                        </div>

                        <!-- Inicio  -->

                        <div class="shop-loop grid">
                            <ul class="products">

                                <?php
                                            $i = 0;
                                            foreach($prodBest as $prods) {
                                ?>



                                <li class="product product-no-border style-2 col-md-6 col-sm-6">
                                    <h3> <?php echo ($i+1).'°'; ?></h3>
                                    <div class="product-container">
                                        <figure>
                                            <div class="product-wrap">
                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                    <div class="col-sm-6">
                                                        <div class="col-md-5">
                                                            <a><img width="100" height="100" src=<?php echo $prodBest[$i]['imgSkin']; ?> alt=""/></a>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <p> Total vendido: <?php echo $prodBest[$i]['total']; ?> </p>
                                                            <p> Nome: <?php echo $prodBest[$i]['nomeSkin']; ?> </p>
                                                            <p> valor: <?php echo $prodBest[$i]['precoSkin']; ?> </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </figure>
                                    </div>


                                </li>
                                <br />
                                <br />

                                <?php
                                    $i++;
                                 }
                                 ?>

                            </ul>
                            <br />
                        </div>

                        <div class="col-sm-6">
                            <div class="col-md-6">
                                <nav class="commerce-pagination">
                                    <b> <h4> Paginas </h4> </b>
                                    <div class="paginate">
                                        <div class="paginate_links">
                                        <?php for($i = $numPaginas2; $i >= 1; $i--) { ?>
                                            <a class="btn btn-sm btn-success" href='listarTop.php?pagina=<?php echo "$i" ?>'> <?php echo "$i" ?></a>
                                        <?php	} ?>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>

                    <!-- fim -->
            </div>
        </div>



    </body>
</html>
