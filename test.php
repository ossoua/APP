<?php

function charEscape($text)
{
    
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Liste des utilisateurs</title>
	</head>
	<body>
	<?php
	$text = "&opo><'/";
	echo charEscape($text); ?>
	</body>
</html>
