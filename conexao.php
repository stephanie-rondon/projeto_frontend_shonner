<?php

$host="localhost";
$usuario="root";
$senha="";
$banco="shonner";

$conexao=mysqli_connect($host, $usuario, $senha, $banco);

if(!$conexao){
    die("Erro ao conectar: ". msqli_connect_error());
}

msqli_set_charset($conexao, "utf8");
?>