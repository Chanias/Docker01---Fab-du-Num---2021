<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    $titre="traitement";
    require_once 'header.php';

// initialisation des variables
$sexe=$_GET['sexe'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$mail=$_GET['mail'];
$message=$_GET['message'];
$subject=$_GET['sujet'];


if (isset($_GET['cgu'])) {
    $cgu=TRUE;
}else{
    $cgu=FALSE;
}
// tests
if ($cgu==TRUE) {
    echo "Bonjour $prenom $nom. Nous allons prendre contact avec vous rapidement.<br>Cordialement";
}
else{
    echo "Merci de bien vouloir cocher les CGU";
}

    $retour = mail('florianesiedlecki@gmail.com', 'Envoi depuis la page Contact', $_GET['message']);
    if ($retour) {
        echo $message;
    }
    
?>
<?php   
    require_once 'footer.php';
?>
