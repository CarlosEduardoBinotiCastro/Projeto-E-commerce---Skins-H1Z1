<?php
    $conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");

    $SQL = "SELECT * FROM skin";
    $resultado = $conexaoBanco->query($SQL);

    $prod = $resultado->fetchAll();

  ?>
