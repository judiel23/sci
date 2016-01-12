<?php
class bitacora{
	private $bit_gestor;
	private $bit_tick;
	private $bit_orig;
	private $bit_fechaini;
	Private $bit_horini;
	private $bit_fechafin;
	private $bit_horfin;
	private $bit_alca;
	private $bit_afect;
	private $bit_estatus;
	private $bit_obsersop;
	private $bit_obserges;

	private $mysqlconn;

		public function agregar($bit_gestor, $bit_tick, $bit_orig, $bit_fechaini, $bit_horini, $bit_fechafin, $bit_horfin, $bit_alca, $bit_afect, $bit_estatus, $bit_obsersop, $bit_obserges, $mysqlconn){

			$query = "INSERT INTO bitacora (bit_gestor, bit_tick, bit_orig, bit_fechaini, bit_horini, bit_fechafin, bit_horfin, bit_alca, bit_afect, bit_estatus, bit_obsersop, bit_obserges)

			VALUES ('$bit_gestor', '$bit_tick', '$bit_orig', '$bit_fechaini', '$bit_horini', '$bit_fechafin', '$bit_horfin', '$bit_alca', '$bit_afect','$bit_estatus','$bit_obsersop', '$bit_obserges')";

		$consulta= mysqli_query($mysqlconn,$query) or die("los datos no se registraron: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function agragar


		public function obtener($mysqlconn){
			$query= "SELECT * FROM bitacora ";
			$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
			if($consulta){
				return ($consulta);
				}// if obtener
			}//class obtener

		public function buscar($bit_id, $mysqlconn){
			$query= "SELECT * FROM bitacora WHERE bit_id=$bit_id";
			$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
			if($consulta){
				return ($consulta);
				}// if obtener
			}//class obtener

		public function mostrar($mysqlconn){
		$query= "SELECT bit_id, bit_gestor, bit_orig, bit_afect, bit_estatus, bit_fechaini, bit_tick FROM bitacora ORDER BY bit_id DESC LIMIT 15";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if mostrar
		}//class mostrar

		public function mostrarreg($mysqlconn){
		$query= "SELECT bit_gestor, bit_orig, bit_afect, bit_estatus, bit_fechaini FROM bitacora ORDER BY bit_id DESC LIMIT 1";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if mostrar
		}//class mostrar

		public function actualizar($bit_estatus, $bit_fechafin, $bit_horfin, $bit_tick, $bit_obsersop, $bit_obserges, $bit_id, $mysqlconn){
			$query="UPDATE bitacora set bit_estatus='$bit_estatus', bit_fechafin='$bit_fechafin', bit_horfin='$bit_horfin', bit_tick='$bit_tick', bit_obsersop='$bit_obsersop', bit_obserges='$bit_obserges' where bit_id=$bit_id";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener
}//class info
?>