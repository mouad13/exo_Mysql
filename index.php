<?php
// on se connecte à mysql :
try  
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'azerty1143');
}
// en cas d'erreur on affiche un message :
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

?>


<?php
$nom = lolo;
$email = totolkn;
$password = dede;

// CREER
$req = $bdd->prepare('INSERT INTO koko(nom, email, password) VALUES(:nom, :email, :password)');
$req->execute(array(
    'nom' => $nom,
    'email' => $email,
    'password' => $password,
    ));

// SUPR
$bdd->exec('DELETE FROM koko WHERE nom = \'lolo\'');

// RECUP
$reponse = $bdd->query('SELECT * FROM koko');

// AFFICHAGE
while($donnees=$reponse->fetch()){
  echo '<p>Nom user= ' . $donnees['nom'] . ' - Email user= ' . $donnees['email'];
}

?>


<?php

// MODIF
$bdd->exec('UPDATE koko SET nom = \'rifai\' WHERE nom = \'jojo\''); 
?>