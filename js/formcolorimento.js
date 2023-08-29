document.addEventListener("DOMContentLoaded", function () {
  const chemistrySelect = document.getElementById('chemistry');

  chemistrySelect.addEventListener('change', function () {
    if (chemistrySelect.value === 'Sim') {
      document.getElementById('hairChemistryContainer').classList.remove('d-none');
    } else {
      document.getElementById('hairChemistryContainer').classList.add('d-none');
      document.getElementById('hairChemistrySelected').value = document.getElementById('hairChemistrySelected').options[0].value;;
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const allergySelect = document.getElementById('allergySelect');

  allergySelect.addEventListener('change', function () {
    if (allergySelect.value === 'Sim') {
      document.getElementById('allergyContainer').classList.remove('d-none');
    } else {
      document.getElementById('allergyContainer').classList.add('d-none');
      document.getElementById('allergyText').value = '';
    }
  });
});