<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/model/UserManager.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/model/FAQManager.php';
$user = new UserManager();
$faq = new FAQManager();

$error = "";

$codes = $user->getFreeCodes();
$faqQuestions = $faq->getQuestions();
$faqRep = $faq->getRep();
$faqId = $faq->getId();

function displayCodes($data)
{
    foreach ($data as $code) {
        echo '<tr>
                <td>' . $code['access_code'] . '</td>
                <td>' . "Aucune action disponible" . '</td>
              </tr>';
    }
}

function displayFAQ($questions, $reponses, $id)
{
    for ($i = 0; $i < count($questions); $i++) {
        echo '<tr>
                <td>' . $questions[$i] . '</td>
                <td>' . $reponses[$i] . '</td>
                <td>
                <form action="/backoffice" method="post">
                    <input type="hidden" name="id" value="' . $id[$i] . '">
                    <input type="submit" value="Supprimer">
                </form>
                </td>
              </tr>';
    }
}

if (isset($_POST['name']) && isset($_POST['first_name']) && isset($_POST['adress']) && isset($_POST['mail']) && isset($_POST['access_code'])) {
    if ($_POST['name'] != "" && $_POST['first_name'] != "" && $_POST['adress'] != "" && $_POST['mail'] != "") {


        $name = $user->charEscape($_POST['name']);
        $first_name = $user->charEscape($_POST['first_name']);
        $adress = $user->charEscape($_POST['adress']);
        $mail = $user->charEscape($_POST['mail']);
        $access_code = $_POST['access_code'];

        $user->editUserName($name, $access_code);
        $user->editUserFirstName($first_name, $access_code);
        $user->editUserAdress($adress, $access_code);
        $user->editUserMail($mail, $access_code);

        $_POST = array();

        header('Location: /backoffice');
    } else {
        echo 'Une entrée est manquante';
    }
} else if (isset($_POST['ok'])) {
    $user->createUser();
    header('Location: /backoffice');
} else if (isset($_POST['question']) && isset($_POST['reponse'])) {
    if ($_POST['question'] != "" && $_POST['reponse'] != "") {
        $faq->newFaq($_POST['question'], $_POST['reponse']);
        header('Location: /backoffice#section3');
        setcookie('error',"");
    }
    else{
        setcookie('error',"Veuillez remplir tous les champs");
        header('Location: /backoffice#section3');
    }
} else if (isset($_POST['id'])) {
    $faq->removeFaq($_POST['id']);
    header('Location: /backoffice');
} else {
    require_once './view/Backoffice.php';
}