<?php
require_once('Model.php');
class Film extends Model {
    private $_id;
    private $_nom;
    private $_annee;
    private $_score;
    private $_nbVotants;
    private $_image;
    //constructeur
    public function __construct(array $data){
        $this->hydrate($data);
    }
    //hydratation !! 
    public function hydrate(array $data){
        foreach($data as $key => $value){
            $method = 'set'.ucfirst($key);
            if (method_exists($this,$method))
                $this->$method($value);
            
        }
    }
    //setteurs
    public function setId($id){
        $id = (int) $id;
        if($id > 0){
            $this->_id = $id;
        }
    }
    public function setNom($nom){
        $nom = (string) $nom;
        if(is_string($nom)){
            $this->_nom = $nom;
        }
    }
    public function setAnnee($annee){


        $this->_annee = $annee;

    }
    public function setScore($score){

            $this->_score = $score;

    }
    public function setNbvotants($nbvotants){

            $this->_nbVotants = $nbvotants;

    }

    public function setImage($image){

        $this->_image = $image;

    }

    //getteurs

    public function getId(){
        return $this->_id;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getAnnee(){
        return $this->_annee;
    }
    public function getScore(){
        return $this->_score;
    }
    public function getNbVotants(){
        return $this->_nbVotants;
    }
    public function getImage(){
        return $this->_image;
    }
}