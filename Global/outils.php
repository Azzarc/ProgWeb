<?php

/******************************/
/*  Quelques fonctions utiles */
/******************************/

	// Affiche le contenu d'une variable ... utile pour débugger
function debug ($uneVar) {
	echo "<pre>\n";
	print_r ($uneVar);
	echo "</pre>\n";
}
function verifConnex(){

	if(isset($_SESSION['login']) && isset($_SESSION['mdp']))
	{
		return true;
	}
	else {
		return false;
	}
}

?>