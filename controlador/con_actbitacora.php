<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

//se capturan los datos del formulario
  $bit_id=$_GET['id'];
  $bit_estatus= $_POST['estatus'];
  $bit_fechafin= $_POST['fechafin'];
  $bit_horfin= $_POST['horfin'];
  $bit_tick= $_POST['ticket'];
  $bit_obserges= $_POST['obserges'];
  $bit_obsersop= $_POST['obsersop'];

require("../modelo/mod_bitacora.php");
$registro= new bitacora();

			$inserto=$registro->actualizar($bit_estatus, $bit_fechafin, $bit_horfin, $bit_tick, $bit_obserges, $bit_obsersop, $bit_id,  $mysqlconn);

			if ($inserto==true){
				echo"
<body>
						<meta http-equiv='content-type' content='text/html; charset=utf-8' />
							<link rel='stylesheet' type='text/css' href='../vista/sweetalert/lib/sweet-alert.css'>
							<script type='text/javascript' src='../vista/sweetalert/lib/sweet-alert.min.js' ></script>
							<script type='text/javascript'>swal({title:'', text:'Registro Actualizado', type: 'success',confirmButtonText:'Cerrar'},function(){window.location.href='../vista/consulta_bitacora.php'});
			            	</script>
</body>";
				}else{
					echo "
<body>
						<meta http-equiv='content-type' content='text/html; charset=utf-8' />
							<link rel='stylesheet' type='text/css' href='../vista/sweetalert/lib/sweet-alert.css'>
							<script type='text/javascript' src='../vista/sweetalert/lib/sweet-alert.min.js' ></script>
							<script type='text/javascript'>swal({title:'Error!', text:'Registro No Actualizado', type: 'error',confirmButtonText:'Cerrar'},function(){window.location.href='../vista/consulta_bitacora.php'});
			            	</script>
</body>";
}?>