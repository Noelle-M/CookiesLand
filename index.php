<?php
session_start();
?>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/css.css">

<title>Cookies</title>
	</head>
<body>

<?
// on teste la déclaration de notre cookie
if (isset($_COOKIE['pseudo'])) {
	echo '<h1>Salutation '.$_COOKIE['pseudo'].' !</h1>';
	echo '<p><a href="logout.php">Se déconnecter</a></p>';
}
else 
{
	echo '<h1>Bienvenu à CookieLand !</h1><br />';
	echo 'Pour acceder aux cookies, merci de saisir ton pseudo';

	// si le cookie n'existe pas, on affiche un formulaire permettant au visiteur de saisir son nom
	echo '<form action="traitementCookie.php" method="post">';
	echo '<input type = "texte" name = "pseudo"><br /><br/>';
	echo '<input type = "submit" value = "Envoyer">';
}
?>
	<hr>
<?php
		
    if (isset($_COOKIE['pseudo'])) 
		 {
			echo
			'<div class="row">
					<div class="col-3">
					<h4 class="text-success">Pépites de chocolat</a></h4>
					<p>Combien en veux-tu ?</p>
						<div class="card card-pepites px-5 pt-5 pb-5 text-align-center">
						<form class="form" method="post" action="traitementCookie.php">
							<label for="pepites"></label><br/>
								 <select name="pepites" class="form-control" id="exampleFormControlSelect1">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
								 </select>
								 </div>
								 <input type="submit" value="Ajouter" class="btn btn-outline-success mt-2 ml-5 mb-5">
						</div>
						</form>
						
						<div class="col-3">
					<h4 class="text-success">Smarties</a></h4>
					<p>Combien en veux-tu ?</p>
						<div class="card card-smarties px-5 pt-5 pb-5 text-align-center">
						<form class="form" method="post" action="traitementCookie.php">
							<label for="smarties"></label><br/>
								 <select name="smarties" class="form-control" id="exampleFormControlSelect1">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
								 </select>
								 </div>
								 <input type="submit" value="Ajouter" class="btn btn-outline-success mt-2 ml-5 mb-5">
						</div>
						</form>
						
						<div class="col-3">
					<h4 class="text-success">Noix de pécan</a></h4>
					<p>Combien en veux-tu ?</p>
						<div class="card card-noix px-5 pt-5 pb-5 text-align-center">
						<form class="form" method="post" action="traitementCookie.php">
							<label for="noix"></label><br/>
								 <select name="noix" class="form-control" id="exampleFormControlSelect1">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
								 </select>
								 </div>
								 <input type="submit" value="Ajouter" class="btn btn-outline-success mt-2 ml-5 mb-5">
						</div>
						</form>
						
						<div class="col-3">
					<h4 class="text-success">3 chocolats</a></h4>
						<p>Combien en veux-tu ?</p>

						<div class="card card-choco px-5 pt-5 pb-5 text-align-center">
						<form class="form" method="post" action="traitementCookie.php">
							<label for="choco"></label><br/>
								 <select name="choco" class="form-control" id="exampleFormControlSelect1">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
								 </select>
								 </div>
								 <input type="submit" value="Ajouter" class="btn btn-outline-success mt-2 ml-5 mb-5">
						</div>
						</form>
						
					</div>'
				;
		 
	?>
	<div class="block_page">
	<?php
		if (isset($_COOKIE['pepites'])) {
			echo '<p>Tu as '.$_COOKIE['pepites'].' cookie(s) Pépites de chocolat dans ton panier</p>';
			}
		 else
		 {$_COOKIE['pepites'] = 0;}
		 
		if (isset($_COOKIE['smarties'])) {
			echo '<p>Tu as '.$_COOKIE['smarties'].' coockie(s) Smarties dans ton panier</p>';
			 }
		 else
		 {$_COOKIE['smarties'] = 0;}
	
		if (isset($_COOKIE['noix'])) {
			echo '<p>Tu as '.$_COOKIE['noix'].' coockie(s) Noix de pécan dans ton panier</p>';
			}
		 else
		 {$_COOKIE['noix'] = 0;}

		if (isset($_COOKIE['choco'])) {
			echo '<p>Tu as '.$_COOKIE['choco'].' coockie(s) 3 chocolats dans ton panier</p>';
			}
		 else
		 {$_COOKIE['choco'] = 0;}
	
	$var_sum = $_COOKIE['pepites'] + $_COOKIE['smarties'] + $_COOKIE['noix'] + $_COOKIE['choco'];
	if($var_sum > 0)
	{	 
		echo '<p>Ton panier contient actuellement ' . $var_sum . ' Cookie(s)</p><br/>';
		echo '<p><a href="card.php">Visualiser / Supprimer mon panier</a></p>';
	}
			 else
			 {
				 echo '<h3>Ton panier est vide !</h3>';
			 }
}
	
?>
		
		
<!-- compyeur de vues -->
		
<?php
$monfichier = fopen('compteur.txt', 'r+');
 
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)

$pages_vues += 1; // On augmente de 1 ce nombre de pages vues

fseek($monfichier, 0); // On remet le curseur au début du fichier

fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
 
fclose($monfichier);// et on ferme
 
echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?>	
		
<!-- // compteur -->
		
		
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
