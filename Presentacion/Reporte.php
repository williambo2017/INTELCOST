<?php
 header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
 header('Content-Disposition: attachment; filename=Reporte.xls');
require_once '../Logica/Inmueble.php';
if ($_POST["ciudad"] != "0" && $_POST["tipo"] == "0") {
     $ciudad = addslashes($_POST["ciudad"]);
    $Inmueble = new Inmueble("","","",$ciudad);
    $res = $Inmueble->ConsultarPorCiudad();
} else if ($_POST["tipo"] != "0" && $_POST["ciudad"] == "0") {
    
    $Inmueble = new Inmueble("","","","","","", $tipo);
    $res = $Inmueble->ConsultarPorTipo();
} else if ($_POST["tipo"] != "0" && $_POST["ciudad"] != "0") {
    $Inmueble = new Inmueble("","","",$ciudad,"","", $tipo);
    $res = $Inmueble->ConsultarTodos();
} else {
    $Inmueble = new Inmueble();
    $res =   $Inmueble->ConsultarTodos();
}
?>
<table>
    <thead>
        <tr>
            <th>Direccion</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Codigo Postal</th>
            <th>Tipo</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($res); $i++) : ?>
            <tr>
                <td><?= $res[$i]->getDireccion() ?></td>
                <td><?= $res[$i]->getCiudad() ?></td>
                <td><?= $res[$i]->getTelefono() ?></td>
                <td><?= $res[$i]->getCodigoPostal() ?> </td>
                <td><?= $res[$i]->getTipo() ?></td>
                <td><?= $res[$i]->getPrecio() ?></td>
            </tr>
        <?php endfor; ?>

    </tbody>
</table>