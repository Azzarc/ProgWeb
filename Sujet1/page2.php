<?php 
session_start();

include '../Global/outils.php';

if(verifConnex())
{

	echo'
	<!DOCTYPE HTML>
	<html>
	<head>
	<meta charset="utf-8" />
	<link rel=\'stylesheet\' href="../Global/style.css"/>
	<title>Programmation Web</title>
	</head>
	<body>';
		#<!-- L'en-tête -->
	echo'	<header>
	<p>Page 2</p>
	</header>';


		#<!-- Le menu inclus depuis menu.php -->

	include ("./menu.php");

	#	<!-- Le contenu (1 seule section suffit) -->		
	echo'	<section>
	<h1>Page 2</h1>
	<p>Blablabla</p>			

	</section>
	</body>
	</html>';
}
else{
	echo '<h1>Veuillez vous connecter pour acceder a cette page !</h1>';
}
?>