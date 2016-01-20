<?php
	$emp_login = $_POST['usuario'];
	$emp_clave 	 = md5($_POST['clave']);
   $_SESSION['usuario']	= $emp_login;
   $_SESSION['clave']  	= $emp_clave;

	require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

	/*if($mysqlconn){
		echo "conexion establecida \n";
		}*/

		require('../modelo/mod_empleado.php');
		$instanciar = new empleado();
		$columna = $instanciar->actualizar($emp_login,$emp_clave,$mysqlconn);

	if(mysqli_num_rows($columna)>0){
		session_start();
		$row = mysqli_fetch_array($columna,MYSQLI_ASSOC);
		$_SESSION["emp_login"]=$row["emp_login"];
		$_SESSION["emp_perfil"]=$row["emp_perfil"];
		header("Location:../vista/hoy.php");
	}
	else{
		$mensaje="Sus datos no coinciden";
	}
	if($mensaje!="") { echo $mensaje;}
?>