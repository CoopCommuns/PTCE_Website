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
    $email_confirmation = $_POST['email_confirmation'];
    $mot_de_passe = $_POST['mot_de_passe'];

   

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

    if ($email !== $email_confirmation) {
        echo 'Les adresses email ne correspondent pas.';
        exit;
    }

    // Cryptage du mot de passe avant l'enregistrement dans la base de données
    $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    // Insertion des données dans la table utilisateur
    $stmt = $cnx->prepare('INSERT INTO utilisateur (Nom, Prenom, tél, adresse_rue, ville, code_postale, type_profil, email, mot_de_pass) VALUES (:nom, :prenom, :tel, :adresse, :ville, :code_postal, :profil, :email, :mot_de_passe)');
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':ville', $ville);
    $stmt->bindParam(':code_postal', $code_postal);
    $stmt->bindParam(':profil', $profil);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mot_de_passe', $mot_de_passe_hash);
    $stmt->execute();

   
    header('Location: connexion.php');
    exit;
}
?>