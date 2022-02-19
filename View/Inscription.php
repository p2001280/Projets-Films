<?php
    require_once('../Models/Model.php');
    require_once('../Models/User.php');
    require_once('../Controllers/Router.php');
    require_once('../Models/UserManager.php');
    require_once('../Controllers/ControllerInscription.php');
    if(!empty($_POST["email"]) && !empty($_POST["pwd"]) && !empty($_POST["login"])){
        $userManager = new UserManager();
        $Inscription = $userManager->AddUser($_POST["login"], $_POST["pwd"], $_POST["email"]);
    }
?>


<!DOCTYPE HTML>
<html>
    <head>
        <h1>Page d'inscription</h1>
    </head> 
 <form action="Inscription.php" method="post">
 <p>Donnez votre adresse e-mail <br><br><input type="text" name="email" size="20"/></p>
 <p>Créez votre login<br><br><input type="text" name="login" size="20" /></p>
 <p>Créez votre mot de passe<br><br><input type="text" name="pwd" size="20"/></p>
 <p><input type="submit" value="Valider" size ="10"></p>
 <p> Vous possédez déjà un compte ? Connectez-vous ici :<a href = "Connexion.php"> Connexion</a></p>
</form>
</html>

