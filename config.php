
<?php
$DB_serveur = '$_SERVER['SERVER_NAME']'; // Nom du serveur
$DB_utilisateur = '$_COOKIE['login']'; // Nom de l'utilisateur de la base
$DB_mdp = '$_COOKIE['mdp']'; // Mot de passe pour accèder à la base
$DB_base = 'authentif_user'; // Nom de la base

$connection = mysql_connect($DB_serveur, $DB_utilisateur, $DB_motdepasse) // On se connecte au serveur
or die (mysql_error().' sur la ligne '.__LINE__);

mysql_select_db($DB_base, $connection) // On se connecte à la BDD
or die (mysql_error().' sur la ligne '.__LINE__);
?>
