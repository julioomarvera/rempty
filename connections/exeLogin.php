<?php
$dir_fc = "../";
include_once $dir_fc.'data/users.class.php';						//Operaciones con los usuarios
include_once $dir_fc.'connections/php_config.php';
include_once $dir_fc.'common/function.class.php';

$cUsers	 =	new cUsers();
$cFn	 =	new cFunction();
$txtPass = "";
extract($_REQUEST);
if (!isset($txtUser) || empty($txtUser) || empty($txtPass)) 					//Error 2 - campos vacios
{
    echo "Los campos están vacios";
}
else
{
    $cUsers->setUsuario($cFn->get_sub_string($txtUser,40));
    $cUsers->setClave(md5($txtPass));

    $selectUser = $cUsers->getUser();
    $num_rows = 0;
    $carpeta_go="";
    $tipo = gettype($selectUser);
    if($tipo == "string"){
        echo json_encode(array("res" => 0,
                               "goto" => "Ocurrió un incoveniente con los datos insertados."));
    }else{
        $datos = $selectUser->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION[s_ncompleto] = $datos['nombrecompleto'];
        $_SESSION[s_nombre]    = $datos['nombre'];
        $_SESSION[s_sexo]      = $datos['sexo'];
        $_SESSION[s_img]       = $datos['img'];
        $_SESSION[s_f_i]       = $datos['fecha_ingreso'];
        $_SESSION[id_usr]      = $datos['id_usuario']; //contiene la clave de usuario
        $_SESSION[user]        = $datos['usuario'];
        $_SESSION[id_rol]      = $datos['id_rol'];
        $_SESSION[rol]         = $datos['rol'];
        $_SESSION[id_dir]      = $datos['id_direccion'];
        $_SESSION[id_area]     = $datos['id_area'];
        $_SESSION[admin]       = $datos['admin'];      //contiene si si es admin o no
        $_SESSION[sector]       = $datos['sector'];      //contiene si si es admin o no
        $_SESSION[area]       = $datos['area'];      //contiene si si es admin o no
        $_SESSION[s_estatusvar]= 0;      //contiene si si es admin o no
        $carpeta_go		       = $datos["carpeta"];      //contiene la carpeta a la que accederá inicialmente

        $cUsers->setIdUsuario($_SESSION[id_usr]);

        $carpeta_go = "business";

        echo json_encode(array("res" => 1, "goto" => $carpeta_go));
    }
}
?>
