<?php
require_once '../Logica/ObtenerDatos.php';
$result = array();
$datos = new Datos();
$res = $datos->ObtenerTipos();
?>

<select name="tipo" id="selectTipo">
    <option value="0">Elige un tipo</option>
    <?php for ($i = 0; $i < count($res); $i++) : ?>
        <option value="<?= $res[$i] ?>"><?= $res[$i] ?></option>
    <?php endfor; ?>
</select>