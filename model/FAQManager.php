<?php
require_once '/Users/theomartinez/Cours/APP/WEB/www/model/Manager.php';

class FAQManager extends Manager
{
    private $db;

    public function __construct()
    {
        $this->db = $this->dbConnect();
    }

    public function getQuestions(){
        $req = $this->db->prepare('SELECT question FROM FAQ');
        $req->execute();

        $questions = array();
        foreach ($req as $row){
            array_push($questions,$row['question']);
        }

        return $questions;
    }

    public function getRep(){
        $req = $this->db->prepare('SELECT answer FROM FAQ');
        $req->execute();

        $answer = array();
        foreach ($req as $row){
            array_push($answer,$row['answer']);
        }

        return $answer;
    }

    public function newFaq($question,$reponse){
        $new = $this->db->prepare("INSERT INTO FAQ (id_question, question, date, answer) VALUES (NULL, :question, CURRENT_DATE(), :reponse)");
        $new->execute(array(
            'question' => $question,
            'reponse' => $reponse
        ));
    }
}