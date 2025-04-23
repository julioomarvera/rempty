<script>
    function bajaModal(id) {
        $("#idBaja").val(id);
        $('#idConfimaModalBA').modal('show');
    }

    function eliminaModal(id) {
        $("#idEliminar").val(id);
        $('#idConfimaModalElimina').modal('show');
    }
    function baja() {
        var tipo = 0;
        var id   = $("#idBaja").val();
        deshabilitarboton('aceptar_baja',1);
        bajaAlta('<?php echo $param?>', id, tipo, '<?php echo $real_sis?>');
    }
    function alta(id) {
        var tipo = 1;
        bajaAlta('<?php echo $param?>',id, tipo, '<?php echo $real_sis?>');
    }
    function eliminar() {
        var tipo = 3;
        var id = $("#idEliminar").val();
        deshabilitarboton('aceptar_eliminar',1);
        bajaAlta('<?php echo $param?>', id, tipo, '<?php echo $real_sis?>');
    }

    function bajaAlta(archivo, id, tipo, sis, otro_tipo){
        var c_f = $('#current_file').val();
        // Importante definir el archivo al que se redireccionará

        $.post("<?php echo $raiz?>business/"+sis+"/ajax/baja_alta.php",{'id': id, 'tipo':tipo },
            function(respuesta){
                if (isNaN(respuesta)) {
                    $("#respuesta_ajax").html(respuesta);
                    habilitaboton('aceptar_eliminar');
                    habilitaboton('aceptar_baja');
                } else {
                    window.location = archivo+"index&attempt=done_ba&respuesta="+respuesta+"";
                }
            });
    }

</script>