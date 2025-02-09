document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('loadContentBtn').addEventListener('click', function() {
        var xhr = new XMLHttpRequest();
        var url = '';

        // Detecta la página actual y establece la URL del contenido correspondiente
        if (window.location.pathname.includes('tierra.html')) {
            url = 'contenido-tierra.html';
        } else if (window.location.pathname.includes('marte.html')) {
            url = 'contenido-marte.html';
        } else if (window.location.pathname.includes('jupiter.html')) {
            url = 'contenido-jupiter.html';
        }

        xhr.open('GET', url, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('dynamicContent').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    });
});