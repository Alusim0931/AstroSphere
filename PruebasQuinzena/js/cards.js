$(document).ready(function() {
    // Animación al pasar el cursor sobre las tarjetas
    $('.card').hover(
        function() {
            $(this).animate({
                marginTop: "-=10px"
            }, 200);
        },
        function() {
            $(this).animate({
                marginTop: "+=10px"
            }, 200);
        }
    );

    // Redirección al hacer clic en las tarjetas
    $('.card').click(function() {
        window.location.href = $(this).attr('href');
        return false;
    });

    $(document).ready(function() {
        // Abrir y cerrar el sidebar
        $('#toggleSidebar').on('click', function() {
            var sidebar = $('#sidebar');
            if (sidebar.width() === 0) {
                sidebar.css('width', '250px');
                $(this).css('left', '260px'); // Mueve el botón
            } else {
                sidebar.css('width', '0');
                $(this).css('left', '20px'); // Regresa el botón a su lugar
            }
        });
        
    
        // Cerrar el sidebar con el botón "X"
        $('#closeSidebar').on('click', function() {
            $('#sidebar').css('width', '0');
        });
    
        // Asegurar que el botón de abrir sidebar se muestre después de la animación
        $('#enterButton').on('click', function() {
            $('.intro').addClass('zoom'); // Efecto de zoom
            setTimeout(function() {
                $('.intro').hide();
                $('.content').addClass('showContent');
                $('#toggleSidebar').show(); // Mostrar botón después de animación
            }, 4000); // Tiempo igual al efecto de zoom
        });
    });
});