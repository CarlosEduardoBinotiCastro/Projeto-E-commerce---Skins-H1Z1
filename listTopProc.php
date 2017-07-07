<?php

  $conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");

  $SQL = "SELECT s.nomeSkin, s.codSkin, s.imgSkin, s.quantSkin, s.precoSkin, COUNT(*) as total  FROM skin s, vendas u WHERE s.codSkin = u.codSkin GROUP BY s.nomeSkin ORDER BY total DESC limit $inicio,$registros";
  $resultado = $conexaoBanco->query($SQL);
  $prodBest = $resultado->fetchAll();

  $SQL = "SELECT * FROM skin limit $inicio,$registros";
  $resultado = $conexaoBanco->query($SQL);
  $prod = $resultado->fetchAll();


  //echo $prod['nomeskin'];
 ?>
