<?php

class productos_models{
    private $id;
    private $producto;
    private $descripcion;
    private $costo;
    private $precioventa;
    private $cantidad;

    public function __construct($id){

        $this->id = $id;
    }

    public function getID(){
        return $this->id;
    }

    public function getProducto(){
        return $this->producto;
    }

    public function getDesc(){
        return $this->descripcion;
    }

    public function getCosto(){
        return $this->costo;
    }
    
    public function getPVenta(){
        return $this->precioventa;
    }

    public function getCant(){
        return $this->cantidad;
    }

    public static function Mostrar(){

        $productos[]=["id"=>"1", "producto"=>"Intel i7 12700k", "descripcion"=>"Este es el procesador más potente de la serie i7 de 12va generación", "costo"=>465, "precioventa"=>seg::itbms(465), "cantidad"=>10];
        $productos[]=["id"=>"2", "producto"=>"Nvidia RTX 3070", "descripcion"=>"Esta es la gráfica más recomendable teniendo en cuenta la calidad y el precio", "costo"=>530, "precioventa"=>seg::itbms(530), "cantidad"=>25];
        $productos[]=["id"=>"3", "producto"=>"Corsair Vengeance RGB Pro", "descripcion"=>"DDR4 DRAM 3000MHz, C15, 288 Pin, 1.2V, Edición TUF, Negro", "costo"=>104, "precioventa"=>seg::itbms(104), "cantidad"=>100];
        $productos[]=["id"=>"4", "producto"=>"Asus prime Z690-P", "descripcion"=>"Socket LGA 1700, preparado para la 12va y 13ra generación de los procesadores Intel", "costo"=>264, "precioventa"=>seg::itbms(264), "cantidad"=>7];
        $productos[]=["id"=>"5", "producto"=>"XPG Invade", "descripcion"=>"Chasis elegante y versátil de media torre que presenta un diseño sin herramientas", "costo"=>76, "precioventa"=>seg::itbms(76), "cantidad"=>20];
        $productos[]=["id"=>"6", "producto"=>"Asus TUF Gaming VG24VQ", "descripcion"=>"23.6 pulgadas Full HD (1920 x 1080), 144Hz", "costo"=>236, "precioventa"=>seg::itbms(236), "cantidad"=>50];

        return $productos;
    }

    public function Buscar(){

        $productos[]=["id"=>"1", "producto"=>"Intel i7 12700k", "descripcion"=>"Este es el procesador más potente de la serie i7 de 12va generación", "costo"=>465, "precioventa"=>seg::itbms(465), "cantidad"=>10];
        $productos[]=["id"=>"2", "producto"=>"Nvidia RTX 3070", "descripcion"=>"Esta es la gráfica más recomendable teniendo en cuenta la calidad y el precio", "costo"=>530, "precioventa"=>seg::itbms(530), "cantidad"=>25];
        $productos[]=["id"=>"3", "producto"=>"Corsair Vengeance RGB Pro", "descripcion"=>"DDR4 DRAM 3000MHz, C15, 288 Pin, 1.2V, Edición TUF, Negro", "costo"=>104, "precioventa"=>seg::itbms(104), "cantidad"=>100];
        $productos[]=["id"=>"4", "producto"=>"Asus prime Z690-P", "descripcion"=>"Socket LGA 1700, preparado para la 12va y 13ra generación de los procesadores Intel", "costo"=>264, "precioventa"=>seg::itbms(264), "cantidad"=>7];
        $productos[]=["id"=>"5", "producto"=>"XPG Invade", "descripcion"=>"Chasis elegante y versátil de media torre que presenta un diseño sin herramientas", "costo"=>76, "precioventa"=>seg::itbms(76), "cantidad"=>20];
        $productos[]=["id"=>"6", "producto"=>"Asus TUF Gaming VG24VQ", "descripcion"=>"23.6 pulgadas Full HD (1920 x 1080), 144Hz", "costo"=>236, "precioventa"=>seg::itbms(236), "cantidad"=>50];

        foreach($productos as $t){
            
            if($this->id == $t["id"])
                return $t;
        }
        return [];
    }




}



