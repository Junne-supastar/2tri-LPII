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
    <h1 class = "mt-3 text-center">Edição de Produtos</h1>
    
        <form name="edicao" method="post" action="update_produtos.php">
          <input type="hidden" name="id" value="<?=$id?>">
          <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao" aria-describedby="emailHelp" value="<?php echo $descricao?>" required>
        <div id="emailHelp" class="form-text"></div>
          </div>

          <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" class="form-control" id="preco" name="preco" step="0.5" value="<?php echo $preco?>" required>
          </div>
          
          <div class="mb-3">
              <label class="estoque" for="form-label">Estoque</label>
              <input type="number" class="form-control" id="estoque" name="estoque" value="<?php echo $estoque?>" required>
          </div>
          <!--Nunca esquecer de colocar os names!-->

          <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary" class="btn btn-primary">Editar</button>
            <input type="button"  class="btn btn-warning" onclick="history.go(-1)" value="Voltar">
          </div>

        </form>
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