<?php

include "conexao.php";


     if(isset($_POST['id'])){
          $id = $_POST['id'];
          $nome = $_POST['nome'];
          $telefone = $_POST['telefone'];
          $email = $_POST['email'];

          $sql = "update aluno set nome = '$nome', telefone = '$telefone', email = '$email' where id = '$id' ";
          $alterar = mysqli_query($conexao,$sql);


          if($alterar){
               echo "
               
               <script>
                    window.alert('Os dados foram atualizados com sucesso!');
                    window.location = 'listar_alunos.php';
               </script>";
          }


     } else {
          echo "
          <p> Esta é uma página de tratamento de dados </p>
          <p> Clique <a href='cliente.php' > aqui </a> para acessar o formulário de cadastro </p>";
     }

?>