<!DOCTYPE HTML>
<html>
    <head>
        <h1>Page d'acteurs</h1>
    </head> 
 <form action="ViewActor.php" method="post">
 <h3>Voir tous les acteurs</h2>
 <p><input type = "submit" value = "Voir tous les acteurs" name = "Valider" size = "10"/></p>
 <h3>Voir un acteur donné</h3>
 <p>Donnez l'id du film <br><br><input type="text" name="id_film" size="20"/></p>
 <p><input type="submit" value="Valider" size ="10"></p>
</form>
</html>

<?php
include('../Models/Acteur.php');
include('../Models/ActeurManager.php');
include('../Controllers/ControllerActeur.php');
include('../Controllers/Router.php');

if(isset($_POST["Valider"])){
   $acteurManager = new ActeurManager;
   $acteurs = $acteurManager->getActeurs();
   foreach($acteurs as $key){ ?>
      <a href = "layoutActeur.php?id= <?= $key->getId()?>"><?= $key->getNom() ?></a><br>
   <?php }}

if(!empty($_POST["id_film"])){
   $acteurManager = new ActeurManager;
   $acteurs = $acteurManager->getActeursIn($_POST["id_film"]);
   foreach($acteurs as $key){ ?>
   <p><?= $key->getNom() ?></p>
   <p><?= $key->getPrenom() ?></p>
   <?php }}

?>




