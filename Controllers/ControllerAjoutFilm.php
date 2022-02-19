<?php
require_once('View/View.php');
class ControllerAjoutFilm{
    
    private $_view;

    public function __construct($url){
        if(!isset($url) && count($url)>1){
            throw new Exception('Page introuvable');
        }else{
            require_once("../Autre/Session.php");
            verifSession();
            $this->filmAjout();
        }
    }
    private function filmAjout(){
        require('../Models/FilmManager.php');
        require(../'Models/ActeurManager.php');
        // probl : peut pas instancier le manager
        $this->_FilmManager = new FilmManager;
        $this->_ActeurManager = new ActeurManager;

        $Acteurs = $this->_ActeurManager->getActeurs();
   
        $this->_view = new View('FilmAjout');
        $this->_view->generateBase(array("Acteurs" =>$Acteurs));
    }
}