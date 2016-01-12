<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

//se capturan los datos del formulario

$gar_nombges= $_POST['nombges'];
$gar_numcas= $_POST['numcas'];
$gar_fechardq= $_POST['fechardq'];
$gar_canal= $_POST['canal'];
$gar_fechaepg= $_POST['fechaepg'];
$gar_nomoc= $_POST['nomoc'];
$gar_ciuoc= $_POST['ciuoc'];
$gar_fecharde= $_POST['fecharde'];
$gar_fecharoc= $_POST['fecharoc'];
$gar_obseroc= $_POST['obseroc'];
$gar_nomusu= $_POST['nomusu'];
$gar_numcel= $_POST['numcel'];
$gar_marca= $_POST['marca'];
$gar_modelo= $_POST['modelo'];
$gar_obserges= $_POST['obserges'];
$gar_estatus= $_POST['estatus'];


require("../modelo/mod_equipo.php");
$registro= new equipo();

			$inserto=$registro->agregar($gar_nombges, $gar_numcas, $gar_fechardq, $gar_canal, $gar_fechaepg, $gar_nomoc, $gar_ciuoc, $gar_fecharde, $gar_fecharoc, $gar_obseroc, $gar_nomusu, $gar_numcel, $gar_marca, $gar_modelo, $gar_obserges, $gar_estatus, $mysqlconn);
			if($gar_numcas==$gar_numcas){
				echo"NUMERO DE REPORTE YA ESTA REGISTRADO";
			}
			if ($inserto==true){
				header("Location: ../vista/registro_garantia.php");
				/*$consulta= $registro->obtener($emp_cedula,$mysqlconn);
				if(mysqli_num_rows($consulta)>0){
					$row=mysqli_fetch_row($empleado);
					header("Location: ../index.php");
					}

				}*/}else{
					echo"error en el ingreso de datos";
					}

?>