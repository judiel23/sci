<?php
class conatel{
private $con_gestor;
private $con_numcas;
private $con_feulac;
private $con_asun;
private $con_estatus;
private $con_nomusu;
private $con_estado;
private $con_numov;
private $con_numcontac;
private $con_obserges;
private $con_obserusu;
private $con_fechac;
private $con_tipocas;
private $mysqlconn;

	public function agregar($con_gestor,$con_numcas,$con_feulac,$con_asun,$con_estatus,$con_nomusu,$con_estado,$con_numov,$con_numcontac,$con_obserges,$con_obserusu,$con_fechac, $con_tipocas, $mysqlconn){

	$query = "INSERT INTO conatel (con_gestor,con_numcas,con_feulac,con_asun,con_estatus,con_nomusu,con_estado,con_numov,con_numcontac,con_obserges,con_obserusu,con_fechac, con_tipocas)

	VALUES ('$con_gestor','$con_numcas','$con_feulac','$con_asun','$con_estatus','$con_nomusu','$con_estado','$con_numov','$con_numcontac','$con_obserges','$con_obserusu','$con_fechac', '$con_tipocas')";

		$consulta= mysqli_query($mysqlconn,$query) or die("los datos no se registraron: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function agragar

	public function mostrar($mysqlconn){
		$query= "SELECT gar_nombges, gar_numcas, gar_canal, gar_nomusu, gar_estatus FROM garantia ORDER BY gar_cod DESC LIMIT 1";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if mostrar
		}//class mostrar

	public function obtener($mysqlconn){
		$query= "SELECT * FROM conatel where con_estatus='Abierto'";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener

		public function buscar($con_numcas, $mysqlconn){
		$query= "SELECT * FROM conatel WHERE con_numcas=$con_numcas";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener

		public function actualizar($con_id,$con_feulac,$con_estatus,$con_obserusu,$con_obserges,$con_gestor, $mysqlconn){
			$query="INSERT INTO act_conatel (con_id,act_fecseg,act_estatus,act_obserges,act_gestor)
					VALUES ('$con_id','$con_feulac','$con_estatus','$con_obserges','$con_gestor')";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
			$query="UPDATE conatel set con_feulac='$con_feulac', con_estatus='$con_estatus', con_obserusu='$con_obserusu', con_obserges='$con_obserges' where con_id=$con_id";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener
}//class empleado
?>