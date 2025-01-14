document.getElementById('enterButton').addEventListener('click', function() {
    // Aplica la animación solo cuando el usuario hace clic
    document.querySelector('.intro').style.animation = 'hyperSpeed 4s ease-in-out forwards'; // Duración más lenta
    
    // Después de la animación, oculta el mensaje y muestra el contenido
    setTimeout(function() {
        document.querySelector('.intro').style.display = 'none';
        document.querySelector('.content').classList.add('showContent');
    }, 4000); // Tiempo igual al de la animación
    
    // Si quieres cambiar el fondo o las estrellas mientras ocurre la animación, puedes hacerlo aquí
    document.querySelector('.stars').style.opacity = 0; // Hacer que las estrellas desaparezcan durante la animación
});
