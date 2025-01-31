<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/imagens/leitecompera2.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Inserindo</title>
</head>
<body>
    <header></header>
    <?php
        require_once 'conexao.php';

        if($_POST){
            
            $idUsuario = 8220; //padrão :)
            
            $produto = $_POST['produto'];
            $preco = $_POST['preco'];
            $quantidade = $_POST['quantidade'];
            $imagem = $_POST['imagem'];
            
            $tabela = $_POST['tabela'];

            $sql = "insert into ".$tabela." values (default, '$idUsuario', '$produto', '$imagem' ,'$preco', '$quantidade');";

            if($conexao -> query($sql)){

                if ($tabela == "carrinho") {
                    echo "<h1 id='resp'>Adicionado ao carrinho!!</h1>";
                }

                if($tabela == "extrato") {
                    echo "<h1 id='resp'>Compra feita com sucesso!!</h1>";
                }

            }else{
                echo "Erro: ".$sql." ".$conexao -> connect_error;
            }

            $conexao -> close();
        }
    ?>

    <script src="/js/header.js"></script>
    <meta http-equiv="refresh" content="1; URL='/index.html'">
</body>
</html>