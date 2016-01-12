<head>
		<!--<title>index</title>-->
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
			<link rel="stylesheet" href="css/styles.css">
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<script type="text/javascript">
$(document).ready(function(){
$('.menujq > ul > li:has(ul)').addClass('desplegable');
$('.menujq > ul > li > a').click(function() {
var comprobar = $(this).next();
$('.menujq li').removeClass('activa');
$(this).closest('li').addClass('activa');
if((comprobar.is('ul')) && (comprobar.is(':visible'))) {
$(this).closest('li').removeClass('activa');
comprobar.slideUp('normal');
}
if((comprobar.is('ul')) && (!comprobar.is(':visible'))) {
$('.menujq ul ul:visible').slideUp('normal');
comprobar.slideDown('normal');
}
});
});
</script>
</head>
<body>
	<!-- Sidebar -->
					<div id="sidebar" class="menujq">

						<!-- Logo -->
							<a id="logo" href="hoy.php" ><img src="images/logo.png"width='184' height='84'/></a>
							<p>

							</p>

						<!--Nav
							<nav id="nav">-->
                                <?php
								if($_SESSION['emp_perfil']=='1'){
								 	require ("menu/menu_perfil1.php");}
										elseif($_SESSION['emp_perfil']=='2'){
								 			require ("menu/menu_perfil2.php");}
								 				else require ("menu/menu_perfil3.php");

								 ?>
						<!-- 	</nav>-->

							<!-- Copyright -->
							<div id="copymenu">
							<?php require ("copyright.php");?>

					</div>

			</div>

</body>