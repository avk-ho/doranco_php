<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM test_table');

//Pour récupérer une entrée, 
//on prend la réponse de MySQL et on y exécute fetch() 
// , ce qui nous renvoie la première ligne.*

// On affiche chaque entrée une à une



while ($donnees = $reponse->fetch())
{
 echo $donnees['id'];
 echo '   ||  ';
 echo $donnees['nom'];
 echo '<br>';
}

$reponse->closeCursor(); // Termine le traitement de la requête

//requetes préparer 
//https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-lisez-des-donnees#/id/r-914259
?>