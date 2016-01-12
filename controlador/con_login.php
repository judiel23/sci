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
		$columna = $instanciar->autenticar($emp_login,$emp_clave,$mysqlconn);

	if(mysqli_num_rows($columna)>0){
		session_start();
		$row = mysqli_fetch_array($columna,MYSQLI_ASSOC);
		$_SESSION["emp_login"]=$row["emp_login"];
		$_SESSION["emp_perfil"]=$row["emp_perfil"];
		$_SESSION["emp_clave"]=$row["emp_clave"];
		header("Location:../vista/hoy.php");
	}
	else{echo "
<body>
						<meta http-equiv='content-type' content='text/html; charset=utf-8' />
							<link rel='stylesheet' type='text/css' href='../vista/sweetalert/lib/sweet-alert.css'>
							<script type='text/javascript' src='../vista/sweetalert/lib/sweet-alert.min.js' ></script>
							<script type='text/javascript'>swal({title:'Error!', text:'Sus Datos No Coinciden', type: 'error',confirmButtonText:'Cerrar'},function(){window.location.href='../vista/index.php'});
			            	</script>
</body>";
	}
	/*if($mensaje!="") { echo $mensaje;}*/
?>