<?php

require_once("entities/Users.php");
require_once("x_models/MainModel.php");

class UsersModel extends MainModel{

    public function check(Users $users){
        $query = "SELECT * FROM users WHERE email=?";
        $sql = self::pdo()->prepare($query);

        $sql->execute([$users->getEmail()]);

        while($data = $sql->fetch()){
            if(isset($data["email"]) && isset($data["pseudo"])){
                var_dump($data["pseudo"]);die();
                return false;
            }else{
                return true;
            }
        }

    }
    public function inscription(Users $users){
        $query = "INSERT INTO users SET pseudo=?, email=?, mdp=?";
        $sql = self::pdo()->prepare($query);

        if($sql->execute([$users->getPseudo, $users->getEmail, $users->mdp])){
            session_start();
            $_SESSION["nom"] = $users->getPseudo;
            header("Location : index.php?kay=x-game.compte");
        }
        return false;
    }

}