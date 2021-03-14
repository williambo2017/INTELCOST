<?php
require_once '../Logica/Filtrar.php';
?>
<?php if ($_POST["ciudad"] != "0" && $_POST["tipo"] == "0") {
    $result = array();
    $datos = new filtrar();
    $informacion = $datos->FiltrarPorCiudad($_POST["ciudad"], $_POST["precio"]);
} else if ($_POST["tipo"] != "0" && $_POST["ciudad"] == "0") {
    $result = array();
    $datos = new filtrar();
    $informacion = $datos->FiltrarPorTipo($_POST["tipo"], $_POST["precio"]);
} elseif ($_POST["tipo"] != "0" && $_POST["ciudad"] != "0") {
    $result = array();
    $datos = new filtrar();
    $informacion = $datos->FiltrarPorTipoYciudad($_POST["ciudad"], $_POST["tipo"], $_POST["precio"]);
}else{
    $informacion = array();
}
?>
<?php if (count($informacion) > 0) : ?>
    <?php for ($i = 0; $i < count($informacion); $i++) : ?>
        <div class="Contenido">
            <div class="">
                <img class="imagen" src="img/home.jpg" alt="...">
            </div>
            <div>
                <h5> <?= $informacion[$i]->Tipo  ?> </h5>
                <p> <strong> Dirección: </strong> <span><?= $informacion[$i]->Direccion ?></span></p>
                <p><strong> Ciudad: </strong><span><?= $informacion[$i]->Ciudad ?></span></p>
                <p><strong> Teléfono: </strong><span><?= $informacion[$i]->Telefono ?></span></p>
                <p><strong> Código postal: </strong><span><?= $informacion[$i]->Codigo_Postal ?></span></p>
                <p><strong> Precio: </strong><span><?= $informacion[$i]->Precio ?></span></p>
                <?php $item = base64_encode(json_encode($informacion[$i])) ?>
                <button class="btn_guardar" onclick="Guardar('<?= $item ?>')"> Guardar</button>
            </div>
        </div>
    <?php endfor; ?>
<?php else : ?>
    <div class="Contenido">
        <h5>Sin resultados</h5>
    </div>
<?php endif; ?>