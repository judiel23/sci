<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

//se capturan los datos del formulario


$gar_numcas= $_POST['numcas'];
$gar_obseroc= $_POST['obseroc'];
$gar_obserges= $_POST['obserges'];
$gar_estatus= $_POST['estatus'];
$gar_fecharde= $_POST['fecharde'];

require("../modelo/mod_equipo.php");
$registro= new equipo();

			$inserto=$registro->modificar($gar_numcas,$gar_obseroc,$gar_obserges,$gar_estatus,$gar_fecharde, $mysqlconn);


			if ($inserto==true){echo"
<body>
						<meta http-equiv='content-type' content='text/html; charset=utf-8' />
							<link rel='stylesheet' type='text/css' href='../vista/sweetalert/lib/sweet-alert.css'>
							<script type='text/javascript' src='../vista/sweetalert/lib/sweet-alert.min.js' ></script>
							<script type='text/javascript'>swal({title:'', text:'Registro Actualizado', type: 'success',confirmButtonText:'Cerrar'},function(){window.location.href='../vista/consulta_garantia.php'});
			            	</script>
</body>";
				}else{
					echo "
<body>
						<meta http-equiv='content-type' content='text/html; charset=utf-8' />
							<link rel='stylesheet' type='text/css' href='../vista/sweetalert/lib/sweet-alert.css'>
							<script type='text/javascript' src='../vista/sweetalert/lib/sweet-alert.min.js' ></script>
							<script type='text/javascript'>swal({title:'Error!', text:'Registro No Actualizado', type: 'error',confirmButtonText:'Cerrar'},function(){window.location.href='../vista/consulta_garantia.php'});
			            	</script>
</body>";
}?>