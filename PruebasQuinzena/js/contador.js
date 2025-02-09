document.addEventListener('DOMContentLoaded', function() {
    // Obtiene el contador de visitas del localStorage
    let visitCount = localStorage.getItem('visitCount');

    // Si no existe, inicializa el contador
    if (!visitCount) {
        visitCount = 0;
    }

    // Incrementa el contador
    visitCount++;

    // Guarda el nuevo valor en el localStorage
    localStorage.setItem('visitCount', visitCount);

    // Muestra el contador en el footer
    document.getElementById('visitCounter').textContent = 'Visitas: ' + visitCount;
});