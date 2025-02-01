function criarProduto(produto, preco, imagem, descricaoCurta, descricaoProduto){
    return {
      "produto": produto,
      "preco": preco,
      "imagem": imagem,
      "descricaoCurta": descricaoCurta,
      "descricaoProduto": descricaoProduto,
    }
  }
  
const camisetas = [
  criarProduto(
    "Camiseta Do Palmeiras",
    49.90,
    "/imagens/produtos/camisaPalmeiras.png",
    "Camisa do verdão", 
    `Camiseta do consagrado time paulista de cor verde e branca,
    o palestra itália palmeiras!`,
  ),
  
  criarProduto(
    "Camiseta Amongus",
    88.34,
    "/imagens/produtos/camisetaAmongus.png",
    "Há um impostor entre nós...", 
    `A camiseta mais bonita da nossa loja, venha se vestir de 
    impostor você tambem!`,
  ),
  
  criarProduto(
    "Camiseta Mauro",
    230.00,
    "/imagens/produtos/camisetaMario.png",
    "Super Mauro", 
    "Camiseta do personagem mais iconico do playstation 2!"
  ),

  criarProduto(
    "Camiseta Marceline",
    8000.04,
    "/imagens/produtos/camisetaJujuba.png",
    "É a camiseta original", 
    "A camiseta que a princesa jujuba deu pra marceline em Hora de Aventura, não é uma réplica é essa camiseta mesmo"
  ),

  criarProduto(
    "Camiseta Creeper",
    39.90,
    "/imagens/produtos/camisetaCreeper.png",
    "*explode violentamente*", 
    "A camiseta do pet mais adorado de MineShaft, o creeper!"
  ),

  criarProduto(
    "Camiseta do Pou",
    271.56,
    "/imagens/produtos/camisetaPou.png",
    "Pou, o alienigena marrom", 
    `Uma camiseta do aplicativo mais aclamado de todos os tempos,
    Pou o bixo cocô!`
  ),

  criarProduto(
    "Camiseta Patrick B.",
    19.00,
    "/imagens/produtos/camisetaPatrick.png",
    "O pescotapa americano", 
    "Camiseta sigma do american psico aka Patrick Bateman"
  ),

  criarProduto(
    "Camiseta Verde",
    1000000.10,
    "/imagens/produtos/camisetaVerde.png",
    "É a camiseta mais verde que tem", 
    "Só uma camiseta verde mesmo."
  ),

];

const moletons = [
  criarProduto(
    "Moletom do Loki",
    34.90,
    "/imagens/produtos/moletomLoki.png",
    "Moletom do loki", 
    `Camiseta daquela série da marvel que conta
      a história do Deus do Trovão"`,
  ),
  
  criarProduto(
    "Moletom do Brasil",
    9.90,
    "/imagens/produtos/moletomBrasil.png",
    "Melhor país", 
    `Só para os patriotas.`,
  ),
  
  criarProduto(
    "Moletom do Sonic",
    230.00,
    "/imagens/produtos/moletomSonic.png",
    "Super sonico", 
    "Moletom do gato azul mais rapido do velho oeste!"
  ),

  criarProduto(
    "Moletom do Jake",
    20.30,
    "/imagens/produtos/moletomJake.png",
    "Moletom do Jake", 
    "Moletom do cachorro que estica do hora de aventura"
  ),

];