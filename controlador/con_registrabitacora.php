<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

//se capturan los datos del formulario

  $bit_gestor= $_POST['bit_gestor'];
  $bit_tick= $_POST['bit_tick'];
  $bit_orig= $_POST['bit_orig'];
  $bit_fechaini= $_POST['bit_fechaini'];
  $bit_horini= $_POST['bit_horini'];
  $bit_fechafin= $_POST['bit_fechafin'];
  $bit_horfin= $_POST['bit_horfin'];
  $bit_alca= $_POST['bit_alca'];
  $bit_afect= $_POST['bit_afect'];
  $bit_estatus= $_POST['bit_estatus'];
  $bit_obsersop= $_POST['bit_obsersop'];
  $bit_obserges= $_POST['bit_obserges'];


require("../modelo/mod_bitacora.php");
$registro= new bitacora();

			$inserto=$registro->agregar($bit_gestor, $bit_tick, $bit_orig, $bit_fechaini, $bit_horini, $bit_fechafin, $bit_horfin, $bit_alca, $bit_afect, $bit_estatus, $bit_obsersop, $bit_obserges, $mysqlconn);

			if ($inserto==true){
				header("Location: ../vista/consulta_bitacora.php");
				/*$consulta= $registro->obtener($emp_cedula,$mysqlconn);
				if(mysqli_num_rows($consulta)>0){
					$row=mysqli_fetch_row($empleado);
					header("Location: ../index.php");
					}

				}*/}else{
					echo"error en el ingreso de datos";
					}

?>