document.addEventListener('DOMContentLoaded', function () {
  // Obtenha referências para as seções de opções de estilo de cabelo
  const longStylesSection = document.getElementById('longStyles');
  const mediumStylesSection = document.getElementById('mediumStyles');
  const shortStylesSection = document.getElementById('shortStyles');

  // Obtenha referências para os botões de rádio de comprimento de cabelo
  const longHairRadio = document.getElementById('long');
  const mediumHairRadio = document.getElementById('average');
  const shortHairRadio = document.getElementById('short');

  // Adicione ouvintes de evento para os botões de rádio de comprimento de cabelo
  longHairRadio.addEventListener('change', function () {
    longStylesSection.classList.remove('d-none');
    mediumStylesSection.classList.add('d-none');
    shortStylesSection.classList.add('d-none');
  });

  mediumHairRadio.addEventListener('change', function () {
    longStylesSection.classList.add('d-none');
    mediumStylesSection.classList.remove('d-none');
    shortStylesSection.classList.add('d-none');
  });

  shortHairRadio.addEventListener('change', function () {
    longStylesSection.classList.add('d-none');
    mediumStylesSection.classList.add('d-none');
    shortStylesSection.classList.remove('d-none');
  });
});