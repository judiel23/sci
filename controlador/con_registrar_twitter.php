<?php
require("../modelo/mod_connex.php");
$conexion= new connex();
$mysqlconn= $conexion->conectar();

//se capturan los datos del formulario

$twi_gestor= trim ($_POST ['gestor']);
$twi_mes= trim ($_POST  ['mes']);
$twi_cantidad= trim ($_POST  ['cantidad']);
$twi_ano= trim ($_POST  ['ano']);

require("../modelo/mod_twitter.php");
$twitter= new twitter();

	$inserto=$twitter->agregar($twi_gestor, $twi_mes, $twi_cantidad, $twi_ano, $mysqlconn);


			if ($inserto==true){
					header("Location: ../vista/registro_twitter.php");
					}
?>