<?php
include('../Models/Model.php');
include('../Models/UserManager.php');
include('../Controllers/ControllerConnexion.php');
include('../Autre/Session.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page de connexion</title>
</head>
<body>
    <div>
        <form method="POST" action="../autre/authentification.php">
            <div >
                <span> Identifiant :</span>
            <input name="login" type = "text" class="textInput" id="login">
            <span class="label">mot de passe :</span>
            <input name="pwd" type = "password" class="textInput" id="pwd">
            <button type ="submit" name = 'Valider'>Connexion</button>
            <p> S'inscrire ci-contre :  <a href ="Inscription.php" >Inscription</a>
            </div>
            <?php if(isset($_GET['err'])){
                     echo "<span style='color:red;'>login ou mdp invalide </span>" ;
                  }
            ?>
        </form>
    </div>
</body>
</html>