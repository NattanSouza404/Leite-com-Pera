function criarCartao(produto){
    let container = document.createElement('div');
    container.className = "col-2";

    let cartao = document.createElement('div');
    cartao.className = "card";
    cartao.style.marginBottom = "30px";

    container.append(cartao);

    let img = document.createElement('img');
    img.src = produto.imagem;
    img.height = "250";
    cartao.append(img);

    let texto = document.createElement('h1');
    texto.textContent = produto.produto;
    cartao.append(texto);

    texto = document.createElement('p');
    texto.className = 'price';
    texto.textContent = "R$ "+produto.preco.toFixed(2);
    cartao.append(texto);

    texto = document.createElement('p');
    texto.textContent = produto.descricaoCurta;
    cartao.append(texto);

    let form = document.createElement('form');
    form.method = "POST";
    form.action = "/php/anuncio.php";

    let input = document.createElement('input');
    input.type = "hidden";
    input.name = "produto";
    input.value = produto.produto;
    form.append(input);

    input = document.createElement('input');
    input.type = "hidden";
    input.name = "preco";
    input.value = produto.preco;
    form.append(input);

    input = document.createElement('input');
    input.type = "hidden";
    input.name = "imagem";
    input.value = produto.imagem;
    form.append(input);

    input = document.createElement('input');
    input.type = "hidden";
    input.name = "descricaoProduto";
    input.value = produto.descricaoProduto;
    form.append(input);

    let button = document.createElement('button');
    texto = document.createElement('h6');
    texto.style.color = "rgb(255,255,255)";
    texto.textContent =  "Ver anúncio";
    button.append(texto);
    form.append(button);
  
    cartao.append(form);
    
    return container;
};