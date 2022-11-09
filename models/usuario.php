<?php

class usuario{

    private $usuario;
    private $password;
    private $salt;
    private $nombre;


    public function __construct($usuario, $password, $salt, $nombre){

        $this->usuario = $usuario;
        $this->password = $password;
        $this->salt = $salt;
        $this->nombre = $nombre;

    }

    public function valida_usuario(){
        #password = hash(password_usuario . salt)
        #salt = md5(random_bytes(20))

        $tabla []=["usuario"=>"jvelasquez", "password"=>"53d09ba30f2e4ecf66f8e8d01d18b01e6052abd6", "salt"=>"n53fceBRY7rI", "nombre"=>"Jaime Velasquez"];
        $tabla []=["usuario"=>"dchiari", "password"=>"adec18aa9abd2f3901818dbe8b4f1163710add14", "salt"=>"wxPOuKAZA666", "nombre"=>"Danis Chiari"];
        $tabla []=["usuario"=>"atorre", "password"=>"cbc0709c96db43f035de9045d0361ab6d88e62a3", "salt"=>"gS0004PUh6Vk", "nombre"=>"Alejandro Torres"];

        foreach($tabla as $t)
                {
                    $pass = sha1($this->password.$t["salt"]);
                    if ($this->usuario == $t["usuario"] && $pass == $t["password"])
                    return $t;
                }
            return [];
    }



}


?>