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