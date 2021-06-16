<?php


class UsersController extends x_Controller{

    public function compte(){
        echo "OH";
    }

    public function inscription(){
        $this->load->view("inscription");
    }
}