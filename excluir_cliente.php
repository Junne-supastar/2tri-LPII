<?php

    include "conexao.php";


    if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $sql = "delete from cliente where id = $id";
    $excluir = mysqli_query($conexao, $sql);

    if($excluir){
        echo "
            <script>
                window.alert('Registro excluido com sucesso!');
                window.location = 'listar_cliente.php';
            </script>
            ";
    } else {
        echo "
        <p> O Banco de dados está em mau funcionamento no momento! Sinto muito x:( </p>
        <p> Tente novamente more later ou fale com o administrador do site... </p>";
    }

    } else {
       echo "  
        <p> Esta é uma página de tratamento de dados </p>
        <p> Clique <a href='cliente.php' > aqui </a> para acessar o formulário de cadastro </p>";
    }

?>