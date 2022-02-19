<?php
require_once('../Models/ActeurManager.php');
require_once('../Models/Acteur.php');
class ControllerActeur {
  private $_acteurManager;
  private $_view;

  public function __construct($url) {
        $this->acteur();
  }

  public function acteur() {
    $this->_acteurManager = new ActeurManager;
    $tousLesActeurs = $this->_acteurManager->getActeurs();

    foreach($tousLesActeurs as $a){//falcutatif, c'est pour tester : 0 ou 1
      echo $a->getNom()
      . $a->getPrenom();
    }

  }
  
  

}

?>