<?php
// Se establece la conexión a la base de datos


require('../modelo/mod_connex.php');

require("../modelo/mod_reporte.php");

 function gar(){
 	$conexion = new Connex();
	$mysqlconn= $conexion->conectar();


	$consulta= new reporte();

	$resultado= $consulta->garantia($mysqlconn);
if($resultado){

			 for($i=0; $i<mysqli_num_rows($resultado); $i++){
 $row= mysqli_fetch_array($resultado, MYSQLI_ASSOC);
 $a=$row["num"];
 $b=$row["gar_nombges"];

 $array[$i] = array( 'label'=>$b,'value' =>$a );

	$cons=json_encode($array[$i]);




		echo" $cons,";
			}
			}// if
                         }//end gar
	 function info($desde,$hasta){
 	$conexion = new Connex();
	$mysqlconn= $conexion->conectar();
 	/*$equipo= new equipo();
	$registros=$equipo-> reporte($mysqlconn);	*/

	$consulta= new reporte();

	$resultado= $consulta->info($desde,$hasta,$mysqlconn);
if($resultado){

			 for($i=0; $i<mysqli_num_rows($resultado); $i++){
 $row= mysqli_fetch_array($resultado, MYSQLI_ASSOC);
 $a=$row["num"];
 $b=$row["in_nomges"];

 $array[$i] = array( 'label'=>$b,'value' =>$a );

	$cons=json_encode($array[$i]);




		echo" $cons,";
			}
			}// if
                         }//end info

 function inf_n($desde,$hasta){
 	$conexion = new Connex();
	$mysqlconn= $conexion->conectar();
 	/*$equipo= new equipo();
	$registros=$equipo-> reporte($mysqlconn);	*/

	$consulta= new reporte();

	$resultado= $consulta->info_n($desde,$hasta,$mysqlconn);
if($resultado){

			 for($i=0; $i<mysqli_num_rows($resultado); $i++){
 $row= mysqli_fetch_array($resultado, MYSQLI_ASSOC);
 $a=$row["num"];
 $b=$row["in_niv1"];

 $array[$i] = array( 'label'=>$b,'value' =>$a );

	$cons=json_encode($array[$i]);




		echo" $cons,";
			}
			}// if
                         }//end inf_n

 function con($desde, $hasta){
 	$conexion = new Connex();
	$mysqlconn= $conexion->conectar();


	$consulta= new reporte();

	$resultado= $consulta->con_ges($desde, $hasta, $mysqlconn);
if($resultado){

			 for($i=0; $i<mysqli_num_rows($resultado); $i++){
 $row= mysqli_fetch_array($resultado, MYSQLI_ASSOC);
 $a=$row["num"];
 $b=$row["con_gestor"];

 $array[$i] = array( 'label'=>$b,'value' =>$a );

	$cons=json_encode($array[$i]);




		echo" $cons,";
			}
			}// if
                         }//end con
 function con_asu($desde, $hasta){
 	$conexion = new Connex();
	$mysqlconn= $conexion->conectar();


	$consulta= new reporte();

	$resultado= $consulta->con_asu($desde, $hasta, $mysqlconn);
if($resultado){

			 for($i=0; $i<mysqli_num_rows($resultado); $i++){
 $row= mysqli_fetch_array($resultado, MYSQLI_ASSOC);
 $a=$row["num"];
 $b=$row["con_tipocas"];

 $array[$i] = array( 'label'=>$b,'value' =>$a );

	$cons=json_encode($array[$i]);




		echo" $cons,";
			}
			}// if
                         }//end con_asu

 function con_estatus($desde, $hasta){
 	$conexion = new Connex();
	$mysqlconn= $conexion->conectar();


	$consulta= new reporte();

	$resultado= $consulta->con_est($desde, $hasta,$mysqlconn);
if($resultado){

			 for($i=0; $i<mysqli_num_rows($resultado); $i++){
 $row= mysqli_fetch_array($resultado, MYSQLI_ASSOC);
 $a=$row["num"];
 $b=$row["con_estatus"];

 $array[$i] = array( 'label'=>$b,'value' =>$a );

	$cons=json_encode($array[$i]);




		echo" $cons,";
			}
			}// if
                         }//end con
 function bitacora($desde, $hasta){
 	$conexion = new Connex();
	$mysqlconn= $conexion->conectar();


	$consulta= new reporte();

	$resultado= $consulta->al($desde, $hasta,$mysqlconn);
if($resultado){

			 for($i=0; $i<mysqli_num_rows($resultado); $i++){
 $row= mysqli_fetch_array($resultado, MYSQLI_ASSOC);
 $a=$row["num"];
 $b=$row["bit_afect"];

 $array[$i] = array( 'label'=>$b,'value' =>$a );

	$cons=json_encode($array[$i]);




		echo" $cons,";
			}
			}// if
                         }//end con

 function voz_estatus(){
 	$conexion = new Connex();
	$mysqlconn= $conexion->conectar();


	$consulta= new reporte();

	$resultado= $consulta->voz_est($mysqlconn);
if($resultado){

			 for($i=0; $i<mysqli_num_rows($resultado); $i++){
 $row= mysqli_fetch_array($resultado, MYSQLI_ASSOC);
 $a=$row["num"];
 $b=$row["voz_estatus"];

 $array[$i] = array( 'label'=>$b,'value' =>$a );

	$cons=json_encode($array[$i]);




		echo" $cons,";
			}
			}// if
                         }//end con

function voz_canal(){
 	$conexion = new Connex();
	$mysqlconn= $conexion->conectar();


	$consulta= new reporte();

	$resultado= $consulta->voz_can($mysqlconn);
if($resultado){

			 for($i=0; $i<mysqli_num_rows($resultado); $i++){
 $row= mysqli_fetch_array($resultado, MYSQLI_ASSOC);
 $a=$row["num"];
 $b=$row["voz_canal"];

 $array[$i] = array( 'label'=>$b,'value' =>$a );

	$cons=json_encode($array[$i]);




		echo" $cons,";
			}
			}// if
                         }//end con




function consolidado($gestor, $mes){
 	$conexion = new Connex();
	$mysqlconn= $conexion->conectar();


	$consulta= new reporte();

	$resultado= $consulta->consolidado_info($gestor,$mes,$mysqlconn);

if (mysqli_num_rows($resultado)==0) {
	$a=0;
	$cons=json_encode(array( 'value' =>$a ));

		echo" $cons,";
}

			 for($i=0; $i<mysqli_num_rows($resultado); $i++){
 $row= mysqli_fetch_array($resultado, MYSQLI_ASSOC);
 $a=$row["num"];




 $array[$i] = array( 'value' =>$a );

	$cons=json_encode($array[$i]);




		echo" $cons,";
			}

                         }//end con




                         function twitter_mes(){
 	$conexion = new Connex();
	$mysqlconn= $conexion->conectar();


	$consulta= new reporte();

	$resultado= $consulta->twitter_m($mysqlconn);
if($resultado){

			 for($i=0; $i<mysqli_num_rows($resultado); $i++){
 $row= mysqli_fetch_array($resultado, MYSQLI_ASSOC);
 $a=$row["num"];
 $b=$row["mes"];

 $array[$i] = array( 'label'=>$b,'value' =>$a );

	$cons=json_encode($array[$i]);




		echo" $cons,";
			}
			}// if
                         }//end con
?>