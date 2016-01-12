<?php
Class connex{
	private $usuario;
	private $clave;
	private $servidor;
	private $bd;
	private $puerto;
	private $mysqlconn;

	public function connex(){
		$this->usuario='root';//'atevir';
		$this->clave='';//'atevir';
<<<<<<< HEAD
		$this->servidor='192.168.0.102';//'192.168.210.130';
=======
		$this->servidor='localhost';//'192.168.210.130';
>>>>>>> fc635f1588042f985786e64cff20d86b8ad0f18e
		$this->bd='sci';
		$this->puerto='3306';
		$this->mysqlconn=' ';

		}
		public function conectar(){
		$this->mysqlconn= mysqli_connect($this->servidor,$this->usuario,$this->clave,$this->bd) or die ("ERROR DE CONEXION:".mysqli_error($mysqlconn));
		$mysqlconn=$this->mysqlconn;
		return $this->mysqlconn;
	if ($mysqlconn){
		echo "conectado";
		}
		}
	}


?>
