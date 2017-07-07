<?php
  $conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");

  if($_POST != null){
      $nomeSkin = $_POST['nomeSkin'];
      $descSkin = $_POST['descSkin'];
      $quantSkin = $_POST['quantSkin'];
      $codTipoSkin = $_POST['codTipoSkin'];
      $precoSkin = $_POST['precoSkin'];
      $dir = 'imgBanco/';

  }

  $nomeFinal = $dir . $_FILES['imgSkin']['name'];
  if(isSet($_POST['codSkin'])){
    $codSkin = $_POST['codSkin'];
    $SQL = "UPDATE skin set nomeSkin = '$nomeSkin', descSkin = '$descSkin', quantSkin = '$quantSkin', codTipoSkin = '$codTipoSkin', precoSkin ='$precoSkin', imgSkin = '$nomeFinal' WHERE codSkin = '$codSkin';";
  }else{
    $SQL = "INSERT INTO skin (nomeSkin, descSkin, quantSkin, codTipoSkin, precoSkin, imgSkin) VALUES ('$nomeSkin', '$descSkin', '$quantSkin', '$codTipoSkin', '$precoSkin', '$nomeFinal');";
  }
  move_uploaded_file($_FILES['imgSkin']['tmp_name'], $nomeFinal);
  $resultado = $conexaoBanco->query($SQL);
  header("location: controlProduto.php");

 ?>
