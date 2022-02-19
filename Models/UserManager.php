<?php
require_once('User.php');
class UserManager extends Model {
    public function getUsers(){
        $this->getBdd();
        return $this->getAll('user','User');
    }



    public function AddUser($login, $pwd, $email){
        $bdd = $this->getBdd();
        $query = $bdd->prepare('INSERT INTO user (login, pwd, email) VALUES(?, ?, ?)');
        $query->execute(array($login, $pwd, $email)); 
    }

    public function verifPwd($login,$pwd){
        $this->getBdd();
        $requeteLogin = "select * from user where login = '".$login."' and pwd = '".$pwd."';";
        $resultatRequeteLogin = $this->requeteSql($requeteLogin);
        $resultatRequeteLogin->fetch();
        $nbrLignes = $resultatRequeteLogin->rowCount();
        if($nbrLignes == 1){
            return true;
        }
        else{
            return false;
        }
        
    }

}
?>