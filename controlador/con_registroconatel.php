<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

//se capturan los datos del formulario

$con_gestor= $_POST['gestor'];
$con_numcas= $_POST['numcas'];
$con_feulac= $_POST['feulac'];
$con_asun= $_POST['asun'];
$con_fechac= $_POST['fechac'];
$con_estatus= $_POST['estatus'];
$con_nomusu= $_POST['nomusu'];
$con_estado= $_POST['estado'];
$con_numov= $_POST['nummov'];
$con_numcontac= $_POST['numcontac'];
$con_obserges= $_POST['obserges'];
$con_obserusu= $_POST['obserusu'];
$con_tipocas= $_POST['tipocas'];


require("../modelo/mod_conatel.php");
$registro= new conatel();

			$inserto=$registro->agregar($con_gestor,$con_numcas,$con_feulac,$con_asun,$con_estatus,$con_nomusu,$con_estado,$con_numov,$con_numcontac,$con_obserges,$con_obserusu,$con_fechac, $con_tipocas, $mysqlconn);


			if ($inserto==true){
				header("Location: ../vista/registro_conatel.php");

				/*$consulta= $registro->obtener($emp_cedula,$mysqlconn);
				if(mysqli_num_rows($consulta)>0){
					$row=mysqli_fetch_row($empleado);
					header("Location: ../index.php");
					}

				}*/}else{
					echo"error en el ingreso de datos";
					}

?>