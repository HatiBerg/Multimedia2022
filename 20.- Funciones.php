<?php

// Declarar una función
function NombreFuncion(){
    echo"Hola desde una función";
}

// Llamar a la función
NombreFuncion();
echo "<br>";

// Función con parametros
function FuncionParametros($parametro1,$parametro2){
    echo $parametro1;
    echo "<br>";
    echo $parametro2;
}
FuncionParametros("Juan","Perez");

// Función con retorno
function FuncionRetorno($parametro1,$parametro2){
    $resultado = $parametro1 + $parametro2;
    return $resultado;
}

echo "<br>";
$suma = FuncionRetorno(5,10);
echo "El resultado de la suma es $suma";

// Función por defecto
function FuncionParametrosDefault($param1 = 10,$param2 = 5){
    return $param1 - $param2;
}
$resta = FuncionParametrosDefault();
echo "<br>";
echo "La resta es $resta";

