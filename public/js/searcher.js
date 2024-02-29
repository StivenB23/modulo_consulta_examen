document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const selectedPatientInput = document.getElementById('selectedPatient');
    const patientOptions = document.getElementById('patientOptions');

    searchInput.addEventListener('focus', function () {
        patientOptions.style.display = 'block';
    });

    searchInput.addEventListener('blur', function () {
        setTimeout(function () {
            patientOptions.style.display = 'none';
        }, 200);
    });

    searchInput.addEventListener('input', function () {
        const searchTerm = searchInput.value.toLowerCase();
        const options = patientOptions.getElementsByTagName('li');

        for (let i = 0; i < options.length; i++) {
            const option = options[i];
            const optionText = option.innerText.toLowerCase();

            if (optionText.includes(searchTerm)) {
                option.style.display = 'block';
            } else {
                option.style.display = 'none';
            }
        }
    });

    patientOptions.addEventListener('click', function (event) {
        if (event.target.tagName === 'LI') {
            searchInput.value = event.target.innerText;
            selectedPatientInput.value = event.target.getAttribute('data-value');
            console.log(selectedPatientInput.value);
            patientOptions.style.display = 'none';
        }
    });
});
