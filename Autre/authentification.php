<?php 

    require('../Models/Model.php');
    require('../Models/UserManager.php');

        if(isset($_POST['login']) && isset($_POST['pwd'])){

            $UserManager = new UserManager();
            $login = $_POST['login'];
            $pwd = $_POST['pwd'];
            if($UserManager->verifPwd($login,$pwd) == true){

                require('Session.php');
                lanceSession($login,$pwd);
                header('location: ../View/ViewFilm.php');
            }else{

                header('location: ../View/Connexion.php?err=1');
            }
    }
?>