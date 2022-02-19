<!DOCTYPE HTML>
<html>
    <body>
        <h1>
            Informations sur un film précis
</h1>
</body>
</html>

<?php
        include('../Models/FilmManager.php');
        include('../Controllers/ControllerFilm.php');
        include('../Controllers/Router.php');
        $filmManager = new FilmManager;
        $film = $filmManager->getFilmById($_GET["id"]);
?>
        <p><?= "<mark>" . "Informations sur le film : " . $film->getNom() . "</mark>"?><br></p>
        <p><?= "Année : " . $film->getAnnee() ?><br></p>
        <p><?= "Score : " . $film->getScore() . "/10" ?><br></p>
        <p><?= "Nombre de votants : " . $film->getNbVotants() ?><br></p>
        <img src="<?= $film->getImage() ?>" height = "160">


<form action="../Autre/upload.php?id=<?=$_GET["id"]?>"  method="POST" enctype="multipart/form-data">
   <h3> Ajoutez ou changez la jaquette du film ci-dessous </h3>
   <input type="file" name="file"></input>
   <button type="submit" name="submit">upload</button>

 </form>


<? 









