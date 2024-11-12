<?php

include "conexao.php";

if (isset($_GET['id'])) {
     $id = $_GET['id'];

     $sql = "select * from aluno where id = $id";
     $seleciona = mysqli_query($conexao, $sql);
     $exibe = mysqli_fetch_array($seleciona);

     $nome = $exibe['nome'];
     $telefone = $exibe['telefone'];
     $email = $exibe['email'];

?>

     <!doctype html>
     <html lang="en">

     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Bootstrap demo</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     </head>

     <body>
          <div class="container">
               <h1 class="m">Cadastro de Alunos</h1>
               <hr>
               
               <form name="edicao" method="post" action="update_alunos.php">
                    <input type="hidden" name="id" id="id" value="<?=$id?>">

                    <div class="mb-3">
                         <label class="form-label" for="nome"> Nome </label>
                         <input type="text" class="form-control" id="nome" name="nome" required value="<?php echo $nome ?>">
                    </div>

                    <div class="mb-3">
                         <label class="form-label" for="telefone"> Telefone </label>
                         <input type="number" class="form-control" id="telefone" name="telefone" step="0.10" required value="<?php echo $telefone ?>">
                    </div>

                    <div class="mb-3">
                         <label class="form-label" for="email"> email </label>
                         <input type="email" class="form-control" id="email" name="email" required value="<?php echo $email ?>">
                    </div>

                    
                    <div class="mb-3 text-end">
                         <button type="submit" class="btn btn-outline-primary">Editar</button>
                         <button type="reset" class="btn btn-outline-danger" onclick="history.go(-1)">Voltar</button>
                    </div>

               </form>

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