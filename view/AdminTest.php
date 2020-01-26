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
    <p><?= $message ?></p>
    <script src=/controller/backoffice/countdown.js></script>
    <a href="/controller/admintest_control.php">
      <button type="button" name="button">Passer au test suivant</button>
    </a>
    <a href="backoffice.php">
      <button type="button" name="button">Quitter le test</button>
    </a>
</body>
</html>
