<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="icon" href="/imagens/leitecompera2.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    
    <title>Leite com Pêra</title>

</head>
<body style="background-color:#fffef0;">
    <header></header>

    <div class="container-fluid" style="padding: 220px">
      <div class="tabela">
        <h1 style="margin: 20px">Carrinho <img src="/imagens/icones/carrinho.png" width="50px"> </h1>
        <table style="border: 20px">
          <tr>
              <th>id Usuário</th>
              <th>Produto</th>
              <th>Foto</th>
              <th>Preço</th>
              <th>Quantidade</th>
              <th>Preço Total</th>
              <th>Editar Qtde.</th>
              <th>Excluir (por id)</th>
          </tr>

          <?php
            require_once 'bd/conexao.php';

            $sql = "select * from carrinho;";
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

                <td style="border: 1px solid black;">
                  <form method="POST" action="bd/atualizar.php">
                  <br/> 
                    <input type="hidden" value='.$row['id'].' name="id" readonly="readonly">
                    <input type="hidden" value='.$row['idUsuario'].' readonly="readonly">
                    <input type="hidden" value='.$row['produto'].' readonly="readonly" name="produto">
                    <input type="hidden" value='.$row['imagem'].' readonly="readonly" name="imagem">
                    <input type="hidden" value='.$row['preco'].' readonly="readonly" name="preco">
                    <input type="number" value='.$row['quantidade'].' name="quantidade">

                    <input type="hidden" name="tabela" value="carrinho">

                    <button class="card"><h6 style = "color: rgb(0, 0, 0)">Atualizar</h6></button>
                  </form>
                </td>

                
                <td style="border: 1px solid black;">
                  <form method="POST" action="bd/confirmarExclusao.php">
                  <br/> 
                    <input value='.$row['id'].' name="id" >
                    <input type="hidden" name="tabela" value="carrinho">

                    <button class="card"><h6 style = "color: rgb(0, 0, 0)">Excluir</h6></button>
                  </form>
                </td>
              </tr>
              
              ';
            }

            $conexao -> close();
          
          ?>
        </table>
      </div>
    </div>

    <div class="container-fluid" style="padding: 20px">
      <form method="POST" action="bd/comprarDoCarrinho.php"> 
          <button class="botaoDeCompra"><h2>Finalizar compra</h2></button>
      </form>
    </div>

    <footer></footer>

    <script src="/js/header.js"></script>
    <script src="/js/footer.js"></script>

</body>
</html>