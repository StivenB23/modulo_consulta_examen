document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const selectedPatientInput = document.getElementById('id_user');
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

function selectPatient(event) {
    if (event.target.tagName === 'LI') {
        const selectedValue = event.target.getAttribute('data-value');
        const selectedText = event.target.innerText;

        document.getElementById('searchInput').value = selectedText;
        document.getElementById('id_user').value = selectedValue;
    }
}
