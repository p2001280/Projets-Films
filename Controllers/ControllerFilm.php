<?php
require_once('../Models/FilmManager.php');
require_once('../Models/Film.php');
class ControllerFilm {
  private $_filmManager;
  private $_view;

  public function __construct($url) {
        $this->film();
  }

  public function film() {
    $this->_filmManager = new FilmManager;
    $tousLesFilms = $this->_filmManager->getFilms();

    foreach($tousLesFilms as $f){
      echo $f->getNom() . $f->getAnnee()
       . $f->getScore() . $f->getNbVotants() . $f->getImage();
  
    }
  }




}

?>