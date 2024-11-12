<?php
    include "conexao.php";

    $sql = "select * from cliente order by nome";
    $seleciona = mysqli_query($conexao, $sql);
    


?>



<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/listar_produtos.css">
  </head>

  <body>
      <div class="container">
          <h1 class="text-center mb-5 mt-5"> Lista de Cliente </h1>
            
          <div class="container">
            <div class="row bg-dark text-light text-center p-3">
                <div class="col-2"> id</div>
                <div class="col-3"> Nome</div>
                <div class="col-3"> E-mail</div>
                <div class="col-2"> CPF</div>
                <div class="col-2"> Controle</div>
            </div>
            
            <?php
            while($exibe = mysqli_fetch_array($seleciona)){
              $id = $exibe['id'];
              ?>
        
        <div class="row text-dark bg-dark-subtle text-center">
          <div class="col-2"> <?php echo $exibe['id']?></div>
          <div class="col-3"> <?php echo $exibe['nome']?></div>
          <div class="col-3 "> <?php echo $exibe['email']?></div>
          <div class="col-2"> <?php echo $exibe['cpf']?></div>
              <div class="col icones"> 
              <a href="ver_cliente.php?id=<?php echo $id?>"><img src="img/ver.png" alt=""></a>

              <a href="editar_cliente.php?id=<?php echo $id?>"> <img src="img/editar.png" alt="">
              </a>

              <a href="excluir_cliente.php?id=<?php echo $id?>" onclick="return confirm('Confirma a exclusão registro?')"><img src="img/delete.png" alt=""></a>
              </div>
        </div>

              <?php 
                } 
                ?>
          </div>

            <div class="mt-3 text-end">
              <a href="cliente.php"> <button class="btn btn-success "> Cadastrar cliente </button></a>
            </div>
      </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>