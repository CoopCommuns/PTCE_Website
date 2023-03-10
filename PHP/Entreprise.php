<?php
session_start();

if (!isset($_SESSION['id_utilisateur'])) {
    header('Location: connexion.php');
    exit;
}
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

// Récupération des informations de l'utilisateur
include 'cnx.php';
$sql = $cnx->prepare('SELECT * FROM utilisateur WHERE id_utilisateur=?');
$sql->execute([$_SESSION['id_utilisateur']]);

$user = $sql->fetch();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page d'accueil</title>
</head>
<body>
    <h1>Bienvenue <?php echo $user['Nom']; ?> !</h1>
    <p>Vous êtes connecté en tant qu' <?php echo $user['email']; ?>.</p>
    <a href="deconnexion.php">Se déconnecter</a>
</body>
</html>
