<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbnam=test;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur: '. $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM jeux_video');

while ($donnee = $reponse->fetch()) {
    ?>
  <p> <strong>Jeu:</strong> <?php echo $donnee['nom']; ?> <br />
      Le <strong>possesseur</strong> de ce jeu est: <?php echo $donnee['possesseur'] ?> <br />
      C'est un jeu sur la <strong>console</strong>: <?php echo $donnee['console'] ?> <br />
      Il est vendu au <strong>prix</strong> de : <?php echo $donnee['prix'] ?> euros <br />
      On peut y jouer à <?php echo $donnee['nbre_joueurs_max'] ?> <strong>joueur(s)</strong> <br />
      <strong>Commentaire</strong> du propriétaire : <?php echo $donnee['commentaires'] ?>
  </p>
  <?php
}

$reponse->closeCursor();


 ?>
