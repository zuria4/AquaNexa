// carrito.js
function comprarProducto(idProducto, cantidadSeleccionada, idUsuario) {
    fetch('comprar.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ idProducto, cantidadSeleccionada, idUsuario })
    })
    .then(response => response.json())
    .then(data => {
        const mensajeDiv = document.getElementById('mensaje');

        if (data.success) {
            // Mostrar mensaje de éxito
            mensajeDiv.style.display = 'block';
            mensajeDiv.innerHTML = `<div class="mensaje-exito">Compra realizada con éxito</div>`;
        } else {
            // Mostrar mensaje de error
            mensajeDiv.style.display = 'block';
            mensajeDiv.innerHTML = `<div class="mensaje-error">Error en la compra: ${data.message}</div>`;
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
