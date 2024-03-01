function confirmDeactivationSpecialist(userId) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: 'Esta acción desactivará al usuario. ¿Deseas continuar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#485BFF',
        cancelButtonColor: '#32b9f885',
        confirmButtonText: 'Sí, desactivar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            var form = document.getElementById('deactivateForm');
            var newAction = form.action.split('/');
            newAction[newAction.length - 3] = userId;
            form.action = newAction.join('/');
            form.submit();
        }
    });
}

function confirmDeactivationPatient(userId) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: 'Esta acción desactivará al paciente. ¿Deseas continuar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#485BFF',
        cancelButtonColor: '#32b9f885',
        confirmButtonText: 'Sí, desactivar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            var form = document.getElementById('deactivateFormPatient');
            var newAction = form.action.split('/');
            newAction[newAction.length - 3] = userId;
            form.action = newAction.join('/');
            form.submit();
        }
    });

}


function confirmDeactivationCompany(companyId) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: 'Esta acción desactivará a la empresa. ¿Deseas continuar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#485BFF',
        cancelButtonColor: '#32b9f885',
        confirmButtonText: 'Sí, desactivar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            var form = document.getElementById('deactiveFormCompany');
            var newAction = form.action.split('/');
            newAction[newAction.length - 1] = companyId;
            form.action = newAction.join('/');
            form.submit();
        }
    });
}