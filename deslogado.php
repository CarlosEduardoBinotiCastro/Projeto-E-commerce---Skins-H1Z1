<?php

  setcookie("logado", 'nao', time()+3600);
  setcookie("usuario", null, time()+3600);
  header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));



?>
