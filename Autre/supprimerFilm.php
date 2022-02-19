<?php 
require_once("../Models/FilmManager.php");

if(isset($_GET['idFilmSuppr'])){
    $id = $_GET['idFilmSuppr'];
    $FilmManager = new FilmManager();
    $FilmManager->supprFilm($id);
    header('location: ../Films');

    
}

?>