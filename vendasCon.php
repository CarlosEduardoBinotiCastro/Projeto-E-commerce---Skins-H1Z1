<?php


    $SQL = "SELECT * FROM vendas WHERE codUsuario = '$codUsuario' limit $inicio,$registros;";
    $resultado = $conexaoBanco->query($SQL);
    $vendas = $resultado->fetchAll();

    $prod = array();
    $x =0;
    foreach ($vendas as $venda) {
      $codSkin = $vendas[$x]['codSkin'];
      $SQL2 = "SELECT * FROM skin WHERE codSkin = '$codSkin';";
      $resultado = $conexaoBanco->query($SQL2);
      $aux = $resultado->fetch();

      array_push($prod, $aux);
      $x++;
    }

?>
