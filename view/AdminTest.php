<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>BackOffice</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">
    <link rel="stylesheet" href="/view/stylesheets/style_admintest.css">
</head>

<body>
<div class="décompte">
  <h1 id="count"></h1>
</div>
<?php if(isset($_POST['code'])){echo $_POST['code'];}
else {echo"Pas de code récupéré";} ?>
<script src=/controller/backoffice/countdown.js></script>
</body>
</html>
