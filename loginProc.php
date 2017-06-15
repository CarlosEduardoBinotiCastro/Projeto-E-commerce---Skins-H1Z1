<?php
  //include_once("pegaNome.php");
      $conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");

    if(isset($_POST['nome'])){
      $nome = $_POST['nome'];
    }

    if(isset($_POST['senha'])){
      $senha = $_POST['senha'];
      $senha = md5($senha);
    }

    $SQL = "SELECT * FROM `usuario` WHERE `nomeUsuario` = '$nome' AND `senhaUsuario` = '$senha'";
    $resultado = $conexaoBanco->query($SQL);
    $logar = $resultado->fetch();
    if($logar != null){
      setcookie("usuario", serialize($logar), time()+3600);
      header("location: logado.php");
    }else{
      header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
    }


  ?>
