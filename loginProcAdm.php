<?php
  //include_once("pegaNome.php");
      $conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");

    if(isset($_POST['login'])){
      $nome = $_POST['login'];
    }

    if(isset($_POST['senha'])){
      $senha = $_POST['senha'];
      $senha = md5($senha);
    }

    $SQL = "SELECT * FROM `adm` WHERE `login` = '$nome' AND `senha` = '$senha'";

    $resultado = $conexaoBanco->query($SQL);
    $logar = $resultado->fetch();
    if($logar != null){
      setcookie("adm", serialize($logar), time()+3600);
      header("location: logado.php");
    }else{
      echo " teste";
      header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
    }


  ?>
