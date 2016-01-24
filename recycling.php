<?php
$mail=$_POST["mail"];
$commentaire=$_POST["commentaire"];
$bdd = new PDO('mysql:host=localhost;dbname=RECLYCLING;charset=utf8', 'root', 'passe');
$mail=$bdd->quote($_POST["mail"]);
$commentaire=$bdd->quote($_POST["commentaire"]);
 $requete = "INSERT INTO lendingpage(id,mail,commentaire)VALUES(NULL,$mail,$commentaire)";

    $resultats = $bdd->exec($requete);
header('Location: index.html');
?>