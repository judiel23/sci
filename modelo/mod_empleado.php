<?php
class empleado{
	private $emp_nombre;
	private $emp_apelllido;
	private $emp_cedula;
	private $emp_login;
	private $emp_clave;
	private $emp_perfil;
	private $mysqlconn;

	public function agregar($emp_nombre,$emp_apellido,$emp_cedula,$emp_login,$emp_perfil,$emp_clave, $mysqlconn){

	$query = "INSERT INTO empleado (emp_nombre, emp_apellido, emp_cedula, emp_login, emp_perfil, emp_clave)

	VALUES ('$emp_nombre','$emp_apellido','$emp_cedula','$emp_login', '$emp_perfil', md5('$emp_clave'))";

		$consulta= mysqli_query($mysqlconn,$query);

		return $consulta;

		}//function agragar


		public function autenticar($emp_login, $emp_clave, $mysqlconn){
			$query= "SELECT * FROM empleado WHERE emp_login='$emp_login' AND emp_clave='$emp_clave'	";
			$consulta= mysqli_query($mysqlconn, $query) or die ("CONSULTA ERRADA: ".mysqli_error($consulta));
			if($consulta){
				return $consulta;
				}//if autenticar
			}//function autenticar

	public function obtener($emp_cedula, $mysqlconn){
		$query= "SELECT * FROM empleado WHERE emp_cedula='$emp_cedula'";
		$consulta= mysqli_query($mysqlconn,$query) or die ("Consulta Errónea: ".mysqli_error($consulta));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener

		public function lista($mysqlconn){
		$query= "SELECT * FROM empleado";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($consulta));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener

		public function mostrar($mysqlconn){
		$query= "SELECT emp_nombre, emp_apellido , emp_cedula, emp_login, emp_clave FROM empleado ORDER BY emp_cod DESC LIMIT 1";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($consulta));
		if($consulta){
			return ($consulta);
			}// if mostrar
		}//class mostrar

		public function reporte($mysqlconn){
		$query= "SELECT * FROM empleado";
		$consulta= mysqli_query ($mysqlconn, $query);
		$resultado= mysqli_num_rows ($consulta);
		if($resultado){
			return($resultado);
			}
		}

		public function actualizar($emp_login,$emp_clave,$mysqlconn){
		$query= "UPDATE empleado SET emp_clave=md5('$emp_clave') where emp_login='$emp_login'";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}
		}
}//class empleado
?>