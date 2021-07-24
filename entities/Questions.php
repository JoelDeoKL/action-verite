<?php

class Citations{

    private $id_question;
    private $question;
    private $type;
    private $ajouter_par;
    private $date_creation;

    public function __construct($id_question, $question, $type, $ajouter_par, $date_creation){
        $this->id_question = $id_question;
        $this->question = $question;
        $this->type = $type;
        $this->ajouter_par = $ajouter_par;
        $this->date_creation = $date_creation;
    }

    public function getIdQuestioon() {
        return $this->id_question;
    }

    public function getQuestion() {
        return $this->question;
    }

    public function getType() {
        return $this->type;
    }

    public function getAjouter_par() {
        return $this->ajouter_par;
    }

    public function getDate_creation() {
        return $this->date_creation;
    }

    public function setIdQestion($id_question) {
        $this->id_question = $id_question;
    }

    public function setQuestion($question) {
        $this->question = $question;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setAujouter_par($ajouter_par) {
        $this->ajouter_par = $ajouter_par;
    }

    public function setDate_creation($date_creation) {
        $this->date_creation = $date_creation;
    }
}
