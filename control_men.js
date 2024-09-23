$(document).ready(function () {
    // Inicialmente, se muestra el que tenga show
    $('#formulario').show();
    $('#predeterminado').hide();


    $('#btnRegistro').on('click', function(e){
        e.preventDefault();
        $('#formulario').show();
        $('#predeterminado').hide();
    });

    $('#btnTabla').on('click', function(e){
        e.preventDefault();
        $('#formulario').hide();
        $('#predeterminado').show();
    });
});
