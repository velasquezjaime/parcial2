<?php
require_once("models/usuario.php");
class usuario_controller{



    public static function login(){
        $msg = isset($_GET["msg"])?$_GET["msg"]:"";
        $titulo="Login de usuario";
        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/usuario/login.php");
        require_once("views/template/footer.php");
    }

    public static function validar(){

        if($_POST){

            $token= filter_var($_POST["token"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $_SESSION["token"] = $token;

            if (!isset($token) || !seg::validaSession($token)) {
                echo "Acceso restringido";
                exit();
            }
            
            $obj = new usuario($_POST["txtUsuario"], $_POST["txtPassword"], "", "");
            
            $resultado = $obj->valida_usuario();
            if (count($resultado)>0){
                $_SESSION["usuario"] = $resultado["usuario"];
                $_SESSION["nombre"] = $resultado["nombre"];
                if (isset($_POST["chkrecordar"])){
                    setcookie("usuario", seg::codificar($resultado["usuario"]), time()+60);
                    setcookie("nombre", seg::codificar($resultado["nombre"]), time()+60);
                } 
                header("location:index.php?c=".seg::codificar("productos")."&m=".seg::codificar("shop1"));
            } else{
            header("location:index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("login")."&msg=Usuario o Password Incorrectos!!");

        }
        }
    

    }

    public static function cerrar_sesion(){
        session_destroy();
        setcookie("usuario", seg::codificar($resultado["usuario"]), time()-60);
        setcookie("nombre", seg::codificar($resultado["nombre"]), time()-60);
        header("location:index.php");
    }
}



?>