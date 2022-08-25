<?php

$nombre = "Juan";
$arreglo = [
    "nombre" => "Juan",
    "apellido" => "Perez",
    "edad" => "18",
];

// Mas Legible
print_r($arreglo);

echo "<br>";

// Mas información
var_dump($arreglo);

// Tarea: Averiguar los siguientes tipos de datos
$numero_1 = 10;
$numero_2 = 10.5;
$letra = "a";
$verdadero = true;

echo "<br>";
print_r($numero_1);
echo "<br>";
print_r($numero_2);
echo "<br>";
print_r($letra);
echo "<br>";
print_r($verdadero);

echo "<br>";
var_dump($numero_1);
echo "<br>";
var_dump($numero_2);
echo "<br>";
var_dump($letra);
echo "<br>";
var_dump($verdadero);

?>