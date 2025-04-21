<?php 
 $inicio = "hello jessi"
 echo die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMTI</title>
</head>
<body>
    <figure class="text-center">
        <blockquote class="blockquote">
            <header style="display: flex; align-items: center; padding: 10px;">
                <img src="logo.png" alt="Logo" style="height: 150px; margin-right: 100px;">
            </header> 
         <h3>REGISTRO MUNICIPAL DE TRAMITES Y SERVICIOS CEDULA DE INFORMACION </h3>
        </blockquote>
        <p> Nombre:</p><input type="text"name="nombre" size="40"><div class="form-check form-check-inline">
            <p>Tipo:
                <input type="radio" name="tipoTramite"  id = "tipoTramite" value="t">Tramite
                <input type="radio" name="tipoTramite" id = "tipoTramite" value="s">Servicio
              </p>
         <p>Código de la cédula:</p><input type="text"name="nombre" size="40"><div class="form-check form-check-inline"></div>
        <div class="mb-3">
            <p><label for="Descripcion" class="form-label">Descripcion</label></p>
            <textarea class="form-control" id="descripcion" rows="3" style="width: 50%;"></textarea>
          </div>
        <div class="mb-3"  >
            <p><label for="Fundamento legal" class="form-label">Fundamento legal</label></p>
            <textarea class="form-control" id="fundamento" rows="3" style="width: 50%;"></textarea>
        </div>
</body>
</html>