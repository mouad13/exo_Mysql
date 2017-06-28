<?php
// on se connecte à mysql :
try  
{
	$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'azerty1143');
}
// en cas d'erreur on affiche un message :
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}


// EXERCICE 1 :

// RECUP
$reponse = $bdd->query('SELECT * FROM clients');

// AFFICHAGE
while($donnees=$reponse->fetch()){
  echo '<p>Nom = ' . $donnees['lastName'] . ' - ' . $donnees['firstName'];
}


// EXERCICE 2 :

// RECUP
$reponse = $bdd->query('SELECT * FROM showTypes');

// AFFICHAGE
while($donnes=$reponse->fetch()){
  echo '<p>Types = ' . $donnes['type'];
}


?>