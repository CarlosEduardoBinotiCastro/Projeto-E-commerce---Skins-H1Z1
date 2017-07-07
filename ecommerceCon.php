<?php
    $conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");

    if($categoria != null){
        $sqlCount ="SELECT COUNT(*) AS total FROM skin WHERE codTipoSkin = '$categoria';";
    }else{
        $sqlCount ="SELECT COUNT(*) AS total FROM skin; ";
        $sqlCount2 ="SELECT COUNT(*) AS total FROM vendas GROUP BY codSkin;";

        $resultado = $conexaoBanco->query($sqlCount2);
        $total = $resultado->fetchAll();
        $totalRegistro = $total[0]['total'];
        $numPaginas2 = ceil($totalRegistro/$registros);

    }
    $resultado = $conexaoBanco->query($sqlCount);
    $total = $resultado->fetchAll();
    // controle de paginas
    //seta a quantidade de itens por página, neste caso, 2 itens
    //calcula o número de páginas arredondando o resultado para cima
    $totalRegistro = $total[0]['total'];
    $numPaginas = ceil($totalRegistro/$registros);



?>
