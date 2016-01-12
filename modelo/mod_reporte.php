<?php
class reporte {


	private $mysqlconn;

		public function garantia($mysqlconn){

		$query= "SELECT gar_nombges, COUNT( * ) as num FROM garantia GROUP BY gar_nombges";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function garantia
        public function info($desde,$hasta,$mysqlconn){
        	if ($desde=="" and $hasta=="") {
        		$desde=date('Y-m-d',strtotime('-1 month'));
        		$hasta=date('Y-m-d');

        	}
        	else{
        			$desde=date("Y-m-d", strtotime($desde));
        			$hasta=date("Y-m-d", strtotime($hasta));
        		}

        			$query= "SELECT in_nomges, COUNT( * ) AS num FROM info  where in_fecharesp between '$desde' and '$hasta' GROUP BY in_nomges ";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;


		}//function info


		public function info_n($desde,$hasta,$mysqlconn){
		if ($desde=="" and $hasta=="") {
        		$desde=date('Y-m-d',strtotime('-1 month'));
        		$hasta=date('Y-m-d');

        	}
        	else{
        			$desde=date("Y-m-d", strtotime($desde));
        			$hasta=date("Y-m-d", strtotime($hasta));
        		}
		$query= "SELECT in_niv1, COUNT( * ) AS num FROM info where in_fecharesp between '$desde' and '$hasta' GROUP BY in_niv1";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function info_n
		public function con_ges($desde, $hasta, $mysqlconn){

			if ($desde=="" and $hasta=="") {
        		$desde=date('Y-m-d',strtotime('-1 month'));
        		$hasta=date('Y-m-d');

        	}
        	else{
        			$desde=date("Y-m-d", strtotime($desde));
        			$hasta=date("Y-m-d", strtotime($hasta));
        		}
		$query= "SELECT con_gestor, COUNT( * ) AS num FROM conatel where con_feulac between '$desde' and '$hasta' GROUP BY con_gestor";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function con_ges
		public function con_asu($desde, $hasta, $mysqlconn){

			if ($desde=="" and $hasta=="") {
        		$desde=date('Y-m-d',strtotime('-1 month'));
        		$hasta=date('Y-m-d');

        	}
        	else{
        			$desde=date("Y-m-d", strtotime($desde));
        			$hasta=date("Y-m-d", strtotime($hasta));
        		}
		$query= "SELECT con_tipocas, COUNT( * ) AS num FROM conatel where con_feulac between '$desde' and '$hasta' GROUP BY con_tipocas";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function con_asu
		public function con_est($desde, $hasta, $mysqlconn){

			if ($desde=="" and $hasta=="") {
        		$desde=date('Y-m-d',strtotime('-1 month'));
        		$hasta=date('Y-m-d');

        	}
        	else{
        			$desde=date("Y-m-d", strtotime($desde));
        			$hasta=date("Y-m-d", strtotime($hasta));
        		}
		$query= "SELECT con_estatus, COUNT( * ) AS num FROM conatel  where con_feulac between '$desde' and '$hasta' GROUP BY con_estatus";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function con_est
		public function al($desde, $hasta, $mysqlconn){

		$query= "SELECT bit_afect, COUNT( * ) AS num FROM bitacora where bit_fechaini between '$desde' and '$hasta' GROUP BY bit_afect";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function con_est
		public function voz_est($mysqlconn){

		$query= "SELECT voz_estatus, COUNT( * ) AS num FROM voz_usuario GROUP BY voz_estatus";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function voz_est
		public function voz_can($mysqlconn){

		$query= "SELECT voz_canal, COUNT( * ) AS num FROM voz_usuario GROUP BY voz_canal";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function voz_canal


}//class reporte
?>