<?php

$host = 'mysql-smartbike.alwaysdata.net';
$user = 'smartbike';
$database = 'smartbike_cours';
$mdp = 'christophemae';

try {
    $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $mdp);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

?>
