<?php
    $conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");

    if($categoria != null){
        $sqlCount ="SELECT COUNT(*) AS total FROM skin WHERE codTipoSkin = '$categoria';";
    }else{
        $sqlCount ="SELECT COUNT(*) AS total FROM skin; ";
    }
    $resultado = $conexaoBanco->query($sqlCount);
    $total = $resultado->fetchAll();
    // controle de paginas
    //seta a quantidade de itens por página, neste caso, 2 itens
    $registros = 9;
    //calcula o número de páginas arredondando o resultado para cima
    $totalRegistro = $total[0]['total'];
    $numPaginas = ceil($totalRegistro/$registros);

?>
