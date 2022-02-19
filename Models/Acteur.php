<?php
require_once('Model.php');
class Acteur extends Model {
  public $id,
          $nom,
          $prenom;

  public function __construct(array $data) {
    $this->hydrate($data);
  }

  public function hydrate(array $data) {
    foreach($data as $key => $value) {
      $method = 'set' . ucfirst($key);

      if(method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

  
  public function prenomValide() {
    return !empty($this->prenom);
  }

  public function nomValide() {
    return !empty($this->nom);
  }
  
  public function getNom(){
    return $this->nom;
  }

  public function getPrenom(){
    return $this->prenom;
  }

  public function getId(){
    return $this->id;
  }

  public function setId($id) {
    $id = (int) $id;
    
    if ($id > 0) {
      $this->id = $id;
    }
  }
  
  public function setPrenom($prenom) {

      $this->prenom = $prenom;

  }

  public function setNom($nom) {
    if (is_string($nom)) {
      $this->nom = $nom;
    }
  }


}
?>