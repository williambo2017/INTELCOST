<?php

require_once '../Logica/Inmueble.php';

if (!empty($_POST["Datos"])) {
    $datos = json_decode(base64_decode($_POST["Datos"]));
    $Id = $datos->Id;
    $Direccion = $datos->Direccion;
    $Ciudad = $datos->Ciudad;
    $Telefono = $datos->Telefono;
    $Codigo_Postal = $datos->Codigo_Postal;
    $Tipo = $datos->Tipo;
    $Precio = $datos->Precio;
    $Inmueble = new Inmueble("", $Id, $Direccion, $Ciudad, $Telefono, $Codigo_Postal, $Tipo, $Precio);
    $Res =   $Inmueble->insertar();
    if ($Res) {
        echo  true;
    } else {
        echo false;
    }
}
