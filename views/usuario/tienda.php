
<?php
require_once("controllers/principal_controller.php");
    require_once("controllers/contacto_controller.php");
    require_once("controllers/usuario_controller.php");
    require_once("utils/seg.php");
    require_once("controllers/productos_controller.php");
    require_once("models/productos_models.php");

    ?>



<div class="container">
        <br>
        <h1 class="text-center" id="catalogo" style="background: #1fe4f5 ; border-radius:20px; box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4); ">CATÁLOGO</h1>
        <br>
        <div class="row">
            <?php
            if (isset($_GET["id"])) {
                $obj = new productos_models($_GET["id"]);
                $resultado = $obj->Buscar();
                $h1 = 1;
                $n = 6;
            } else {
                $resultado = productos_models::Mostrar();
                $h1 = 2;
            }
            ?>
            <?php foreach ($resultado as $producto) {
                if ($h1 == 1) {
                    if (count($resultado) == $n) {
                        $n = 7; ?>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card" style="width: 18rem; border-radius: 10rem">
                            <img src="assets/img/<?php echo $producto["id"] ?>.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 style="text-align:center"><strong><?php echo $producto["producto"] ?></strong></h3>
                                <p class="card-text" style="text-align:center; font-size: 17px"><?php echo $producto["descripcion"] ?>.</p>
                                <h3 style="text-align:center"><?php echo $producto["costo"] ?>$</h3>
                                <p style="text-align:center"><h7>ITBMS: <?php echo $producto["precioventa"] ?> $</h7></p>
                                <hr>
                                <p style="text-align:center">Cantidad disponible: <strong> <?php echo $producto["cantidad"] ?> unidades </strong></p>
                            </div>
                        </div>
                    </div>

                    <?php
                    }
                } else {
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card" style="width: 18rem; border-radius: 5px; background: radial-gradient(#1fe4f5, #3fbafe); margin-top:15px; border-width:3px; box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);">
                            <img src="assets/img/<?php echo $producto["id"] ?>.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 style="text-align:center"><strong><?php echo $producto["producto"] ?></strong></h3>
                                <p class="card-text" style="text-align:center; font-size: 17px"><?php echo $producto["descripcion"] ?>.</p>
                                <h3 style="text-align:center"><?php echo $producto["costo"] ?>$</h3>
                                <p style="text-align:center"><h7>ITBMS: <?php echo $producto["precioventa"] ?> $</h7></p>
                                <hr>
                                <p style="text-align:center">Cantidad disponible: <strong> <?php echo $producto["cantidad"] ?> unidades </strong></p>
                            </div>
                        </div>
                    </div>
                <?php
                } {
                ?>
            <?php }
            }
            ?>
        </div>

    </div>