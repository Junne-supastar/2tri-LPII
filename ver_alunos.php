<?php

    include "conexao.php";

    if(isset($_GET['id'])){
        // por que usamos o get ao invés do post ??? perguntar  
        $id = $_GET['id'];

        $sql = "select * from aluno where id = $id";
                    // não se esqueça, o select * from recolhe todos os dados(registros) de todas as colunas do seu bd aluno e exibi, ele busca e retorna todos os dados armazenados na tabela
        $seleciona = mysqli_query($conexao, $sql);
        $exibe = mysqli_fetch_array($seleciona);

        // por que transformamos os registros em array? 


        $nome = $exibe['nome'];
        $telefone = $exibe['telefone'];
        $email = $exibe['email'];
    
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
            <div class="container">
                <h1 class="text-center mt-3"><?php echo "Aluno: ".$nome?></h1>
                <hr>
                <p><b>Telefone: </b> <?php echo $telefone?></p>
                <p><b>Email: </b><?php echo $email?></p>
                <hr>

                <div class="text-end">
                        <button class="btn btn-primary" onclick="location.href='editar_alunos.php?id=<?php echo $id?>';"> Editar </button>

                    <div class="btn btn-warning" onclick ="history.go(-1)">Voltar</div>
                </div>

            </div>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
    </body>
    </html>


    <?php
    } else {
        echo "
        <p> Esta é uma página de tratamento de dados </p>
        <p> Clique <a href='alunos.php' > aqui </a> para acessar o formulário de cadastro </p>
        ";
    }
    ?>




