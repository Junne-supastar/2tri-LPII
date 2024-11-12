<?php

    include "conexao.php";

    if(isset($_GET['id'])){
        // entrada
        $id = $_GET['id'];
        
        //processamento
        $sql = "select * from produto where id = $id";
        $seleciona = mysqli_query($conexao,$sql); // executa o sql
        $exibe = mysqli_fetch_array($seleciona); //carrega o vetor com o banco de dados

        //carrega as variaveis com dados do banco - opcional
         $descricao = $exibe['descricao'];
         $preco = $exibe['preco'];
         $estoque = $exibe['estoque'];
         



?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
  </head>
  <body>
  <div class = "container">
    <h1 class = "mt-3 text-center"> <?php echo "Produto: ".$descricao?></h1>
    <hr>
    <p> <b>Preço:</b> <?php echo $preco?> </p>
    <p> <b>Estoque:</b> <?php echo $estoque?> </p>

    <hr>
    <div class="row">
        <div class="col text-start">
            <button type="button" class="btn btn-warning" onclick="history.go(-1)"> Voltar</button>
        </div>
        <div class="col text-end">
            <button type="button" class="btn btn-primary" onclick="location.href='editar_produtos.php?id=<?php echo $id?>';"> Editar</button>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
    <?php 
    } else{
        echo "
        <p> Esta é uma página de tratamento de dados </p>
        <p> Clique <a href='produtos.php' > aqui </a> para acessar o formulário de cadastro </p>
        ";
    }
    ?>