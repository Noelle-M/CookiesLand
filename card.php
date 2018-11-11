<?php
session_start();
?>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/css.css">

<title>Card</title>
	</head>
	
<body>

<?php
// on teste la déclaration de notre cookie
if (isset($_COOKIE['pseudo'])) {
	echo '<h1>Salutation '.$_COOKIE['pseudo'].' !</h1>'
		. 'Voici ton panier';
	echo '<br/><br/><a href="logout.php">Se déconnecter</a> - <a href="index.php">Retour</a>';
	
	
}
else {
	 header('Location: coockie.php');
  exit();;
}
	
?>	
<hr>
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
		echo '<p><a href="supppanier.php">Vider mon panier</a></p>';
	}
			 else
			 {
				 echo 'Ton panier est vide !';
			 }
	
	
?>
		</div>
	</body>
</html>