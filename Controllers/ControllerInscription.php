<?php
require_once('../Models/User.php');
require_once('../Models/UserManager.php');

class ControllerInscription {
  private $_InscriptionManager;
  private $_view;

  public function __construct($url) {
        $this->film();
  }

  public function Inscription() {
    $this->_InscriptionManager = new UserManager;
    $Nouveau_inscrit = $this->_InscriptionManager->AddUser();

  }




}

?>