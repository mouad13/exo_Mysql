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


// EXERCICE 4 :

// RECUP
$reponse = $bdd->query('SELECT * FROM clients INNER JOIN cards ON cards.cardNumber=clients.cardNumber WHERE cardTypesId=1');

// AFFICHAGE
while($donnees=$reponse->fetch()){
  echo '<p>Nom : ' . $donnees['lastName'] . ' - Prenom : ' . $donnees['firstName'];
}

?>