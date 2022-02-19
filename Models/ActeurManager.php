<?php

require_once('Acteur.php');
class ActeurManager extends Model {
    public function getActeurs(){
        $this->getBdd();
        return $this->getAll('acteur', 'Acteur');
        
    }

    public function getActeursIn($id) {
        $this->getBdd();
        $resultat = $this->requeteSql(    "SELECT acteur.nom, acteur.prenom from acteur JOIN casting on acteur.id = casting.acteur_id
                            JOIN film ON casting.film_id = film.id where casting.film_id = " . $id . ";");
        while($data = $resultat->fetch(PDO::FETCH_ASSOC)){
            $var[] = new Acteur($data);
        }
        return $var;
    }

    public function getActeurById($id) {
        $this->getBdd();
        $resultat = $this->requeteSql("select * from acteur where id = ".$id.";");
        $data = $resultat->fetch(PDO::FETCH_ASSOC);
        $var = new Acteur($data);  
        
        return $var;
    }




}
?>
