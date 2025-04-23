function guardar(){
    /* Funcion para guardar */
    deshabilitarboton("btnGuardar", 1);
    var url = "/business/tareas_general/ajax/"+opcion_save+".php";
    $.ajax({
        url: url,
        type: "POST",
        data: $("#"+formulario).serialize(),  //Enviando el formulario
        success: function (respuesta) {
            var json = JSON.parse(respuesta);
            done = json.done;
            if (done == 0 || done == "undefined") {

            }else {
                //$('#Concepto').val(json.Concepto);
                $('#valor_propio_vc').val(json.VALCONS);
                $('#v_const').val(json.VALCONS);
                $('#const_propio_vt').val(json.SUPCONS);
                $('#v_cast').val(json.vCatastral);
                //checarCalculoValConst();
                traerdatosConst();
                limpiarConst();
                $("#respuesta").html(custom_alert('success', '', 'Construcción Valuada Correctamente.', 1, 1));
            }
            habilitaboton('btnInsertaGC203T06');
            if (isNaN(respuesta)) {
                $("#"+caja_respuesta).html(custom_alert('danger', '¡Ocurrió un inconveniente!', respuesta, 1, 1));
                habilitaboton(boton)
            } else {
                window.location.assign(archivo+".php?attempt=done&accion="+opcion_save+"&respuesta=" + respuesta+extra_url);
            }
        }
    });
}
