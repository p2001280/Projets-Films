<?php
class User {
    private $id;
    private $login;
    private $pwd;
    private $email;

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
            $this->_identifiant = $id;
        }
    }
    public function setLogin($login){
        $login = (string) $login;
        if(is_string($login)){
            $this->login = $login;
        }
    }
    public function setPwd($pwd){


        $this->pwd = $pwd;

    }
    public function setEmail($email){
        $email = (string) $email;
        if(is_string($email)){
            $this->email = $email;
        }
    }

    //getteurs

    public function id(){
        return $this->id;
    }
    public function login(){
        return $this->login;
    }
    public function pwd(){
        return $this->pwd;
    }
    public function email(){
        return $this->email;
    }

}