<?php 
require_once("models/productos_models.php");
class productos_controller{
    public static function shop1(){
        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/usuario/shop.php");
        require_once("views/template/footer.php");
    }
    public static function validar(){
        if ($_POST) {
            $token= filter_var($_POST["token"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $_SESSION["token"] = $_POST["token"] ;
            if (!isset($_POST["token"]) || !seg::validaSession($_POST["token"])) {
                echo "Acceso restringido";
                exit();
            }


            $id= filter_var($_POST["id"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $obj = new productos_models($id);
            $resultado = $obj->Buscar();
            var_dump($resultado);
            
            if (count($resultado) > 0) {
                header("location: index.php?c=".seg::codificar("productos")."&m=". seg::codificar("shop1"). "&id=". $id."#catalogo");
            }else{
                header("location: index.php?c=".seg::codificar("productos")."&m=". seg::codificar("shop1")."#catalogo");
            }
        }
    }
}
?>