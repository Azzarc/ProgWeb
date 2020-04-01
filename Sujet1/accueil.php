<?php
	include ("../Global/outils.php");
	
	if(!($_POST['login']=='toto' && $_POST['mdp']=='toto')){

		if(!isset($_COOKIE['fails'])){
			setcookie('fails',2,time()+3600);
		}
		else{
			setcookie('fails',$_COOKIE['fails']+=1,time()+3600);
		}
		header('Location: http://127.0.0.1/ProgWeb/Sujet1/index.php?err=true');
  		exit();
	}
	else{
		setcookie('fails',0,time()+3600);
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel='stylesheet' href='<?php echo "../Global/style.css"; ?>' />
		<title>Programmation Web</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header>
			<p>Accueil</p>
		</header>
		
		
		<!-- Le menu inclus depuis menu.php -->
<?php
	include ("./menu.php");
?>
		
		<!-- Le coenu (1 seule section suffit) -->		
		<section>
			<h1>Accueil</h1>
			<p>À Compléter (Sujet 1 - Exercice 1).</p>			
			
			<?php
				echo 'Bonjour '.$_POST['login'].', il est actuellement '.date('H:i:s').'.';
				echo $GLOBALS['fails'];
			?>
		</section>
	</body>
</html>