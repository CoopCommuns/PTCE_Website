<?php 
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();

include 'cnx.php';

if (isset($_POST['email']) && isset($_POST['mot_de_pass'])){
    try {
        $sql = $cnx->prepare('SELECT * FROM utilisateur WHERE email=:email');
        $sql->bindParam(':email', $_POST['email']);
        $sql->execute();
        
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $hash = $row['mot_de_pass'];
        if (password_verify($_POST['mot_de_pass'], $hash)){
            $_SESSION['id_utilisateur']   = $row['id_utilisateur'];
            $_SESSION['email'] = $row['email'];
            if ($user['profil'] == 'Admin') {
                header('location: Admin.php');      
              }else{
                header('location: Entreprise.php');
              }
            header('Location: Entreprise.php');
            exit();
        }else{
            echo "Email ou mot de passe incorrect .";
        }
    }catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }
}else{
    echo "";
}


?>