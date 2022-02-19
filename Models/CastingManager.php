<?php

require_once('Acteur.php');
class CastingManager extends Model {
    public function getCasting(){
        $this->getBdd();
        return $this->getAll('casting', 'Casting');
        
    }

    public function getBy($film_id, $acteur_id){
        $this->getBdd();
        $resultat = $this->requeteSql(   "SELECT film.nom, film.annee, film.score, film.nbVotants FROM film JOIN casting ON film.id = casting.film_id  
                           JOIN acteur ON casting.acteur_id = acteur.id where casting.acteur_id = ". $acteur_id . ";")
    }
}
?>
