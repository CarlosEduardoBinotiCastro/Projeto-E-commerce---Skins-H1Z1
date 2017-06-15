<?php
  //include_once ("conn/conexao.php");

    $conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");

  if ($_POST) {
    $codSkin = $_POST['codSkin'];
    $codUsuario = $_POST['codUsuario'];
    $preco= $_POST['preco'];


    $SQL = "INSERT INTO 'vendas' (codUsuario, codSkin, precoVenda) VALUES ('$codUsuario', '$codSkin', '$preco')";
    $resultado = $conexaoBanco->query($SQL);


    header("location: paginaConta.php");

  }
