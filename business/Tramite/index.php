<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <figure class="text-center">
        <blockquote class="blockquote">
            <header style="display: flex; align-items: center; padding: 10px;">
                <img src="../../img/logo.png" alt="Logo" style="height: 150px; margin-right: 100px;">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</body>
</html>