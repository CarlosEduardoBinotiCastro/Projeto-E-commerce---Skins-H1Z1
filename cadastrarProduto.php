

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
                  <?php
                    if(isSet($_POST['codSkin'])){
                   ?>
                       Alterar Produto
                   <?php }else{ ?>
                       Cadastrar Produto
                  <?php } ?>
</div>

                </div>
                        <div class="page-header">
                          <?php
                            if(isSet($_POST['codSkin'])){
                           ?>
                              <h2>&nbsp &nbsp &nbsp Alterar Produto / Produto: <?php echo $_POST['nomeSkin']; ?></h2>
                           <?php }else{ ?>
                              <h2>&nbsp &nbsp &nbsp Cadastrar Produto </h2>
                          <?php } ?>
                        </div>


                        <!-- Inicio  -->

                        <div class="shop-loop grid">
                            <ul class="products">

                                <li class="product product-no-border style-2 col-md-8 col-sm-8">


                                    <div class="product-container">
                                        <figure>
                                            <div class="product-wrap">
                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                    <div class="col-sm-8">
                                                        <div class="col-md-9">

                                                          <?php
                                                            if(isSet($_POST['codSkin'])){
                                                           ?>
                                                              <form class="" action="cadastrarProdutoProc.php" method="post" enctype="multipart/form-data">
                                                                <input hidden type="text" name="codSkin" value="<?php echo $_POST['codSkin']; ?>">
                                                           <?php }else{ ?>
                                                              <form class="" action="cadastrarProdutoProc.php" method="post" enctype="multipart/form-data">
                                                          <?php } ?>



                                                            <p> Imagem: </p> <input type="file" name="imgSkin" required/> <br />
                                                            <p> Quantidade: </p> <input type="text" name="quantSkin" value="" required> <br \>
                                                            <p> Nome: </p> <input type="text" name="nomeSkin" value="" required> <br \>
                                                            <p> valor:  </p> <input type="text" name="precoSkin" value="" required> <br \>
                                                            <p> Descrição: </p> <input type="text" name="descSkin" value="" required> <br \>
                                                            <br \>
                                                            <p>Categoria da Skin: </p>
                                                            <select name="codTipoSkin">
                                                              <option value="1">Body</option>
                                                              <option value="2">Head</option>
                                                              <option value="3">Weapon</option>
                                                              <option value="4">Face</option>
                                                              <option value="5">Feet</option>
                                                              <option value="6">Hands</option>
                                                              <option value="7">Legs</option>
                                                              <option value="8">Back</option>
                                                            </select>
                                                            <br />
                                                            <br />
                                                            <?php
                                                              if(isSet($_POST['codSkin'])){
                                                             ?>
                                                                <input class="btn btn-success" type="submit" name="Alterar" value="Alterar">
                                                             <?php }else{ ?>
                                                               <input class="btn btn-success" type="submit" name="Confirmar" value="Confirmar">
                                                            <?php } ?>
                                                            </form>
                                                            <br \>
                                                            <form class="" action="controlProduto.php" method="post"> <input class="btn btn-danger" type="submit" name="Cancelar" value="Cancelar"> </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </li>
                                <br />
                                <br />


                            </ul>
                        </div>





                    <!-- fim -->
            </div>
        </div>



    </body>
</html>
