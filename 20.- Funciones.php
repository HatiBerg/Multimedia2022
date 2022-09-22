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
