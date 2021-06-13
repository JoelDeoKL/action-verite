<?php

require_once("models/x_models/MainModel.php");

Class GameController extends x_Controller{

    public function choix(){
        $this->load->view("choix");
    }

    public function action(){
        echo "good";
    }

    public function verite(){
        echo "goodhe";
    }
}

