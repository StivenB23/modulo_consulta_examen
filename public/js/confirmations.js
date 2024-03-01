function confirmDeactivationSpecialist() {
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
            document.getElementById('deactivateForm').submit();
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


function confirmDeactivationCompany() {
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
            document.getElementById('deactiveFormCompany').submit();
        }
    });
}