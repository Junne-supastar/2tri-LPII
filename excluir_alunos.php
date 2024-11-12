<?php
     include "conexao.php";
     
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "delete from aluno where id = $id";
        $excluir = mysqli_query($conexao, $sql);


        // redirecionamento do usuário
        if($excluir){
            echo "
                <script>
                    window.alert('Aluno deletado com sucesso!');
                    window.location = 'listar_alunos.php';
                
                </script>
            ";
        } else{
            echo "
                <p> Banco de dados está com mau funcionamento no momento! Desculpe o erro x:< /p>
                <p> Tente novamente <b>mais tarde</b> ou entre em contato com o adm do Site...</p>
            
            ";
        }
     


    } else {
        echo "
         <p> Esta é uma página de tratamento de dados </p>
         <p> Clique <a href='alunos.php' > aqui </a> para acessar o formulário de cadastro </p>
        ";
    }





?>