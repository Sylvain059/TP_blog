<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Mon blog</h1>
	<p>Derniers articles...</p>
		<!-- connexion à la base données -->
	<?php 
	try

{

    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'Skaoune88');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}
	 ?>
</body>
</html>