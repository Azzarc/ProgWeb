<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../Global/style.css" />
		<title>Programmation Web</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header>
			<p>Programmation Web</p>
		</header>
				
		<!-- Le contenu (1 seule section suffit ici) -->		
		<section>
			<?php
				$foo = true;

				if($_GET['err']==true){
					echo 'Login ou mdp invalide !'.'<br/>';
					#echo $_COOKIE['fails'].'<br/>';
					echo $_GET['fail'];
					
				}
				if ($_COOKIE['fails']>3)
				{	
					echo "Vous avez depassé le nombre d'essais maximum !";
					$foo = false;
				}

				if($foo==true){

				echo "<p>Veuillez vous identifier pour accéder au site</p>";
				echo '<form method="POST" action="./accueil.php">
				<p>	<label for="login">Login</label>
					<input id="login" name="login" type="text"autofocus/>
				</p>
				<p>	<label for="mdp">Mot de passe</label>
					<input id="mdp" name="mdp" type="password"/>
				</p>
				<p>	
					<button type="submit">Connnexion</button> 
				</p>
				</form>';
				}
			?>
		</section>
	</body>
</html>