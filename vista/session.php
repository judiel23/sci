<?php
session_start();
$inactivo =21600;
$_SESSION['emp_login'];
$_SESSION['emp_perfil'];
$_SESSION['emp_clave'];
if(!isset($_SESSION['emp_login'])){
	header('Location: index.php');
	 }else{
		}
if(isset($_SESSION['time']))
{
	$vida_session=time() - $_SESSION['time'];
		if($vida_session > $inactivo)
			{

			session_destroy();
				header('Location: index.php');}

}
$_SESSION['time'] = time ();

?>