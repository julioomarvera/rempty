<script>
    function openmylink(type, id, ruta){
        // Importante definir el archivo al que se redireccionará
        $.post("<?php echo $raiz?>/common/delega.php",{'id': id, 'type': type},
            function(respuesta){
//                var file = "editar";
//                alert("Hello "+respuesta);
                window.location = ruta+respuesta;

            });
    }

    function openmytram(id, ruta, id_menu){
        // Importante definir el archivo al que se redireccionará
        $.post("<?php echo $raiz?>/common/delega2.php",{'id': id, 'id_menu': id_menu},
            function(respuesta){
//                var file = "editar";
//                alert("Hello "+respuesta);
                window.location = ruta+respuesta;

            });
    }
    function openmyservice(type, id, id_servicio, ruta){
        // Importante definir el archivo al que se redireccionará
        $.post("<?php echo $raiz?>/common/delega_serv.php",{'id': id, 'id_servicio': id_servicio, 'type': type},
            function(respuesta){
//                var file = "editar";
                // alert("Hello "+id_servicio + " " + id);
                window.location = ruta+respuesta;

            });
    }


   

</script>
