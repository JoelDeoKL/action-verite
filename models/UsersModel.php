<?php

require_once("entites/Users.php");
require_once("x_models/MainModel.php");

class UsersModel extends MainModel{

    public function check(Users $users){
        $query = "SELECT * FROM users WHERE email=?";
        $sql = self::pdo()->prepare($query);

        $sql->execute([$users->getEmail()]);

        while($data = $sql->fetch()){
            if(isset($data["email"]) && isset($data["pseudo"])){
                var_dump($data["pseudo"]. " " . $data["email"] . " " . $data["mdp"]);
                die();
            }else{
                var_dump("NON");die();
            }
        }

    }
    public function inscription(){

    }

}