<?php

// Include
// Cuando no encuentra el archivo arroja un warning
include("19.2.- Archivo a incluir.php");
echo"<br>";

// Require
// Cuando no encuentra el archivo arroja un error fatal
require("19.2.- Archivo a incluir.php");

echo "<br> Soy el final del archivo"

// Include once
include_once("19.2.- Archivo a incluir.php");

// Require once
require_once("19.2.- Archivo a incluir.php");