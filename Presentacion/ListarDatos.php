<?php
require_once '../Logica/ObtenerDatos.php';
$result = array();
$datos = new Datos();
$res = $datos->ObtenerDatos();
$informacion =  json_decode($res);
?>

<?php for ($i = 0; $i < count($informacion); $i++) : ?>
    <div class="Contenido">
        <div class="">
            <img class="imagen" src="img/home.jpg" alt="...">
        </div>
        <div>
            <h5> <?= $informacion[$i]->Tipo ?> </h5>
            <p> <strong> Dirección: </strong> <span><?= $informacion[$i]->Direccion  ?></span></p>
            <p><strong> Ciudad: </strong><span><?= $informacion[$i]->Ciudad ?></span></p>
            <p><strong> Teléfono: </strong><span><?= $informacion[$i]->Telefono ?></span></p>
            <p><strong> Código postal: </strong><span><?= $informacion[$i]->Codigo_Postal ?></span></p>
            <p><strong> Precio: </strong><span><?= $informacion[$i]->Precio ?></span></p>

            <?php $item = base64_encode(json_encode($informacion[$i])) ?>
            <button class="btn_guardar" onclick="Guardar('<?= $item ?>')"> Guardar</button>
        </div>
    </div>
<?php endfor; ?>