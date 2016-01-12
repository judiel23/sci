<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

//se capturan los datos del formulario

  $in_nomges= $_POST['in_nomges'];
  $in_esca= $_POST['in_esca'];
  $in_fecharec= $_POST['in_fecharec'];
  $in_areaes= $_POST['in_areaes'];
  $in_fecharesp= $_POST['in_fecharesp'];
  $in_resuelto= $_POST['in_resuelto'];
  $in_niv1= $_POST['in_niv1'];
  $in_niv2= $_POST['in_niv2'];
  $in_niv3= $_POST['in_niv3'];
  $in_nomusu= $_POST['in_nomusu'];
  $in_nummov= $_POST['in_nummov'];
  $in_numcont= $_POST['in_numcont'];
  $in_produc= $_POST['in_produc'];
  $in_tecno= $_POST['in_tecno'];
  $in_correo= $_POST['in_correo'];
  $in_obser= $_POST['in_obser'];

$result = mysqli_query($mysqlconn,"SELECT Nivel1 FROM primero Where IDnivel1 = $in_niv1");
                 if(mysqli_num_rows($result)>0){
                  for($i=0; $i<mysqli_num_rows($result); $i++){
                 $rw= mysqli_fetch_array($result, MYSQLI_ASSOC);
               }
                 $in_niv1=$rw["Nivel1"];
                          }
$result = mysqli_query($mysqlconn,"SELECT Nivel2 FROM segundo Where IDnivel2 = $in_niv2");
                 if(mysqli_num_rows($result)>0){
                  for($i=0; $i<mysqli_num_rows($result); $i++){
                 $rw= mysqli_fetch_array($result, MYSQLI_ASSOC);
               }
                 $in_niv2=$rw["Nivel2"];
                          }
$result = mysqli_query($mysqlconn,"SELECT Nivel3 FROM tercero Where IDnivel3 = $in_niv3");
                 if(mysqli_num_rows($result)>0){
                  for($i=0; $i<mysqli_num_rows($result); $i++){
                 $rw= mysqli_fetch_array($result, MYSQLI_ASSOC);
               }
                 $in_niv3=$rw["Nivel3"];
                          }

require("../modelo/mod_info.php");
$registro= new info();

			$inserto=$registro->agregar($in_nomges, $in_esca, $in_fecharec, $in_areaes, $in_fecharesp, $in_resuelto, $in_niv1, $in_niv2, $in_niv3, $in_nomusu, $in_nummov, $in_numcont, $in_produc, $in_tecno, $in_correo, $in_obser, $mysqlconn);

			if ($inserto==true){
				header("Location: ../vista/registro_info.php");
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