<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre;?></title>
    <style>
        .active{
            color: green;
        }
        </style>
</head>
<body>
    <nav> 
    <a href="accueil.php" class="<?php if ($titre=="accueil") {echo "active";}?>">Accueil</a> 
    <a href="contact.php" class="<?php if ($titre=="contact") {echo "active";}?>">Contact</a> 
    <a href="cv.php" class="<?php if ($titre=="Cv") {echo "active";}?>"> Cv</a>
</nav>
    