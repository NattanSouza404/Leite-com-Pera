<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/imagens/leitecompera2.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Compra</title>
</head>
<body>
    <header></header>

    <?php
        require_once 'conexao.php';

        $sql = "INSERT INTO extrato (idUsuario, produto, imagem, preco, quantidade)
                SELECT idUsuario, produto, imagem, preco, quantidade FROM carrinho;";

        if($conexao -> query($sql)){
            echo "<h1 id='resp'>Compra feita com sucesso!!</h1>";

            $sql = "DELETE FROM carrinho";

            $conexao -> query($sql);

        }else{
            echo "Erro: ".$sql." ".$conexao -> connect_error;
        }

        $conexao -> close();
                  
    ?>

    <script src="/js/header.js"></script>
    <meta http-equiv="refresh" content="1; URL='/index.html'">
</body>
</html>