<?php
    include('../Controllers/Router.php');
    include('../Models/Model.php');
    include('../Models/Film.php');
    include('../Models/FilmManager.php');
    $filmManager = new FilmManager; 
    $film = $filmManager->getFilmById(1); 
    $img = $film->getImage();
    var_dump($film);
    var_dump($img);
    //J'ai fait cette page pour tester l'affichage d'un film avec son image

?>

