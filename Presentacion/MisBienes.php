<?php

require_once '../Logica/Inmueble.php';
$Inmueble = new Inmueble();
$Res =   $Inmueble->ConsultarTodos();
?>

<?php for ($i = 0; $i < count($Res); $i++) : ?>
    <div class="Contenido">
        <div class="">
            <img class="imagen" src="img/home.jpg" alt="...">
        </div>
        <div>
            <h5> <?= $Res[$i]->getTipo() ?> </h5>
            <p> <strong> Dirección: </strong> <span><?= $Res[$i]->getDireccion()  ?></span></p>
            <p><strong> Ciudad: </strong><span><?= $Res[$i]->getCiudad() ?></span></p>
            <p><strong> Teléfono: </strong><span><?= $Res[$i]->getTelefono() ?></span></p>
            <p><strong> Código postal: </strong><span><?= $Res[$i]->getCodigoPostal() ?></span></p>
            <p><strong> Precio: </strong><span><?= $Res[$i]->getPrecio() ?></span></p>
            <button class="btn_guardar" onclick="Eliminar('<?= $Res[$i]->getCodigo() ?>')"> Eliminar</button>
        </div>
    </div>
<?php endfor; ?>
