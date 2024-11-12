<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Arquivo-Padrão para conexão</title>
</head>
<body>
    <?php 
    $local = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "infolindos";

    $conexao =  mysqli_connect($local, $usuario , $senha ,$banco);
    // facilita a conexão entre o php e o BD


    header("content-type:text/html; charset=utf-8");
    mysqli_query ($conexao, "SET NAMES 'utf8'");
    mysqli_query ($conexao, "SET character_set_connection = utf8 ");
    mysqli_query ($conexao, "SET character_set_client = utf8 ");
    mysqli_query ($conexao, "SET character_set_results = utf8 ");
    // permite que caracteres especiais sejam postos no banco de dados
    ?>
</body>
</html>