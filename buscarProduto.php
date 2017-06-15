<?php
    $conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");

    $SQL = "SELECT * FROM skin WHERE codSkin = '$cod';";
    $resultado = $conexaoBanco->query($SQL);
    $prod = $resultado->fetch();

 ?>
