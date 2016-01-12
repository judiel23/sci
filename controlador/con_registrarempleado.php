<?php
require("../modelo/mod_connex.php");
$conexion= new connex();
$mysqlconn= $conexion->conectar();

//se capturan los datos del formulario

$emp_nombre= trim ($_POST ['nombre']);
$emp_apellido= trim ($_POST  ['apellido']);
$emp_cedula= trim ($_POST  ['cedula']);
$emp_login= trim ($_POST  ['login']);
$emp_perfil= trim ($_POST ['perfil']);
$emp_clave= trim ($_POST  ['clave']);
$emp_conficlave= trim ($_POST  ['conficlave']);

require("../modelo/mod_empleado.php");
$empleado= new empleado();
//se valida la clave
if($emp_clave!=$emp_conficlave){
		die("Las claves no coinciden");
		}else{

	$inserto=$empleado->agregar($emp_nombre, $emp_apellido, $emp_cedula, $emp_login, $emp_perfil, $emp_clave, $mysqlconn);


			if ($inserto==true){
				$consulta= $empleado->obtener($emp_cedula,$mysqlconn);
				if(mysqli_num_rows($consulta)>0){
					$row=mysqli_fetch_row($empleado);
					header("Location: ../vista/empleado_registrado.php");
					}

				}else{
					header("Location: ../vista/error_datos.php");
					}
			}
?>