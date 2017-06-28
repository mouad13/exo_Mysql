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


// EXERCICE 6 :

// RECUP
$reponse = $bdd->query('SELECT * FROM shows ORDER BY title ASC');

// AFFICHAGE
while($donnees=$reponse->fetch()){
  echo '<p>Spectacle = ' . $donnees['title'] . ' - artiste : ' . $donnees['performer'].' - data :' .$donnees['date'] .' - à :' .$donnees['startTime'];
}

?>