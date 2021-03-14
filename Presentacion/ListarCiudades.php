<?php
require_once '../Logica/ObtenerDatos.php';
$result = array();
$datos = new Datos();
$res = $datos->ObtenerCiudades();
?>

<select name="ciudad" id="selectCiudad">
    <option value="0" selected>Elige una ciudad</option>
    <?php for ($i = 0; $i < count($res); $i++) : ?>
        <option value="<?= $res[$i] ?>"><?= $res[$i] ?></option>
    <?php endfor; ?>
</select>