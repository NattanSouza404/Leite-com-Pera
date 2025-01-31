header = document.querySelector('header');

header.class = "p-3";
header.style.backgroundColor = "#fdf48f"

header.innerHTML = `
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/index.html"><img src="/imagens/leitecompera.png" width="100px"></a></li>
            </ul>

            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="1000" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
            
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-right mb-md-0">
                <li><a href="/php/carrinho.php" class="nav-link px-2 text-dark"><img src="/imagens/icones/carrinho.png" width="20px"><h6>Carrinho</h6></a></li>
                <li><a href="/php/conta.php" class="nav-link px-2 text-dark"><img src="/imagens/icones/conta.png" width="20px"><h6>Conta</h6></a></li>
            </ul>
        </div>
    </div>
`