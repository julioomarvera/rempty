function deshabilitarboton(boton, carga){
    //Funcion que recibe el nombre del boton a deshabilitar y si tendrá estado de carga o no (con la variable carga)
    btn =  $('#'+boton);
    btn.prop('disabled',true);
    if(carga == 1){
        mostrar_carga(boton);
    }
}

function habilitaboton(boton){
    btn =  $('#'+boton);
    btn.prop('disabled',false);
    carga = $('#carga_'+boton);
    if (carga != 'undefined'){
        quitar_carga(boton);
    }
}

function mostrar_carga(boton){
    btn =  $('#'+boton);
    btn.append(" <span id='carga_"+boton+"'><i class='fa fa-spinner fa-spin'></i></span>");
}

function quitar_carga(boton){
    $('#carga_'+boton).remove();
}

function custom_alert(type, main_msg, message, cerrar, icon){
    /**
     * Mensajes para cuando se ejecuta un ajax y se desea mostrar respuesta
     *
     * @param {string} type     que alerta que se mostrará (warning, success, danger, info, success
     * @param {string} message  mensaje que se mostrará en la alerta
     * @param {int}    cerrar   Si tendrá boton de cerrar o no, (1 si, 0 no)
     * @param {int}    icon     Si se mostrará un ícono de alerta (1 si 0 no)
     *
     * by Fhohs!
     **/

    var alert      = "";
    var icon_show  = "";
    var alert_show = "";
    if(type == ""){
        type = "success";
    }
    if(icon == 1){
        if(type == "warning"){
            icon_show  = " <span class='fa fa-exclamation-triangle'></span>";
        }
        if(type == "danger"){
            icon_show  = " <span class='fa fa-times'></span>";
        }
        if(type == "info"){
            icon_show  = " <span class='fa fa-info-circle'></span>";
        }
        if(type == "success"){
            icon_show  = " <span class='fa fa-check-circle'></span>";
        }
        alert_show = " alert-dismissable";
    }else{
        icon_show  = "";
        alert_show = " alert-dismissable";
    }

    alert = "<div class='alert alert-"+type+" "+alert_show+"' role='alert'>";
    alert+= icon_show;
    if(cerrar == 1){
        alert+= "<button type='button' class='close' data-dismiss='alert'>";
            alert+= "<span aria-hidden='true'>&times;</span><span class='sr-only'>Cerrar</span>";
        alert+= "</button>";
    }
    alert+= "<strong> "+main_msg+" </strong> "+message;
    alert+= "</div>";

    return alert;
}
