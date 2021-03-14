<?php
require_once '../Logica/Inmueble.php';
if (!empty($_POST["Codigo"])) {
    $Inmueble = new Inmueble($_POST["Codigo"]);
    $Res =   $Inmueble->Eliminar();
    if ($Res) {
        echo "Elimino";
    } else {
        echo "No Elimino";
    }
}
