<?php //On démarre la session ?>
<?php //session_start(); ?>


<!DOCTYPE html>
<html lang="fr">

  <head>
    <?php // Type d'encodage ?>
    <meta charset="utf-8">

    <?php // Balise viewport permettant à une page web d'être responsive ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php // Bootstrap CSS ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <?php // Feuille de style ?>
    <link rel="stylesheet" href="style.css">

    <?php // Titre de l'onget de la page ?>
    <title>Jaynerro</title>
  </head>

  <?php // Corps de la page ?>
  <body class="dark">

    <?php //Inclusion de la barre de navigation ?>
    <?php require_once('header.php'); ?>
    
    <div class="container" style="margin-top: 110px;">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <p> 
            Qu’est ce que Jaynerro ? 
          </p>
          <p> 
            Jaynerro c’est d’abord mon pseudonyme mais c’est aussi ma Knowledge Base mise sous forme de ce site web. 
          </p>
        </div>
      </div>
      <div class="row justify-content-center" style="margin-top: 70px;">
        <div class="col-sm-8">
          <p>
            Le but
          </p>
          <p>
            Progresser sur le sujet de la Cybersécurité et plus précisément sur la sécurité offensive / Ethical Hacking.
          </p>
        </div>
      </div>
      <div class="row justify-content-center" style="margin-top: 70px;">
        <div class="col-sm-8">
          <p>
            Le plan
          </p>
          <p>
            Apprendre, conserver une trace de mon apprentissage et rendre cela disponible pour tout le monde.
          </p>
        </div>
      </div>
      <div class="row justify-content-center" style="margin-top: 70px; margin-bottom : 100px">
        <div class="col-sm-7">
          <p style="font-size: x-small";>
            Disclaimer
          </p>
          <p style="font-size: x-small";>
            Dans la partie Knowledge Base, il s’agit là d'aide-mémoires personnelles créés lors de l’apprentissage de certaines notions, ce n’est en aucun cas une référence absolue des thèmes que j’aborde. De même pour la partie Veille Informationnelle, où ce ne sont que des faits d’actualités qui m’ont marqués et auxquels je trouvais intéressant de partager, il ne s'agit pas là de la référence de l'actualités cyber. 
          </p>
        </div>
      </div>
    </div>
      
  </body>
  <?php //Inclusion du pied de page ?>
  <?php require_once('footer.php'); ?>
</html>