<?php
  //include_once ("conn/conexao.php");

    $conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");
    $user = unserialize($_COOKIE['usuario']);

  if ($_POST) {
    $codSkin = $_POST['codSkin'];
    $codUsuario = $_POST['codUsuario'];
    $preco= $_POST['preco'];

    $novoPreco = $user['carteira'] - $preco;

    $SQL = "INSERT INTO 'vendas' (codUsuario, codSkin, precoVenda) VALUES ('$codUsuario', '$codSkin', '$preco')";
    $SQL2 = "UPDATE usuario SET carteira = '$novoPreco' WHERE codUsuario = '$codUsuario';";

    $resultado2 = $conexaoBanco->query($SQL2);
    $resultado = $conexaoBanco->query($SQL);

    $SQL3 = "SELECT * FROM usuario WHERE codUsuario = '$codUsuario';";

    $resultado3 = $conexaoBanco->query($SQL3);
    $logar = $resultado3->fetch();

    $SQL = "SELECT * FROM skin WHERE codSkin = '$codSkin';";
    $resultado = $conexaoBanco->query($SQL);
    $skin = $resultado->fetch();
    $codSkin = $skin['codSkin'];

    $novaQuant = $skin['quantSkin'] - 1;

    $SQL = "UPDATE skin SET quantSkin = '$novaQuant' WHERE codSkin = '$codSkin';";
    $resultado = $conexaoBanco->query($SQL);

    echo $logar['carteira'];
    setcookie("usuario", serialize($logar), time()+3600);
    header("location: paginaConta.php");

  }
