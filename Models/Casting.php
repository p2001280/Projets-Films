<?php
require_once('Model.php');
class Casting extends Model {
  public  $film_id,
          $acteur_id;

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


  public function setFilm_id($film_id){
     $film_id = (int) $film_id;

     if ($film_id > 0) {
       $this->film_id = $film_id;
     }
  }

  public function setActeur_id($acteur_id) {
      $acteur_id = (int) $acteur_id;

      if($acteur_id > 0){
          $this->acteur_id = $acteur_id;
      }
  }
}
?>