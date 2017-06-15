<?php

  setcookie("logado", 'sim', time()+3600);
  //setcookie("usuario", serialize($usuario), time()+3600);
  header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));

?>
