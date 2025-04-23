<script>
    function openmylink_menu(type, id, ruta){
        // Importante definir el archivo al que se redireccionará
        $.post("<?php echo $raiz?>/common/delega_menu.php",{'id': id, 'type': type},
            function(respuesta){
                //var file = "editar";
                //alert("Hello "+respuesta);
                window.location = ruta+respuesta;

            });
    }

</script>
