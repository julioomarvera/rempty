<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("lib/common.php")?>
</head>
<figure class="text-center">
  <blockquote class="blockquote">
    <p>BIENVENIDOS</p>
  </blockquote>
  <form action="contraseña.php" method="POST">
<div class="form-floating mb-3">
  <input type="Usuario" class="form-control" id="floatingInput" placeholder="Jesse">
  <label for="floatingInput">Usuario</label>
</div>
<div class="form-floating mb-3">
  <input type="Contraseña" class="form-control" id="floatingInput" placeholder="1234">
  <label for="floatingInput">Contraseña</label>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="submit">Ingresar</button>
</div>
</form>
<?php
$mysqli = new mysqli("localhost", "root", "", "remtis");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "usuario", "contraseña", "basedatos", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>