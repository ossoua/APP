<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>BackOffice</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">
    <link rel="stylesheet" href="/view/stylesheets/style_admintest.css">

</head>
<body>
  <section id="section1">
    <div class="décompte">
      <h1 id="count"></h1>
    </div>
    <p><?= $tonalite ?></p>
    <script src=/controller/backoffice/countdown.js></script>
    <a href="/controller/admintest_control.php">
      <button type="button" name="button">Passer au test suivant</button>
    </a>
  </section>

  <section id="section2">
    <div class="décompte">
      <h1 id="count"></h1>
    </div>
    <p><?= $son ?></p>
    <script src=/controller/backoffice/countdown.js></script>
    <a href="/controller/admintest_control.php">
      <button type="button" name="button">Passer au test suivant</button>
    </a>
  </section>

  <section id="section3">
    <div class="décompte">
      <h1 id="count"></h1>
    </div>
    <p><?= $vision ?></p>
    <script src=/controller/backoffice/countdown.js></script>
    <a href="/controller/admintest_control.php">
      <button type="button" name="button">Passer au test suivant</button>
    </a>
  </section>
</body>
</html>
