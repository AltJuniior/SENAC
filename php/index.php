<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../js/scripts.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/index.css">
  <title>SENAC</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="../imgs/logo-SENAC.png" alt="Logo Senac" width="40" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="equipe.html">Equipe</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="index.html" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Formulário</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="corteform.html">Corte</a></li>
              <li><a class="dropdown-item" href="alisamentoform.html">Alisamento</a></li>
              <li><a class="dropdown-item" href="colorimentoform.html">Colorimetria Capilar</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="corteform.html"><img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800"
            height="400" src="imgs/Caroulsel1.jpg" alt=""></a>
      </div>
      <div class="carousel-item">
        <a href="equipe.html"><img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800"
            height="400" src="imgs/Caroulsel2.jpg"></a>
      </div>
      <div class="carousel-item">
        <a href="https://wa.me/5575988368668"><img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
            width="800" height="400" src="./imgs/Caroulsel3.png"></a>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <h2 class="text-center p-4">Exemplos</h2>

  <div class="container marketing">

    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card-wrapper container-sm d-flex  justify-content-around">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top"
                src="../imgs/Mechas - Descoloração, personalização da cor , hidratação, finalização cbabyliss.jpeg">
              <div class="card-body">
                <h5 class="card-title">Mechas</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem,
                  eveniet architecto. Autem nostrum itaque perspiciatis corrupti, eum quae iure vero,
                  fugit minus consequatur inventore, voluptates quod libero minima amet asperiores.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="imgs/Alisamento Guanidina -alisa hidrata e finaliza com escova.jpeg" class="card-img-top"
                alt="...">
              <div class="card-body">
                <h5 class="card-title">Alisamento</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur,
                  nobis officiis? Laudantium ipsum dolores officiis, vero quasi id accusamus, quis
                  debitis, tenetur ullam repellat suscipit. Sed corporis laborum labore facilis?</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="imgs/Corte masculino.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Corte Masculino</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa officia
                  quibusdam nemo possimus suscipit ab totam deleniti voluptates nihil aliquid. Assumenda
                  repudiandae iusto qui optio est, consequuntur eaque unde nobis.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card-wrapper container-sm d-flex   justify-content-around">
            <div class="card  " style="width: 18rem;">
              <img src="imgs/Coloração Global.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Coloração Global</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis
                  maxime non soluta animi officiis modi ut eius saepe id aliquam. Quas nobis dolorem ab
                  nam suscipit doloremque repellat fugiat aliquid.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="imgs/Corte Feminino.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cabelo Feminino</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et accusamus
                  assumenda beatae excepturi porro perspiciatis, quo velit nam reprehenderit ad saepe
                  rerum eius. Eveniet dolor dignissimos eligendi excepturi impedit! Eaque?</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
    
    <hr class="featurette-divider">

    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
        <div class="col-md-4 d-flex align-items-center">
          <a href="#" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
            <img src="../imgs/logo-SENAC.png" alt="Logo Senac" width="35" height="32">
          </a>
          <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Senac, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-2"></li><a class="text-body-secondary" href="https://www.instagram.com/senacbahia/"><i
              class="bi bi-instagram"></i></a></li>
          <li class="ms-2"><a class="text-body-secondary" href="https://pt-br.facebook.com/SenacBahia/"><i
                class="bi bi-facebook"></i></a></li>
          <li class="ms-2"><a class="text-body-secondary" href="#"><i class="bi bi-twitter"></i></a></li>
        </ul>
      </footer>
    </div>

  </div>

  <!-- <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
<button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (dark)">
<svg class="bi my-1 theme-icon-active" width="1em" height="1em">
<use href="#moon-stars-fill"></use>
</svg>
<span id="bd-theme-text">Mudar Tema</span>

</button>
<ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
<li>
<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
aria-pressed="false">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
class="bi bi-brightness-high" viewBox="0 0 16 16">
<path
d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
</svg>
<svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
<use href="#sun-fill"></use>
</svg>
Claro
<svg class="bi ms-auto d-none" width="1em" height="1em">
<use href="#check2"></use>
</svg>
</button>
</li>
<li>
<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="dark"
aria-pressed="true">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-moon"
viewBox="0 0 16 16">
<path
d="M7 8a3.5 3.5 0 0 1 3.5 3.555.5.5 0 0 0 .625.492A1.503 1.503 0 0 1 13 13.5a1.5 1.5 0 0 1-1.5 1.5H3a2 2 0 1 1 .1-3.998.5.5 0 0 0 .509-.375A3.502 3.502 0 0 1 7 8zm4.473 3a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5h-.027z" />
<path
d="M11.286 1.778a.5.5 0 0 0-.565-.755 4.595 4.595 0 0 0-3.18 5.003 5.46 5.46 0 0 1 1.055.209A3.603 3.603 0 0 1 9.83 2.617a4.593 4.593 0 0 0 4.31 5.744 3.576 3.576 0 0 1-2.241.634c.162.317.295.652.394 1a4.59 4.59 0 0 0 3.624-2.04.5.5 0 0 0-.565-.755 3.593 3.593 0 0 1-4.065-5.422z" />
</svg>
<svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
<use href="#moon-stars-fill"></use>
</svg>
Escuro
<svg class="bi ms-auto d-none" width="1em" height="1em">
<use href="#check2"></use>
</svg>
</button>
</li>
<li>
<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto"
aria-pressed="false">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half"
viewBox="0 0 16 16">
<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
</svg>
<svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
<use href="#circle-half"></use>
</svg>
Automático
<svg class="bi ms-auto d-none" width="1em" height="1em">
<use href="#check2"></use>
</svg>
</button>
</li>
</ul>
</div> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>