<?php

require_once("models/x_models/MainModel.php");

Class GameController extends x_Controller{

    public function compte(){

        $this->load->view("compte");
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
