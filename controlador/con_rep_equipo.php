<?php
// Se establece la conexión a la base de datos
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();


//Se realiza el llamado al modelo empleado, se llama a la clase reporte y se solicita la cantidad de empleados registrados.

require("../modelo/mod_equipo.php");
	$consulta= new equipo();
	$resultado=$consulta-> reporte($mysqlconn);


?>