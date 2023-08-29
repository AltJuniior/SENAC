document.addEventListener("DOMContentLoaded", function () {
  const cortepretendidoSelect = document.getElementById('cortepretendido');
  const estilodoCorteContainer = document.getElementById('estilodoCorteContainer');

  cortepretendidoSelect.addEventListener('change', function () {
    if (cortepretendidoSelect.value === 'OUTRO') {
      estilodoCorteContainer.classList.remove('d-none');
    } else {
      estilodoCorteContainer.classList.add('d-none');
      estilodoCorteContainer.querySelector('input').value = '';
    }
  });
});