<?php

    include "conexao.php";

    if(isset($_GET['id'])) {
        // Entrada
        $id = $_GET['id'];

        // Processamento 

        $sql = "delete from produto where id = '$id'"; // Se usarmos apenas "delete from produto", todos os registros/linhas/tuplas serão apagados ! 
        $excluir = mysqli_query($conexao, $sql); // O query é uma expressão que se refere a tabela.

        // Saída - Feedback ao usuário e redirecionar a página

        if($excluir) {
            echo "
                <script>
                    alert('Registro Excluído com Sucesso!');
                    window.location = 'listar_produtos.php';
                </script>
            ";

            //redirecionamento de páginas pelo php
            //header('location: listar_produto.php');
        } else {
            echo "
                <p> Banco de Dados Temporariamente fora do ar. Tente novamente mais tarde. </p>
                <p> Entre em contato com o administrador do Site... </p>
            ";
            echo mysqli_error($conexao);
        }
    } else {
        echo "
        <p> Esta é uma página de tratamento de dados </p>
        <p> Clique <a href='produtos.php' > aqui </a> para acessar o formulário de cadastro </p>
        ";
    }
