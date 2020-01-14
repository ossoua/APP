<?php

session_start();

require './view/indexView.php';

if (isset($_POST['nom']) && isset($_POST['message'])){
	$nom=$_POST['nom'];
	$message=$_POST['message'];

	mail("theomartinez2@gmail.com","$nom","$message");

	if (mail("theomartinez2@gmail.com","$nom","$message")){
		echo "Le mail a été envoyé !";
	}
	else{
		echo" une erreur est survenue !";
	}
}
