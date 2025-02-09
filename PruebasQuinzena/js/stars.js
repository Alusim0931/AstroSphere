const canvas = document.getElementById("starCanvas");
const ctx = canvas.getContext("2d");

let stars = [];
const starCount = 300; // Número de estrellas
let speed = 2; // Velocidad del efecto

// Ajustar el tamaño del canvas
function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}
resizeCanvas();

// Crear estrellas con propiedades iniciales
function createStars() {
    stars = [];
    for (let i = 0; i < starCount; i++) {
        stars.push({
            x: Math.random() * canvas.width - canvas.width / 2, // Coordenada X inicial
            y: Math.random() * canvas.height - canvas.height / 2, // Coordenada Y inicial
            z: Math.random() * canvas.width, // Profundidad Z inicial
            size: Math.random() * 2 + 0.5 // Tamaño de la estrella
        });
    }
}

// Dibujar y animar las estrellas
function animateStars() {
    ctx.clearRect(0, 0, canvas.width, canvas.height); // Limpiar el canvas

    stars.forEach(star => {
        // Simular efecto de zoom en las estrellas
        star.z -= speed; // Reducir profundidad Z para simular acercamiento

        if (star.z <= 0) {
            // Reposicionar la estrella si "pasa" al observador
            star.z = canvas.width;
            star.x = Math.random() * canvas.width - canvas.width / 2;
            star.y = Math.random() * canvas.height - canvas.height / 2;
        }

        // Proyectar las coordenadas en perspectiva
        const perspective = canvas.width / star.z;
        const screenX = (star.x * perspective) + canvas.width / 2;
        const screenY = (star.y * perspective) + canvas.height / 2;
        const starSize = star.size * perspective;

        // Dibujar la estrella
        ctx.beginPath();
        ctx.arc(screenX, screenY, starSize, 0, Math.PI * 2);
        ctx.fillStyle = "white";
        ctx.fill();
    });

    requestAnimationFrame(animateStars); // Continuar la animación
}

// Inicializar el efecto
createStars();
animateStars();
window.addEventListener("resize", () => {
    resizeCanvas();
    createStars();
});