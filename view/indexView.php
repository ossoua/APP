<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Page d'accueil</title>
  <link rel="stylesheet" href="./view/stylesheets/style_header.css">
  <link rel="stylesheet" href="./view/stylesheets/style_accueil.css">
</head>


<body>
  <header>
    <div id="logo">
      <img src="./view/img/logo_produit.png" alt="Logo Produit" width="100px">
      <img class="padding_menu" src="./view/img/DrivingAces.png" alt="DrivingAces" width="230px">
    </div>


    <nav>
      <ul>
        <li><a href="#page_accueil">Accueil</a></li>
        <img src="./view/img/Ligne 1.png" alt="ligne">
        <li><a href="#link_presentation">Découvrir DrivingAces®</a></li>
        <img src="./view/img/Ligne 1.png" alt="ligne">
        <li><a href="#link_formulaire">Nous rejoindre</a></li>
        <img src="./view/img/Ligne 1.png" alt="ligne">
        <li><a href="/FAQ">FAQ</a></li>
      </ul>
    </nav>


    <div id="espace_client">
        <div><a href="/user/connection">Espace client</a></div>
        <img class="padding_menu" src="./view/img/user@2x.png" alt="icone_user" width="35px">
    </div>

  </header>

  <section id="page_accueil">
    <h1>Le test psychotechnique nouvelle génération</h1>

    <div class="bandeau">
      <ul>
        <li>
          <img src="./view/img/award@2x.png" alt="icone_award" width="30%">
          <h3>Un test de qualité</h3>
        </li>
        <li>
          <img src="./view/img/key@2x.png" alt="icone_key" width="30%">
          <h3>Une solution clé en main</h3>
        </li>
        <li>
          <img src="./view/img/glasses@2x.png" alt="icone_glasses" width="25%">
          <h3>Des résultats clairs et dynamiques</h3>
        </li>
        <li>
          <img src="./view/img/share@2x.png" alt="icone_share" width="25%">
          <h3>Une communication facilitée</h3>
        </li>
      </ul>
    </div>

    <h1 id="test">Découvrir le test</h1>
    <a href="#link_presentation"><img src="./view/img/suivant@2x.png" alt="icone_suivant" height="80px"></a>
  </section>

  <div id="link_presentation" class="separation">

  </div>

  <section id="presentation">
    <div class="">
      <img class="personnage" src="./view/img/personnage3@2x.png" alt="personnage3">
    </div>

    <div class="texte">
      <h2>Driving Aces définit la nouvelle génération des tests psychotechniques</h2>
      <p>
        Les tests psychotechniques sont des tests effectués par un psychologue, en complément d’une visite médicale. Ils ont pour but de vérifier votre aptitude à conduire et à réagir de manière appropriée aux diverses situations rencontrées sur la
        route. Si vous devez vous soumettre aux tests psychotechniques en cas de permis suspendu ou annulé, cela sera précisé dans la lettre de notification de la sanction.

      </p>
      <img id="discover" src="./view/img/img_decouvrir@2x.png" alt="image_decouvrir">
      <div class="nous_rejoindre">
        <h3>Nous rejoindre</h3>
        <a href="#link_formulaire"><img src="./view/img/suivant@2x.png" alt="icone_suivant_2" height="40px"></a>
      </div>
    </div>
  </section>

  <div id="link_formulaire" class="separation">

  </div>

  <section id="formulaire">
    <div class="colonne">
      <h1 class="formulaire">Formulaire de contact</h1>
      <form class="" action="php/traitement.php" method="post">
        <p><input type="text" name="nom" value="" placeholder="Votre nom" required></p>
        <p><textarea name="message" rows="8" cols="80" placeholder="Votre message" required></textarea> </p>
        <input id="envoyer" type="submit" name="Envoyer" value="Envoyer">
      </form>
    </div>
    <div class="">
      <img class="personnage" src="./view/img/personnage_formulaire@2x.png" alt="personnage_formulaire">
    </div>


  </section>

  </section>

  <div id="">

  </div>


</body>

</html>
