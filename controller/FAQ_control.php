<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/FAQManager.php';

$faq = new FAQManager();

if (isset($_GET['request']) && $_GET['request'] == "faq"){
    $questions = $faq->getQuestions();
    $questions = implode('|',$questions);
    $rep = $faq->getRep();
    $rep = implode('|',$rep);

    $faq = array();
    array_push($faq,$questions);
    array_push($faq,$rep);
    $faq = implode('¬',$faq);

    echo $faq;
} else{
    require './view/FAQ/FAQ2.php';
}

