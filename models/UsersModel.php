<?php

require_once("entities/Users.php");
require_once("models/x_models/MainModel.php");

class UsersModel extends MainModel{

    public function check(Users $users){

        $query = "SELECT * FROM users WHERE email=?";
        $sql = self::pdo()->prepare($query);

        $sql->execute([$users->getEmail()]);

        while ($data = $sql->fetch())
        {
            if(isset($data['email']) && isset($data['pseudo'])){
                //echo "true"; die();
                return true;
            }
        }
        //echo "false"; die();
        return false;
   }

    public function inscription(Users $users){

        $query = "INSERT INTO users SET pseudo=?, email=?, mdp=?";
        $sql = self::pdo()->prepare($query);

        if($sql->execute([$users->getPseudo(), $users->getEmail(), $users->getMdp()])){
            session_start();
            $_SESSION['nom'] = $users->getPseudo();
            header('location: index.php?kay=x-users.compte');
        }
        return false;
    }

    public function connexion(){
        $this->load->model("UsersModel");
        $email = $_POST["email"];
        $psw = $_POST["mdp"];

        $mdp = password_hash($psw, PASSWORD_BCRYPT);

        $users = new Users(null, null, $email, $mdp);
        $connexion = new UsersModel();

        if($connexion->check($users)){
            if($connexion->connexion($users)){
                header('location: index.php?kay=x-users.compte');
            }
        }else{
            header('Location: index.php?kay=x-users.connect');
        }
    }
}