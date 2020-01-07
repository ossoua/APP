<?php

function charEscape($password) {
	for($i=0; $i<strlen($password); $i++) {
		if (strcmp($password[i], "&")) {
			$password[i] = "\&";
		}
		else if (strcmp($password[i], "<")) {
			$password[i] = "\<";
		}
		else if (strcmp($password[i], ">")) {
			$password[i] = "\>";
		}
		else if (strcmp($password[i], '"')) {
			$password[i] = "\"";
		}
		else if (strcmp($password[i], "'")) {
			$password[i] = "\'";
	}
	return $password;
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Liste des utilisateurs</title>
	</head>
	<body>
	<?php 
	$password = "&opo><"
	echo charEscape($password); ?>
	</body>
</html>
