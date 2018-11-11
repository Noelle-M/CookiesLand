<?php
If (isset($_POST['pseudo'])) 
{
	// on définit une durée de vie de notre cookie (en secondes), donc un an dans notre cas
	$temps = 365*24*3600;

	// on envoie un cookie de nom pseudo portant la valeur de la variable $nom, c'est-à-dire la valeur qu'a saisi la personne qui a rempli le formulaire
	setcookie ("pseudo", $_POST['pseudo'], time() + $temps);
	setcookie ("smarties", $_POST['smarties'], time() + $temps);
	setcookie ("noix", $_POST['noix'], time() + $temps);
	setcookie ("choco", $_POST['choco'], time() + $temps);

	// fonction nous permettant de faire des redirections
	function redirection($url){
		if (headers_sent()){
		print('<meta http-equiv="refresh" content="0;URL='.$url.'">');
		}
		else {
		header("Location: $url");
		}
	}

	// on effectue une redirection vers la page d'accueil
	redirection ('index.php');
}
else {
	echo 'La variable du formulaire n\'est pas déclarée.';
}

If (isset($_POST['pepites'])) 
{
	// on définit une durée de vie de notre cookie (en secondes), donc un an dans notre cas
	$temps = 365*24*3600;

	// on envoie un cookie de nom pseudo portant la valeur de la variable $nom, c'est-à-dire la valeur qu'a saisi la personne qui a rempli le formulaire
	setcookie ("pepites", $_POST['pepites'], time() + $temps);

	// fonction nous permettant de faire des redirections
	function redirection($url){
		if (headers_sent()){
		print('<meta http-equiv="refresh" content="0;URL='.$url.'">');
		}
		else {
		header("Location: $url");
		}
	}

	// on effectue une redirection vers la page d'accueil
	redirection ('index.php');
}
else {
	echo 'La variable du formulaire n\'est pas déclarée.';
}

If (isset($_POST['smarties'])) 
{
	// on définit une durée de vie de notre cookie (en secondes), donc un an dans notre cas
	$temps = 365*24*3600;

	// on envoie un cookie de nom pseudo portant la valeur de la variable $nom, c'est-à-dire la valeur qu'a saisi la personne qui a rempli le formulaire
	setcookie ("smarties", $_POST['smarties'], time() + $temps);

	// fonction nous permettant de faire des redirections
	function redirection($url){
		if (headers_sent()){
		print('<meta http-equiv="refresh" content="0;URL='.$url.'">');
		}
		else {
		header("Location: $url");
		}
	}

	// on effectue une redirection vers la page d'accueil
	redirection ('index.php');
}
else {
	echo 'La variable du formulaire n\'est pas déclarée.';
}

If (isset($_POST['noix'])) 
{
	// on définit une durée de vie de notre cookie (en secondes), donc un an dans notre cas
	$temps = 365*24*3600;

	// on envoie un cookie de nom pseudo portant la valeur de la variable $nom, c'est-à-dire la valeur qu'a saisi la personne qui a rempli le formulaire
	setcookie ("noix", $_POST['noix'], time() + $temps);

	// fonction nous permettant de faire des redirections
	function redirection($url){
		if (headers_sent()){
		print('<meta http-equiv="refresh" content="0;URL='.$url.'">');
		}
		else {
		header("Location: $url");
		}
	}

	// on effectue une redirection vers la page d'accueil
	redirection ('index.php');
}
else {
	echo 'La variable du formulaire n\'est pas déclarée.';
}

If (isset($_POST['choco'])) 
{
	// on définit une durée de vie de notre cookie (en secondes), donc un an dans notre cas
	$temps = 365*24*3600;

	// on envoie un cookie de nom pseudo portant la valeur de la variable $nom, c'est-à-dire la valeur qu'a saisi la personne qui a rempli le formulaire
	setcookie ("choco", $_POST['choco'], time() + $temps);

	// fonction nous permettant de faire des redirections
	function redirection($url){
		if (headers_sent()){
		print('<meta http-equiv="refresh" content="0;URL='.$url.'">');
		}
		else {
		header("Location: $url");
		}
	}

	// on effectue une redirection vers la page d'accueil
	redirection ('index.php');
}
else {
	echo 'La variable du formulaire n\'est pas déclarée.';
}
?>

