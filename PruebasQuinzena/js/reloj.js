function updateClock() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    var timeString = (hours < 10 ? '0' : '') + hours + ':' + 
                     (minutes < 10 ? '0' : '') + minutes + ':' + 
                     (seconds < 10 ? '0' : '') + seconds;
    document.getElementById('clock').textContent = timeString;
}
setInterval(updateClock, 1000);
updateClock(); // Inicializa el reloj inmediatamente