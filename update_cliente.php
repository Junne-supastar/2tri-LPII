<?php

    include "conexao.php";


    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];

        $sql = "update cliente set nome = '$nome', cpf = '$cpf', email = '$email' where id = '$id'";
        $alterar = mysqli_query($conexao,$sql);

        if($alterar){
            echo "
            <script>
                alert('Registro alterado com sucesso!');
                window.location = 'listar_cliente.php';
            </script>
            ";
        } 

    } else{
        echo "
        <p> Banco de Dados temporariamente fora do ar. Tente novamente mais tarde </p>
        <p> Clique <a href='cliente.php' > aqui </a> para acessar o formulário de cadastro </p>
        ";
    }
?>
