<!DOCTYPE HTML>
<html>
    <head>
        <h1>Page des films</h1>
    </head> 
 <form action="ViewFilm.php" method="post">
 <p><input type = "submit" value = "Voir tous les films" name = "Valider" size = "10"/></p>
 <h3>Voir tous les films avec un acteur précis</h3>
 <p>Donnez l'id de l'acteur <br><br><input type="text" name="id_acteur" size="20"/></p>
 <p><input type="submit" value="Valider" size ="10"></p> 
 <h3>Voir tous les films d'une année précise</h3>
 <p>Donnez l'année du ou des films <br><br><input type="text" name="annee" size="20"/></p>
 <p><input type = "submit" value = "Valider" size = "10"></p>
</html>

<?php
session_start();
include('../Models/Film.php');
include('../Models/FilmManager.php');
include('../Controllers/ControllerFilm.php');

if(isset($_POST["Valider"])){
   $filmManager = new FilmManager;
   $film = $filmManager->getFilms();
   foreach($film as $key){ ?>
      <a href="layoutFilm.php?id=<?= $key->getId()?>" ><?= $key->getNom()?><br></a>
   <?php }}

if(!empty($_POST["id_acteur"])){
   $filmManager = new FilmManager;
   $films = $filmManager->getFilmsWith($_POST["id_acteur"]);
   foreach($films as $key){ ?>
      <p><?= "<mark>"."<strong>".$key->getAnnee()."</strong>" . "</mark>" ?></p>
      <p><?= "<strong>Nom </strong> : " . $key->getNom() ?></p>
      <p><?= "<strong>Score</strong> : " . $key->getScore() . "/10"?></p>
      <p><?= "<strong>Nombre de votants</strong> : " . $key->getNbVotants() ?></p>
      <img src="<?= $key->getImage() ?>" height = "160">

   <?php }}

if(!empty($_POST["annee"])){
   $filmManager = new FilmManager;
   $films = $filmManager->getFilmsByYear($_POST["annee"]);
   foreach($films as $key){ ?>
      <p><?= "<mark>"."<strong>".$key->getAnnee()."</strong>" . "</mark>" ?></p>
      <p><?= "<strong>Nom</strong> : " . $key->getNom() ?></p>
      <p><?= "<strong>Score</strong> : " . $key->getScore() . "/10"?></p>
      <p><?= "<strong>Nombre de votants</strong> : " . $key->getNbVotants() ?></p>
      <img src="<?= $key->getImage() ?>" height = "160">

      <?php }}

   
?>





