document.getElementById('enterButton').addEventListener('click', function() {
    const originalSpeed = speed;
    const increasedSpeed = 100; // Velocidad aumentada durante la animación

    // Aumentar la velocidad
    speed = increasedSpeed;

    // Iniciar la animación de zoom
    document.querySelector('.intro').classList.add('zoom');

    // Después de la animación, oculta el mensaje y muestra el contenido
    setTimeout(function() {
        document.querySelector('.intro').style.display = 'none';
        document.querySelector('.content').classList.add('showContent');
        speed = originalSpeed; // Volver la velocidad a su estado normal
    }, 2000); // Tiempo igual al de la animación del meteorito
});