<?php

setcookie('logado', null);
if (isSet($_COOKIE['adm'])) {
  # code...
  setcookie('adm', null);
}
header('location: index.php');

?>
