<?php 
    require_once("models/contacto.php");

    class contacto_controller{

        public static function crear(){

            if (isset($_SESSION["usuario"])){
            $titulo="Crear un comentario";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/contacto/crear.php");
            require_once("views/template/footer.php");
            } else {
                header("location:index.php?c=".seg::codificar("principal")."&m=".seg::codificar("error"));
            }

        }

        public static function mostrar(){
            

            if($_POST){

                $nombre = $_POST["txtNombre_contacto"];
                $correo = $_POST["txtCorreo_contacto"];
                $comentario = $_POST["txtComentario"];
                $contacto = new contacto($nombre, $correo, $comentario);

                $resultado = $contacto->getDatos();

                $titulo="Mostrar Datos";
                require_once("views/template/header.php");
                require_once("views/template/navbar.php");
                require_once("views/contacto/mostrar.php");
                require_once("views/template/footer.php");
            }


        }
    }


?>