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
		$query= "SELECT con_tipocas, COUNT( * ) AS num FROM conatel where con_fechac between '$desde' and '$hasta' GROUP BY con_tipocas";
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



public function consolidado_info($gestor, $mes,$mysqlconn){

		$query= "SELECT count(*) as num , in_nomges FROM info WHERE in_nomges='$gestor' and in_fecharesp between '2015-$mes-01' and '2015-$mes-31' group by in_nomges";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function voz_canal
public function twitter_m($mysqlconn){

		$query= "SELECT sum(twi_cantidad) as num, twi_mes as mes FROM twitter GROUP BY cod_mes";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function voz_canal
public function gest_asis($desde, $hasta,$mysqlconn){

		$query= "SELECT DISTINCT asis_gestor FROM asistencia where asis_fecha between '$desde' and '$hasta'";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function con_est

public function cuenta($gestor,$estatus,$desde,$hasta,$mysqlconn){

		$query= "SELECT COUNT(*) AS  num, asis_gestor FROM asistencia where asis_estatus='$estatus' and asis_gestor='$gestor' and asis_fecha between '$desde' and '$hasta' group by asis_estatus";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function con_est


}//class reporte
?>