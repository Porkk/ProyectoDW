$(document).ready(function(){
    $('#formularioimagen').submit(function(e){
        var datos = new FormData($('#formularioimagen')[0])
        $.ajax({
            url:'php/SubirImagen.php',
            type: 'POST',
            data: datos,
            contentType: false,
            processData: false,
            success: function (e){
            }
        }) 
        e.preventDefault();
    })
});

