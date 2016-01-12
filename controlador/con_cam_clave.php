<?php

	require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();


	//se capturan los datos del formulario

  $emp_login= $_POST['usuario'];
  $emp_clave= $_POST['emp_clave'];
  $conficlave= $_POST['conficlave'];


require('../modelo/mod_empleado.php');
		$registro = new empleado();

		if($emp_clave!=$conficlave){
		die("Las claves no coinciden");
		}else{

		$inserto=$registro->actualizar($emp_login,$emp_clave, $mysqlconn);


			if ($inserto==true){

				echo"
				<meta http-equiv='content-type' content='text/html; charset=utf-8' />
				<script type='text/javascript'>
                alert('Contraseña Actualizada con Exito, \\n Inicie Sesion Con Su Nueva Clave');
                window.location.href='../vista/index.php'
				</script>";

				}else{
					echo"error en el ingreso de datos";
					}
				}
?>