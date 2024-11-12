<?php
    include "conexao.php";
    //Reaproveitamento de código, vai incluir a conexao do BD com o PHP

    if(isset($_POST['descricao'])){
        // entrada
        $descricao = trim($_POST['descricao']);
        $preco = trim($_POST['preco']);
        $estoque = trim($_POST['estoque']);

        // processamento

        $sql = "insert into produto(descricao,preco,estoque) values ('$descricao','$preco','$estoque')";
        $cadastrar = mysqli_query($conexao,$sql);

        // saida feedback ao usuário

        if ($cadastrar) {
            echo "
            <script> 
                alert('Produto Cadastrado com Sucesso!');
                window.location = 'listar_produtos.php';
            </script>
            ";
        } else {
            echo "
                <p> Banco de dados Temporariamente fora do ar. Tente novamente more later! <br> Entre em contato com o ADM do site para reportar o problema.</p>
                <p> Clique <a href='produtos.php'> aqui </a> para retornar ao site.</p>
            ";
        }
        }else{
        // tratamento de erro e redirecionamento
        echo "
            <p> Esta é uma página de tratamento de dados</p>
            <p> Clique <a href='produtos.php'>aqui</a> para acessar o formulário de cadastro.</p>
        ";
    }


?>