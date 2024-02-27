document.addEventListener("DOMContentLoaded", function () {
    const CLIENTTAB = document.getElementById('client_tab');
    const COMPANYTAB = document.getElementById('company_tab');
    const CLIENTFORM = document.getElementById('client_form');
    const COMPANYFORM = document.getElementById('company_form');

    function switchTab(tab, content) {
        CLIENTTAB.classList.remove('active');
        CLIENTFORM.classList.remove('active');
        COMPANYTAB.classList.remove('active');
        COMPANYFORM.classList.remove('active');

        tab.classList.add('active');
        content.classList.add('active');
    }

    CLIENTTAB.addEventListener('click', function () {
        switchTab(CLIENTTAB, CLIENTFORM);
    });

    COMPANYTAB.addEventListener('click', function () {
        switchTab(COMPANYTAB, COMPANYFORM);
    });
});