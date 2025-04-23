<script>
    function guardar(formulario, opcion_save, extra_url, caja_respuesta, archivo, sis, tipo){
        /* Funcion para guardar */
        deshabilitarboton("btn_"+formulario, 1);
        var url = "<?php echo $raiz?>business/"+sis+"/ajax/"+opcion_save+".php";
        $.ajax({
            url: url,
            type: "POST",
            data: $("#frm_"+formulario).serialize(),  //Enviando el formulario
            success: function (respuesta) {
                try {
                    var j = JSON.parse(respuesta);
                    done = j.done;
                    if (done == 0 || done == "undefined") {
                        $("#"+caja_respuesta).html(
                            custom_alert('danger', '¡Ocurrió un inconveniente!', j.resp, 1, 1)
                        );
                    } else {
                        if(tipo == 1){
                            window.location.assign("<?php echo $raiz?>"+archivo+"index&attempt=done&accion="+opcion_save+
                                "&respuesta=" + j.resp+extra_url);
                        }else
                        {
                            if(tipo == 3){
                                window.location.assign("<?php echo $raiz?>"+archivo+"&attempt=done&accion="+opcion_save+
                                    "&respuesta=" + j.resp+extra_url);
                            }else{
                                $("#"+caja_respuesta).html(custom_alert('success', '', j.resp , 1, 1));
                            }
                        }

                    }
                    habilitaboton("btn_"+formulario);
                }catch(err) {
                    $("#"+caja_respuesta).html(
                        custom_alert('danger', '¡Ocurrió un inconveniente! - ', err + " -- "+ respuesta, 1, 1)
                    );
                    habilitaboton("btn_"+formulario);
                }
            }
        });
    }

</script>