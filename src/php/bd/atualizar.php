<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/imagens/leitecompera2.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Atualizando</title>
</head>
<body>
    <header></header>
    <?php
        require_once 'conexao.php';
        
        if($_POST){
            $id = $_POST['id'];

            $idUsuario = 8220; //padrão :)
            $produto = $_POST['produto'];
            $preco = $_POST['preco'];
            $quantidade = $_POST['quantidade'];
            
            $tabela = $_POST['tabela'];

            $sql = "UPDATE ".$tabela."
                    SET idUsuario = '$idUsuario', produto = '$produto', preco = '$preco', quantidade = '$quantidade'
                    WHERE id = {$id};";

            if ($conexao -> query($sql)){
                echo "<h1 id='resp'>Dados atualizados com sucesso!!!!!!!!!!</h1>";
            } else {
                echo "Erro: ".$sql." ".$conexao -> connect_error;
            }

            $conexao -> close();
        }
    ?>

    <script src="/js/header.js"></script>
    <meta http-equiv="refresh" content="1; URL='/index.html'">
</body>
</html>