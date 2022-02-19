<?php 
require_once("../Models/FilmManager.php");

if(isset($_GET['idFilmVote'])){
    $id = $_GET['idFilmVote'];
    $FilmManager = new FilmManager;
    $FilmManager->voterFilm($id);
}
header('location: ../View/ViewFilm.php');
?>