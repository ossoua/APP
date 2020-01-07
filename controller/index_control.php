<?php

session_start();

require './view/indexView.php';

nom=$_POST['nom'];
message=$_POST['message'];

mail("theomartinez2@gmail.com","nom","message");

if (mail("theomartinez2@gmail.com","nom","message")){
	echo "Le mail a été envoyé !";
}
	else{
		echo" une erreur est survenue !";
	}
?>
