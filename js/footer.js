// footer.js
const footer = document.createElement('div');

const result = Math.floor(Math.random() * 2) == 0 ? "fumaca" : "senac";
result == "fumaca" ? 
footer.innerHTML = 
`<div class="container divfooter">
<footer class="d-flex flex-wrap justify-content-end align-items-center py-2">
  <div class="col-md-4 d-flex align-items-center justify-content-center">
    <span class="mb-3 mb-md-0 text-body-secondary">Made with <span style="color: #e25555;">&#9829;</span> by <a class="text-body-secondary" href="https://github.com/codeFumaca">codeFumaça</a></span>
  </div>

  <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
    <li class="ms-2"></li><a class="text-body-secondary" href="https://www.instagram.com/lopes.ig/"><i class="bi bi-instagram"></i></a></li>
    <li class="ms-2"><a class="text-body-secondary" href="https://www.facebook.com/lopesdudu.face/"><i class="bi bi-facebook"></i></a></li>
    <li class="ms-2"><a class="text-body-secondary" href="https://twitter.com/codeFumaca"><i class="bi bi-twitter"></i></a></li>
    <li class="ms-2"><a class="text-body-secondary" href="https://www.linkedin.com/in/eduardo-lopes-549094251/"><i class="bi bi-linkedin"></i></a></li>
    <li class="ms-2"><a class="text-body-secondary" href="https://github.com/codeFumaca/"><i class="bi bi-github"></i></a></li>
  </ul>
</footer>
</div>`:
  footer.innerHTML = 
  `<div class="container divfooter">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-2">
    <div class="col-md-4 d-flex align-items-center justify-content-center">
      <a href="#" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <img src="../imgs/logo-SENAC.png" alt="Logo Senac" width="35" height="32">
      </a>
      <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Senac, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-2"></li><a class="text-body-secondary" href="https://www.instagram.com/senac_cabeleireiro_2023/"><i class="bi bi-instagram"></i></a></li>
    </ul>
  </footer>
</div>`;

document.body.appendChild(footer);