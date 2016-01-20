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


			if ($inserto==true){echo"
<body>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<link rel='stylesheet' type='text/css' href='../vista/sweetalert/lib/sweet-alert.css'>
	<script type='text/javascript' src='../vista/sweetalert/lib/sweet-alert.min.js' ></script>
	<script type='text/javascript'>swal({title:'', text:'Registro Exitoso', type: 'success',confirmButtonText:'Cerrar'},function(){window.location.href='../vista/registro_twitter.php'});
	</script>
</body>";	
	}		
?>