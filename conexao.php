<?php

$host="localhost";
$usuario="root";
$senha="";
$banco="shonner";

//conexao com o banco
$conexao=mysqli_connect($host, $usuario, $senha, $banco);

if(!$conexao){
    die("Erro ao conectar: ". msqli_connect_error());
}

mysqli_set_charset($conexao, "utf8");

//cloudinary
$cloud_name = "shonner";
$api_key = "388636185238439";
$api_secret = "3PQXG_ab42kidtSngVSs6dY4_XA";
?>