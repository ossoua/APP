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
    <script src=/controller/backoffice/countdown.js></script>
    <br>
    <a href="/controller/admintest_control.php">
      <button type="button" name="button1">Passer au test suivant</button>
    </a><br>
    <br>
    <a href="/">
      <button type="button" name="button2">Quitter le test</button>
    </a>
    <br>
    <h2><?= $message ?></h2>
</body>
</html>
