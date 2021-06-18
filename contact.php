<?php
    $titre="contact";
    require_once 'header.php';
?>
<body>
<form action="merci1.php" form method="GET" >
    
    <div>
        <label for="prénom">Prénom :</label>
        <input type="text" id="name" name="prenom">
    </div>
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="name" name="nom">
    </div>
    <div>
        <input type="radio" id="male" name="sexe" value="homme">
        <label for="male">Homme</label><br>
        <input type="radio" id="female" name="sexe" value="femme">
        <label for="female">Femme</label><br>
    </div>
    <div> 
        <label type="sujet"> Sujet :</label>
        <input type="text" name="sujet">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="mail">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="message"></textarea>
    </div>
    En validant ce formulaire, vous acceptez d’être contacté <input type="checkbox" name="cgu">
        <input type="submit" value="valider">
    
</form>
<?php
    require_once 'footer.php';
?>
</body>
</html>