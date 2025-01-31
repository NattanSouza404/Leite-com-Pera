<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="icon" href="/imagens/leitecompera2.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Leite com Pêra</title>
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
    <header></header>

    <?php

    $imagem = $_POST['imagem'];
    $preco = $_POST['preco'];
    $produto = $_POST['produto'];
    $descricaoProduto = $_POST['descricaoProduto'];

    ?>
    
    <div class="container-fluid" style="padding: 100px">
      <div class="row">
        <div class="col-2" align ="left"></div>
          <div class="col-5" align ="left">
            <?php echo '<img src="'.$imagem. '"height="500px" >'; ?>
          </div>
          
          <div class="col-3">

            <?php echo "<h1 style = 'color: rgb(0, 0, 0)'>".$produto."</h1>" ?>
            <?php echo "<h6 style = 'text-align: left; color: rgba(0, 0, 0, 0.596)'>".$descricaoProduto."</h6>" ?>
            <?php echo "<h2 style = 'text-align: left; color: #5468FF'> R$".$preco."</h2>" ?>

            <form style = 'text-align: left;' method="POST" action="/php/bd/inserir.php">
                <?php
                    echo "<input type='hidden' name='produto' value=".$produto.">";
                    echo "<input type='hidden' name='preco' value=".$preco.">";
                    echo "<input type='hidden' name='imagem' value=".$imagem.">";
                ?>

                <br/>

                <h6 style = 'text-align: left;'>quantidade:</h6>
                <input type="number" name="quantidade">

                <input type="hidden" name="tabela" value="extrato"><br/>
                <button class="botaoDeCompra">Comprar agora</button>
            </form>

            <br/>

            <form style = 'text-align: left;' method="POST" action="bd/inserir.php">
                <?php
                    echo "<input type='hidden' name='produto' value=".$produto.">";
                    echo "<input type='hidden' name='preco' value=".$preco.">";
                    echo "<input type='hidden' name='imagem' value=".$imagem.">";
                ?>  
                    <h6 style = 'text-align: left;'>quantidade:</h6>
                    <input type="number" name="quantidade">

                    <input type="hidden" name="tabela" value="carrinho"> <br/>
                    <button class="botaoDeCompra">+<img src="/imagens/icones/carrinhoBranco.png" width="20px"></button>
            </form>

          </div>

        <div class="col-2" align ="left"></div>
        </div>
    </div>


    <footer></footer>

    <script src="/js/header.js"></script>
    <script src="/js/footer.js"></script>
    
</body>
</html>