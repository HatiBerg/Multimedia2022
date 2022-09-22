<?php

class NombreClase{
    // Atributos
    // Public: Puede ser accedido desde fuera de la clase, dentro de la misma y puede ser heredada
    // Private: Puede ser accedida solo desde la misma y no es heredable 
    // Protected: Puede ser accedida dentro de la clase y puede ser heredada
    public $atributo1;
    private $atributo2;
    protected $atributo3;

    // Constructor
    public function __contructor($param1,$param2){
        $this->atributo1 = $param1;
        $this->atributo2 = $param2;
    }

    // Metodos
    public function NombreMetodo(){
        echo "<br> Hola desde un metodo de la clase <br>";
    }
}

// Instanciar la clase
$nombreClase = new NombreClase("Hola","Mundo");

// Llamar a un metodo de la clase
$nombreClase->NombreMetodo();

echo $nombreClase->atributo1;