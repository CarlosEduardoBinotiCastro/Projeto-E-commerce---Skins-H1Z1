<?php
$conexaoBanco = new PDO('sqlite:Ecommerce.sqlite') or die ("Não Conectou!");
$user = unserialize($_COOKIE['usuario']);
$preco = $_POST['valor'];


$codUsuario = $user['codUsuario'];
$novoPreco = $user['carteira'] + $preco;
$SQL2 = "UPDATE usuario SET carteira = '$novoPreco' WHERE codUsuario = '$codUsuario';";

$resultado2 = $conexaoBanco->query($SQL2);

$SQL3 = "SELECT * FROM usuario WHERE codUsuario = '$codUsuario';";

$resultado3 = $conexaoBanco->query($SQL3);
$logar = $resultado3->fetch();
echo $logar['carteira'];
setcookie("usuario", serialize($logar), time()+3600);
header("location: paginaConta.php");

?>
