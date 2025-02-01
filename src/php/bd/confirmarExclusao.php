<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="icon" href="/imagens/leitecompera2.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    
    <title>Confirmar Exclusão</title>
</head>
<body style="background-color:#fffef0;">
  <header></header>

    <div class="tabela">
        <h3 style="margin: 20px">Deseja mesmo excluir essa conta do carrinho?</h3>
        <table>
            <tr>
                <th>id Usuário</th>
                <th>Produto</th>
                <th>Foto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Preço Total</th>
            </tr>

            <?php
                require_once 'conexao.php';
                if($_POST) {
                    $id = $_POST["id"];
                    $sql = "select * from carrinho where(id = $id);";
                    $result = $conexao->query($sql);

                    while($row = $result->fetch_assoc())
                    {
                    echo
                    '<tr>
                        <td class="dados">'.$row['idUsuario'].'</td>
                        <td class="dados">'.$row['produto'].'</td>
                        <td class="dados"><img src='.$row['imagem'].' height="125px"> </td>
                        <td class="dados">R$ '.number_format($row['preco'], 2, ',', '.').'</td>
                        <td class="dados">'.$row['quantidade'].'</td>
                        
                        <td class="dados">R$ '.number_format($row['preco'] * $row['quantidade'], 2, ',', '.').'</td>
                    </tr>';
                    }

                }

                $conexao -> close();
                
            ?>
        </table>
    </div>

    <form method="POST" action="excluir.php">
        <div class="row-6">
            <label for="exampleFormControlInput1" class="form-label"><strong>Deseja mesmo excluir?</strong></label>
            <input type="hidden" name="tabela" value="carrinho">
            <input required type="text" class="form-control" id="exampleFormControlInput1" name="id" placeholder="Digite o id do funcionario" readonly="readonly" value = <?php echo ($id) ?>>
        </div>
        <button class="card" style = "background-color: rgb(255, 0, 0)"><h6 style="color: white">Excluir</h6></button>
    </form>
    
    <hr/>

    <footer></footer>

    <script src="/js/header.js"></script>
    <script src="/js/footer.js"></script>

</body>
</html>