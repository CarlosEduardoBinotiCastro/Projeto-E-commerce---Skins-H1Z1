<?php

function estaLogado(){
  if(isSet($_COOKIE['logado'])){ //checa se existe o cookie de nome logado
    if($_COOKIE['logado'] == 'sim'){ //checa se o valor do cookie = sim
      return true;
    }
  }
  return false;
}

?>
