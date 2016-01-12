<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

//se capturan los datos del formulario

  $voz_gestor= $_POST['voz_gestor'];
  $voz_estatus= $_POST['voz_estatus'];
  $voz_fechaes= $_POST['voz_fechaes'];
  $voz_canal= $_POST['voz_canal'];
  $voz_fechaci= $_POST['voz_fechaci'];
  $voz_respon= $_POST['voz_respon'];
  $voz_categoria= $_POST['voz_categoria'];
  $voz_subcat= $_POST['voz_subcat'];
  $voz_usuario= $_POST['voz_usuario'];
  $voz_movil= $_POST['voz_movil'];
  $voz_tecno= $_POST['voz_tecno'];
  $voz_via= $_POST['voz_via'];
  $voz_detalle= $_POST['voz_detalle'];
  $voz_plantea= $_POST['voz_plantea'];
  $voz_observa= $_POST['voz_observa'];

$result = mysqli_query($mysqlconn,"SELECT nivel1 FROM voz_niv1 Where id_niv1 = $voz_categoria");
                 if(mysqli_num_rows($result)>0){
                  for($i=0; $i<mysqli_num_rows($result); $i++){
                 $rw= mysqli_fetch_array($result, MYSQLI_ASSOC);
               }
                 $voz_categoria=$rw["nivel1"];
                          }
$result = mysqli_query($mysqlconn,"SELECT nivel2 FROM voz_niv2 Where id_niv2 = $voz_subcat");
                 if(mysqli_num_rows($result)>0){
                  for($i=0; $i<mysqli_num_rows($result); $i++){
                 $rw= mysqli_fetch_array($result, MYSQLI_ASSOC);
               }
                 $voz_subcat=$rw["nivel2"];
                          }

require("../modelo/mod_vozusu.php");
$registro= new voz_usuario();

			$inserto=$registro->agregar($voz_via, $voz_detalle, $voz_usuario, $voz_movil, $voz_tecno, $voz_plantea, $voz_categoria, $voz_subcat, $voz_observa, $voz_canal, $voz_respon, $voz_fechaes, $voz_fechaci, $voz_estatus, $voz_gestor, $mysqlconn);

			if ($inserto==true){
				header("Location: ../vista/registro_vozusu.php");
				/*$consulta= $registro->obtener($emp_cedula,$mysqlconn);
				if(mysqli_num_rows($consulta)>0){
					$row=mysqli_fetch_row($empleado);
					header("Location: ../index.php");
					}

				}
				*/}else{
					echo"error en el ingreso de datos";
					}

?>