const PASSWORD_FIELD = document.getElementById('password');
const TOGGLE_PASSWORD = document.getElementById('togglePassword');

TOGGLE_PASSWORD.addEventListener('click', function () {
    const type = PASSWORD_FIELD.getAttribute('type') === 'password' ? 'text' : 'password';
    PASSWORD_FIELD.setAttribute('type', type);
    if(type === 'text'){
        TOGGLE_PASSWORD.classList.remove('bi-eye');
        TOGGLE_PASSWORD.classList.add('bi-eye-slash');
    } else {
        TOGGLE_PASSWORD.classList.remove('bi-eye-slash');
        TOGGLE_PASSWORD.classList.add('bi-eye');
    }
});