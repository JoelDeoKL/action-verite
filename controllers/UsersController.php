<?php

require_once("entities/Users.php");

class UsersController extends x_Controller{

    public function compte(){
        echo "OH";
    }

    public function inscription(){
        if(isset($_POST["inscrire"])){
            $this->inscrire();
        }
        $this->load->view("inscription");
    }

    public function inscrire(){
        $pseudo = $_POST["pseudo"];
        $email = $_POST["email"];
        $mdp = password_hash($_POST["mdp"], PASSWORD_BCRYPT);

        $users = new Users(null, $pseudo, $email, $mdp);
        $connexion = new UsersModel();

        if($_POST["mdp"] == $_POST["confirm"]){
            if($connexion->check($users)){
                $connexion->inscription();
            }else{
                var_dump("NON");
                die();
            }
        }else{
            var_dump("NAH");
            die();
        }
    }
}