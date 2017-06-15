<?php

  setcookie("logado", 'nao', time()+3600);
  setcookie("usuario", null, time()+3600);
  header("location: index.php");

?>
