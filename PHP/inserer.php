<?php
include 'cnx.php';

if  (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST')  {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];
    $profil = $_POST['profil'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $passwd_confirmation= $_POST['passwd_confirmation'];
   

   //verification de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'L\'adresse e-mail est invalide.';
        exit;
    }if (!preg_match('/^\+?[0-9]{10,14}$/', $tel)) {
        echo 'Le numéro de téléphone est invalide.';
        exit;}
    // }if (strlen($mot_de_passe) < 16 || !preg_match('/[A-Za-z]/', $mot_de_passe) || !preg_match('/[0-9]/', $mot_de_passe) || !preg_match('/[\W]/', $mot_de_passe)) {
    //     echo 'Le mot de passe doit comporter au moins 8 caractères, y compris des lettres, des chiffres et des caractères spéciaux.';
    //     exit;
    // }

    if ($mot_de_passe !== $passwd_confirmation) {
        echo 'Attention les deux mot de passe  ne correspondent pas.';
        exit;
    }

    // Cryptage du mot de passe avant l'enregistrement dans la base de données
    $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

     // Vérification de l'existence de l'email dans la base de données
     $stmt = $cnx->prepare('SELECT COUNT(*) FROM utilisateur WHERE email = :email');
     $stmt->bindParam(':email', $email);
     $stmt->execute();
     $count = $stmt->fetchColumn();
 
     if ($count > 0) {
         echo 'Cet email existe déjà.';
         exit;
     }
 
     // Insertion des données dans la table utilisateur
     $stmt = $cnx->prepare('INSERT INTO utilisateur (Nom, Prenom, tél, adresse_rue, ville, code_postale, email, mot_de_pass) VALUES (:nom, :prenom, :tel, :adresse, :ville, :code_postal, :email, :mot_de_passe)');
     $stmt->bindParam(':nom', $nom);
     $stmt->bindParam(':prenom', $prenom);
     $stmt->bindParam(':tel', $tel);
     $stmt->bindParam(':adresse', $adresse);
     $stmt->bindParam(':ville', $ville);
     $stmt->bindParam(':code_postal', $code_postal);
     $stmt->bindParam(':email', $email);
     $stmt->bindParam(':mot_de_passe', $mot_de_passe_hash);
     $stmt->execute();
 
     header('Location: connexion.php');
     exit;
 }
?>