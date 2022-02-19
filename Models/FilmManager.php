<?php

require_once('Film.php');
class FilmManager extends Model {
    public function getFilms(){
        $this->getBdd();
        return $this->getAll('film', 'Film');
    }

    public function setImage($img,$id){
        $this->getBdd();
        $this->requeteSql("UPDATE film SET image = '".$img."' where id = ".$id.";");
    }


    public function addFilm($nom,$annee){
        $this->getBdd();
        $this->requete(   "INSERT INTO Film (nom,annee) VALUES ('".$nom."',".$annee.");"    );
    }

    public function supprFilm($id){
        $this->getBdd();
        $this->delete('Film',$id);
    }

    public function getFilmById($id) {
        $this->getBdd();
        $resultat = $this->requeteSql("select * from film where id = ".$id.";");
    
        $data = $resultat->fetch(PDO::FETCH_ASSOC);
        $var = new film($data);  
        
        return $var;
    }

    public function getFilmsByYear($annee){
        $this->getBdd();
        $resultat = $this->requeteSql("select * from film where annee = ".$annee.";");
        while($data = $resultat->fetch(PDO::FETCH_ASSOC)){
            $var[] = new Film($data);  
        }
        return $var;
    }

    

    public function getFilmsWith($acteur_id) {
        $this->getBdd();
        $resultat = $this->requeteSql(   "SELECT film.nom, film.annee, film.score, film.nbVotants, film.image FROM film JOIN casting ON film.id = casting.film_id  
                           JOIN acteur ON casting.acteur_id = acteur.id where casting.acteur_id = ". $acteur_id . ";");
        while($data = $resultat->fetch(PDO::FETCH_ASSOC)){
            $var[] = new Film($data);  
        }
        return $var;
    }




    public function ModifFilm(){
        $bdd = connectDB();
        $query = $bdd->prepare('UPDATE film SET nom = :nom, annee = :annee, score = :score, 
                              nbVotants = :nbVotants  where id = :film_id');
    }


    public function voterFilm($id){
        $this->getBdd();        
        $this->requete("UPDATE Film
                        SET nbVotants = nbVotants +1 
                        WHERE id =". $id.";");
    }

    
}

?>
