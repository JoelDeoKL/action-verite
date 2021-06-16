<?php

class Users {

    private $pseudo;
    private $email;
    private $mdp;

    public function __contruct($peudo, $email, $mdp){
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->mdp = $mdp;
    }

    public function getPseudo(){
        return this->pseudo;
    }

    public function setPseudo($pseudo){
        $this->pseudo = $pseudo;
    }

    public function getEmail(){
        return this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getMdp(){
        return this->mdp;
    }

    public function setMdp($mdp){
        $this->mdp = $mdp;
    }

}