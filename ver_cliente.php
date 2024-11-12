<?php
    include "conexao.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "select * from cliente where id = $id";
        $seleciona = mysqli_query($conexao, $sql);
        $exibe = mysqli_fetch_array($seleciona);

        $nome = $exibe['nome'];
        $cpf = $exibe['cpf'];
        $email = $exibe['email'];

    
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
            <div class="container">
                <h1 class="text-center"> <?php echo "Cliente: ".$nome?></h1>

                <hr>
                     <p><b>CPF: </b> <?php echo $cpf?></p>
                     <p><b>E-mail: </b> <?php echo $email?></p>
                <hr>

                <button class="btn btn-warning" onclick="location.href = 'editar_cliente.php?id=<?php echo $id?>';">Editar</button>
                <button class="btn btn-primary" onclick="history.go(-1)">Voltar</button>
            </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
</body>
</html>


<?php
} else{
    echo "
    <p> Esta é uma página de tratamento de dados </p>
        <p> Clique <a href='clientes.php' > aqui </a> para acessar o formulário de cadastro </p>
    ";
}
?>