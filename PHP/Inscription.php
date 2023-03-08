<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<?php include 'carrousel.php'; ?>
<form action="inserer.php" method="post">
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom" required><br>

  <label for="prenom">Prénom :</label>
  <input type="text" id="prenom" name="prenom" required><br>


  <label for="tel">Téléphone :</label>
  <input type="tel" id="tel" name="tel" minlength="10" maxlength="10" required><br>

  <label for="adresse">Adresse :</label>
  <input type="text" id="adresse" name="adresse" required><br>

  <label for="ville">Ville :</label>
  <input type="text" id="ville" name="ville" required><br>