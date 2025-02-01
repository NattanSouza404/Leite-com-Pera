let divAnuncios = document.querySelector("#anuncios-camiseta .row");

let div = document.createElement('div');
div.className = "col-2";

divAnuncios.append(div);

let contador = 0;
camisetas.forEach(
  c => {
    divAnuncios.append(criarCartao(c));

    contador++;

    if (contador == 4){
      let div = document.createElement("div");
      div.className = 'col-2';
      divAnuncios.append(div);

      div = document.createElement("div");
      div.className = 'col-2';
      divAnuncios.append(div);

      contador = 0;
    }

  }
);

divAnuncios = document.querySelector("#anuncios-moletom .row");

div = document.createElement('div');
div.className = "col-2";

divAnuncios.append(div);

contador = 0;
moletons.forEach(
  c => {
    divAnuncios.append(criarCartao(c));

    contador++;

    if (contador == 4){
      let div = document.createElement("div");
      div.className = 'col-2';
      divAnuncios.append(div);

      div = document.createElement("div");
      div.className = 'col-2';
      divAnuncios.append(div);

      contador = 0;
    }

  }
);