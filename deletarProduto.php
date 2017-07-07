<?php

  $conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");

  $codSkin = $_POST['codSkin'];

  $SQL = "DELETE FROM skin WHERE codSkin = '$codSkin';";
  $resultado = $conexaoBanco->query($SQL);
  header("location: controlProduto.php");


 ?>
