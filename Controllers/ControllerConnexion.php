<?php
require_once('../View/View.php');
class ControllerConnexion{
    private $_UserManager;
    private $_view;

    public function __construct($url){
        if(!isset($url) && count($url)>1){
            throw new Exception('Page introuvable');
        }else{
            $this->SessionLance();
        }
    }
    private function SessionLance(){
        require('../Models/User.php');
        require('../Models/UserManager.php');

        $this->_UserManager = new UserManager();
        //UserManager->verif(login)
        if(isset($_POST['login']) && isset($_POST['pwd'])){
            if($this->_UserManager->verifPwd($_POST['login'],$_POST['pwd'])){
                require_once("../Autre/Session.php");
                lanceSession($_POST['login'],$_POST['pwd']);
                header("location:../View/ViewFilm.php");
            }else {
                $this->_view = new View('Connexion.php');
                $err=1;
                $this->_view->generateBase(array("err"=>$err));
            }

        }else{

            $this->_view = new View('viewFilm.php');
            $this->_view->generateBase(array());
        }



        
    }
}