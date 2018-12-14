$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';

        // Validado Nombre /////////////////////////////
        if( $('#names').val() == '' ){
            errores += '<p>Ingresa tu Codigo</p>';
            $('#names').css("border-bottom-color", "#F14B4B")
        } else{
            $('#names').css("border-bottom-color", "#d1d1d1")
        }

        // ENVIANDO NOTIFICACIONES ////////////////////////////
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO /////////////////////////////////////////
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
