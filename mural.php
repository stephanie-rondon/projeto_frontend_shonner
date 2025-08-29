<?php
include "conexao.php";

if(isset($_POST['cadastra'])){
    $nome=msqli_real_escape_string($conexao, $_POST['nome']);
    $email=msqli_real_escape_string($conexao, $_POST['email']);
    $mensagem=msqli_real_escape_string($conexao, $_POST['mensagem']);

    $sql= "insert into recados (nome, email, mensagem) values ('$nome', '$email', '$mensagem')";
    mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: ". mysqli_error($conexao));
    header("Location: mural.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Mural de pedidos</title>
    <script src="scripts/jquery.js"></script>
<script src="scripts/jquery.validate.js"></script>
<script>
    $(document).ready(function() {
        $("#mural").validate({
            rules: {
                nome: { required: true, minlength: 4 },
                email: { required: true, email: true },
                mensagem: { required: true, minlength: 10 }
            },
            messages: {
                nome: { required: "Digite o seu nome", minlength: "O nome deve ter no mínimo 4 caracteres" },
                email: { required: "Digite o seu e-mail", email: "Digite um e-mail válido" },
                mensagem: { required: "Digite sua mensagem", minlength: "A mensagem deve ter no mínimo 10 caracteres" }
        }
    });
});
</script>
</head>
<body>
    <main class="mural">
        <div id="geral">
            <div id="header">
                <h1>Mural de pedidos</h1>
            </div>

            <div id="formulario_mural">
                <form action="" id="mural" method="post">
                    <label for="">Nome:</label>
                </form>
            </div>
        </div>
    </main>
</body>
</html>