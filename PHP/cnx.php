<?php
// Connexion à la base de données
$dsn = 'mysql:dbname=website_ptce;host=localhost';
$login = 'root';
$motDePasse = 'root';

try {
    $cnx = new PDO($dsn, $login, $motDePasse, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
 
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
