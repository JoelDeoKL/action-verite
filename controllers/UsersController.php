<?php


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

        if($_POST["mdp"] == $_POST["confirm"]){
            var_dump($pseudo. " " . $email . " " . $mdp);
            die();
        }

    }
}