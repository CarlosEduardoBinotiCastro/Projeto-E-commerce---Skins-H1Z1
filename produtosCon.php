<?php
    if($categoria != null){
        $SQL = "SELECT * FROM skin WHERE codTipoSkin = '$categoria' limit $inicio,$registros;";
    }else{
        $SQL = "SELECT * FROM skin limit $inicio,$registros; ";
    }
    $resultado = $conexaoBanco->query($SQL);

    $prod = $resultado->fetchAll();
?>
