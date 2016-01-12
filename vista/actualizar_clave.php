
<?php
require ("session.php");
?>
<html>
	<head>
		<title>Inicio</title>
		<link rel="icon" href="images/logot.png" type="image" sizes="16x16">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>

	</head>

	<body class="left-sidebar">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Content -->
					<div id="content">
						<div class="inner">

							<!-- Post -->
								<article class="box post post-excerpt">
									<header>

							
										<h2><a href="#">Cambiar Contraseña</a></h2>
										<hr>
								
									</header>
									<div class="info">
								
										<span class="date"><span class="month">Gestores</span> 
										<ul class="stats">
										
										</ul>
									</div>
									
						<div align="center">

						<header>
								<h3> <strong>INGRESE LOS SIGUIENTES DATOS:</strong></h3>
						</header>
						<br>

<?php
//-----------------------------------------------------se ven dos tablas debido a que si el usuario es perfil 1 puede actualizar la clave de otro gestor
$emp_login=$_SESSION['emp_login'];
if($_SESSION['emp_perfil']=='1') { ?>
									
                            	<form method="post" action="../controlador/con_cam_clave.php" >
                             	<table align="center">
                             		<tr>
                             		<td><strong>Usuario:</strong></td>
                             		<td><input  type="text" name="usuario" id="usuario" placeholder="usuario01" required></td>
                             		</tr>
									<tr>
                            		<td><strong>Contraseña:</strong></td>
                            		<td><input  type="password" name="emp_clave" id="emp_clave"required placeholder="******"></td></tr>
                            		<tr>
                            		<td><strong>Confirmar Contraseña:</strong></td>
                            		<td><input type="password" name="conficlave" id="conficlave"required placeholder="******"></td></tr>
									<tr>
							  		<td colspan="2" heigth="5">&nbsp;</td>
							  		<tr>
									<td id="boton" align="center">
                              			<div align="center"><input name="submit" type="submit" value="enviar"></div>
                              		</td>
                                </table>
                            </form>
<?php } else { ?>
								<form method="post" action="../controlador/con_cam_clave.php">
                             	<table align="center">
                             		<tr>
                             		<td><strong>Usuario:</strong></td>
                             		<td><input  type="text" name="usuario" id="usuario" placeholder="usuario01" readonly="readonly" value="<?php echo $_SESSION['emp_login']; ?>" required></td></tr>
                             		<tr>
                            		<td><strong>Contraseña:</strong></td>
                            		<td><input  type="password" name="emp_clave" id="emp_clave"required placeholder="******"></td></tr>
                            		<tr>
                            		<td><strong>Confirmar Contraseña:</strong></td>
                            		<td><input type="password" name="conficlave" id="conficlave"required placeholder="******"></td></tr>
									<tr>
							  		<td colspan="2" heigth="5">&nbsp;</td>
							  		<tr>
									<td id="boton" align="center">
                              			<div align="center"><input name="submit" type="submit" value="enviar"></div>
                              		</td>
                              	</tr>
                                </table>
                            </form>
                            
<?php } ?>

					    </div>

									



						</div>
					</div>

				<!-- Sidebar -->
					<?php require ("menu.php");?>

					</div>

			</div>

	</body>
</html>