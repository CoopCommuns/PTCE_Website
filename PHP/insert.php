<?php
include 'cnx.php';

    //recupération des valeurs
// $nom = $_POST['nom'];
// $prenom =  $_POST['prenom'];
// $télephone =  $_POST['tel'];
// $address_rue =  $_POST['address'];
// $ville =  $_POST['ville'];
// $code_postale =  $_POST['codep'];
// $choix =  $_POST['choixtype'];
// $email =  $_POST['email'];
// $mot_de_passe =  $_POST['password'];

//insertion des données
$sql = $cnx->prepare("INSERT INTO TABLE utilisateur  VALUES (NULL,: nom,: prenom,: tel,: address_rue,: ville,: code_postale,: choixtype,: email,: motdepass)");

// $exec = $res->execute(array(":nom"=> $nom,":prenom"=>$prenom,":tel"=>$télephone,":address"=>$address_rue,":ville"=>$ville,":codep"=>$code_postale,":choixtype"=> $choix,":email"=>  $email,":motdepass"=>  $mot_de_passe));

$sql-> bindValue(':nom',  $_POST['nom'], PDO::PARAM_STR);
$sql-> bindValue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
$sql-> bindValue(':tel', $_POST['tel'],PDO::PARAM_STR);
$sql-> bindValue(':address',$_POST['address_rue'],PDO::PARAM_STR);
$sql-> bindValue(':ville', $_POST['ville'],PDO::PARAM_STR);
$sql-> bindValue(':codep', $_POST['codep'] ,PDO::PARAM_STR);
$sql-> bindValue(':choixtype', $_POST['choixtype'],PDO::PARAM_STR );
$sql-> bindValue(':yourEmail', $_POST['email'],PDO::PARAM_STR);
$sql-> bindValue(': yourPassword',  $_POST['password'],PDO::PARAM_STR);

$ok=$sql->execute();

//verification de l'insertion
if($ok){
    echo "Donnée enregistrer avec succès";
}
else{
    echo "Impossible d'enregistrer ces données";
}

?>