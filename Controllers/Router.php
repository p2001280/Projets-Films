<?php


class Router{
    private $_ctrl;
    private $_view;

    public function routeReq(){
        try{
            //chargement auto des classes
            spl_autoload_register(function($class){
                
                require('Models/'.$class.'.php');

            });
            $url = '';
            // Le controlleur est inclus selon l'action de l'utilisateur

            if(isset($_GET['url'])){

                $url = explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL));
                
                
                
                    
                
                $controller = ucfirst(strtolower($url[0]));
                $controllerClass = "Controller".$controller;
                $controllerFile = "Controllers/".$controllerClass.".php";

                if(file_exists($controllerFile)){
                    require_once($controllerFile);
                    $this->_ctrl = new $controllerClass($url[0]);
                }
                else{
                    echo $controllerFile;
                    echo " erreur page introuvable";

                }
            }else{
                
                require_once('Controllers/ControllerConnexion.php');
                $this->_ctrl = new ControllerConnexion($url);
                
                
            }
            //gestion des erreurs
        }catch(Exception $e){
            $errorMsg= $e->getMessage();
            echo $e;
        }
    }
}