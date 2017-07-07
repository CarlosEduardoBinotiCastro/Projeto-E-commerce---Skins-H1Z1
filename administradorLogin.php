<?php
include_once("funcaoLogarAdm.php");
$logado = estaLogado();
?>


<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DW - Área Administrativa</title>
        <link href="adm/css/bootstrap.css" rel="stylesheet">
        <link href="adm/css/signin.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <form method="POST" action="loginProcAdm.php" class="form-signin">
                <h2 class="form-signin-heading text-center">Área Administrativa</h2>


                <div style="padding-bottom: 20px;">
                    <label class="sr-only">Usuário: </label>
                    <input type="text" class="form-control" name="login" placeholder="Digite seu Login">
                </div>

                <div style="padding-bottom: 20px;">
                    <label class="sr-only">Senha: </label>
                    <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
                </div>

                <input type="submit" class="btn btn-lg btn-danger btn-block" value="Acessar" name="SendLogin">
                <a class="btn btn-lg btn-danger btn-block" href="administradorLogout.php" role="button"> Voltar </a>
            </form>
        </div>
    </body>
</html>
