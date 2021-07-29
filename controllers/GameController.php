<?php

require_once("entities/Questions.php");
require_once("models/QuestionsModel.php");
require_once("models/x_models/MainModel.php");

Class GameController extends x_Controller{

    public function compte(){
        if(isset($_POST["envoyer"])){
            $this->ajouter();
        }
        $pseudo = $_SESSION["nom"];
        $questions = new Questions(null, null, null, $pseudo, null);
        $data = new QuestionsModel();

        $donnees = $data->afficher($questions);
        $this->load->view("compte", compact("questions"));
    }

    public function choix(){
        $this->load->view("choix");
    }

    public function action(){
        echo "good";
    }

    public function verite(){
        echo "goodhe";
    }

    public function ajouter(){
        echo "ajouter_action";
    }

}
