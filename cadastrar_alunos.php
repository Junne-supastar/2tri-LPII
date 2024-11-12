<?php
  include "conexao.php";

  if(isset($_POST['nome'])){
        $nome = trim($_POST['nome']);
        $telefone = trim($_POST['telefone']);
        $email = trim($_POST['email']);
  
  $sql =  "insert into aluno(nome,telefone,email) values ('$nome', '$telefone', '$email')";
  $cadastrar = mysqli_query($conexao, $sql);

  if($cadastrar){
      echo " 
      <script> 
        alert('Pessoa Cadastrada com sucesso!');
        window.location = 'listar_alunos.php';
      </script>
      ";

  } else{
      echo "
          <p> Banco de dados Temporariamente fora do ar. Tente novamente more later! <br> Entre em contato com o ADM do site para reportar o problema.</p>
          <p> Clique <a href='alunos.php'> aqui </a> para retornar ao site.</p>";
  }


  } else {
    echo"
     <p> Esta é uma página de tratamento de dados</p>
      <p> Clique <a href='alunos.php'>aqui</a> para acessar o formulário de cadastro.</p>";
  }
?>