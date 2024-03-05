const MODAL = document.getElementById('modal');
const CLOSE = document.getElementById('close');
const USER_NAME = document.getElementById('patient-name-modal');
const CONTENT = document.getElementById('content-modal');

document.addEventListener('DOMContentLoaded', function() {
    var userLinks = document.querySelectorAll('.user-link');

    userLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            var userId = link.getAttribute('data-user-id');
            var userName = link.getAttribute('data-user-name');

            getInfoUser(userId, userName);
        });
    });

    async function getInfoUser(userId, userName) {
        const response = await fetch('/api/patient/' + userId);
        const user = await response.json();

        MODAL.style.display = 'block';

        USER_NAME.innerHTML = userName;

        var content = '';

        content += `
            <div class="user">
                <p><strong>Nombre:</strong> ${user.name}</p>
                <p><strong>Apellido:</strong> ${user.lastname}</p>
                <p><strong>Correo:</strong> ${user.email}</p>
                <p><strong>Edad:</strong> ${user.age}</p>
                <p><strong>Tipo de documento:</strong> ${user.type_document}</p>
                <p><strong>Número de documento:</strong> ${user.document}</p>
            </div>
        `;

        CONTENT.innerHTML = content;
        console.log('Contenido:', content);
        console.log(CONTENT)
    }
});

CLOSE.addEventListener('click', function() {
    MODAL.style.display = 'none';
});