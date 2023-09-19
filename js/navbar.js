// navbar.js
const navbar = document.createElement('div');
navbar.innerHTML = 
`<nav class="navbar navbar-expand-lg">
<div class="container-fluid">
    <a class="navbar-brand" href="index.html">
        <img src="../imgs/logo-SENAC.png" alt="Logo Senac" width="40" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="equipe.html">Equipe</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="index.html" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="Forms">Formulário</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="CorteMasculino.html">Corte Masculino</a></li>
                    <li><a class="dropdown-item" href="CorteFeminino.html">Corte Feminino</a></li>
                    <li><a class="dropdown-item" href="Alisamento.html">Alisamento</a></li>
                    <li><a class="dropdown-item" href="Mechas.html">Mechas</a></li>
                    <li><a class="dropdown-item" href="Tratamento.html">Tratamento</a></li>
                    <li><a class="dropdown-item" href="Coloracao.html">Colorimetria Capilar</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center ms-auto" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
        </svg>
        <span class="ms-2" id="bd-theme-text"></span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                <i class="bi bi-brightness-high-fill me-2 theme-icon" width="1em" height="1em"></i>
                Claro
                <svg class="bi ms-auto d-none">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="dark" aria-pressed="true">
                <i class="bi bi-moon-fill me-2 theme-icon" width="1em" height="1em"></i>
                Escuro
                <svg class="bi ms-auto d-none">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                <i class="bi bi-circle-half me-2 theme-icon" width="1em" height="1em"></i>
                Auto
                <svg class="bi ms-auto d-none">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>
    </ul>
</div>
</nav>`;

document.body.appendChild(navbar);