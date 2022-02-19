<!DOCTYPE HTML>
<html>
    <body>
        <h1>
            Informations sur un acteur donné
</h1>
</body>
</html>

<?php
        include('../Models/ActeurManager.php');
        include('../Controllers/ControllerActeur.php');
        include('../Controllers/Router.php');
        $acteurManager = new ActeurManager;
        $acteur = $acteurManager->getActeursIn($_GET["id"]);
?>
        <p><?= "<mark>" . "Informations sur l'acteur : " . $acteur->getNom() . "</mark>"?><br></p>
        <p><?= "Nom : " . $acteur->getNom() ?><br></p>
        <p><?= "Prenom : " . $acteur->getNom() ?><br></p>



<? 










