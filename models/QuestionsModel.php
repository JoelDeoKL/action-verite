<?php

require_once("entities/Questions.php");
require_once("models/x_models/MainModel.php");

class QuestionsModel extends MainModel{

    public function enregistrer(Questions $question){
        $query = "INSERT INTO questions SET question=?, type=?, ajouter_par=?";
        $sql = self::pdo()->prepare($query);

        if($sql->execute([$question->getQuestion(), $question->getCategorie(), $question->getAuteur(), $question->getAjouter_par()])){
            return true;
        }
        return false;
    }

    public function afficher(Questions $question){

        $query = "SELECT * FROM questions WHERE ajouter_par=?";
        $sql = self::pdo()->prepare($query);

        $sql->execute([$question->getAjouter_par()]);
        $donnees = $sql->fetchAll();

        return $donnees;
    }

    public function affichage(Questions $question){
        $query = "SELECT * FROM questions WHERE type=?";
        $sql = self::pdo()->prepare($query);

        $sql->execute([$question->getType()]);
        $donnees = $sql->fetchAll();
        return $donnees;
    }

    public function affiche(Questions $question){
        $query = "SELECT * FROM questions LIMIT 10";
        $sql = self::pdo()->prepare($query);

        $sql->execute();
        $donnees = $sql->fetchAll();
        return $donnees;
    }
}
