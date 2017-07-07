<?php

  setcookie("logado", 'sim', time()+3600);
  //setcookie("usuario", serialize($usuario), time()+3600);
  if(isSet($_COOKIE['adm'])){
    header(sprintf('location: administradorHome.php'));
  }else{
    header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
  }


?>
