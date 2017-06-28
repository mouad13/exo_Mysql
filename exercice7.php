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


// EXERCICE 7 :

// RECUP
$reponse = $bdd->query('SELECT * FROM clients ');

// RECUP
$rep = $bdd->query('SELECT * FROM clients INNER JOIN cards ON cards.cardNumber=clients.cardNumber WHERE cardTypesId=1');

$fidel = [];

// AFFICHAGE
while($donnees=$rep->fetch()){
	array_push($fidel, $donnees['cardNumber']);
}

// var_dump($fidel);

while($donnees=$reponse->fetch()){
  echo '<p>Nom : ' . $donnees['lastName'] . ' - Prenom : ' . $donnees['firstName'] . ' - Date de naissance :' .$donnees['birthDate'];

  if (in_array($donnees['cardNumber'], $fidel)){
  	echo 'Carte de fidelite : oui' . '- Numéro de carte :' . $donnees['cardNumber'];
  }
  else {
  	echo 'Carte de fidelite : non';
  }
}
?>