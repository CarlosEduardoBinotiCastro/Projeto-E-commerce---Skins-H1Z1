<?php
  //include_once ("conn/conexao.php");

    $conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");

  if ($_POST) {
    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];


    $SQL = "INSERT INTO 'usuario' (nomeUsuario, senhaUsuario, telUsuario, endUsuario) VALUES ('$nome', '$senha', '$telefone', '$endereco')";
    $resultado = $conexaoBanco->query($SQL);



    header("location: index.php");

  }


?>
