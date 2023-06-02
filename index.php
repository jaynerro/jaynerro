<?php //On démarre la session ?>
<?php //session_start(); ?>


<!DOCTYPE html>
<html lang="fr">

  <head>
    <?php // Base pour les urls htaccess ?>
    <base href="/">

    <?php // Type d'encodage ?>
    <meta charset="utf-8">

    <?php // Balise viewport permettant à une page web d'être responsive ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php // Bootstrap CSS ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <?php // Feuille de style ?>
    <link rel="stylesheet" href="static/css/style.css">

    <?php // Titre de l'onget de la page ?>
    <title>Jaynerro</title>
    <link rel="icon" type="image/png" href="/images/jaynerro-icon.png">
  </head>

  <?php // Corps de la page ?>
  <body class="dark">

    <?php //Inclusion de la barre de navigation ?>
    <?php require_once('header.php'); ?>
    
    <div class="container" style="margin-top: 80px;">
      <div class="row justify-content-center">
        <div class="col-sm-9">
          <h1 style="font-family: bit"> 
            Jaynerro
          </h1>
          <p style="margin-top: 30px;"> 
            Jaynerro c’est d’abord mon pseudonyme mais c’est aussi ma Knowledge Base mise sous forme de ce site web. 
          </p>
        </div>
      </div>
      <div class="row justify-content-center" style="margin-top: 65px;">
        <div class="col-sm-9">
          <p style="font-size: xx-large; font-family: bit";>
            Le but
          </p>
          <p style="margin-top: 20px;">
            Progresser sur le vaste sujet de la Cybersécurité, aussi bien sur la partie offensive que défensive.
          </p>
        </div>
      </div>
      <div class="row justify-content-center" style="margin-top: 80px;">
        <div class="col-sm-9">
          <p style="font-size: xx-large; font-family: bit";>
            Le plan
          </p>
          <p style="margin-top: 20px;">
            Apprendre, centraliser, structurer la connaissance acquise et rendre cela accessible à tous.
          </p>
        </div>
      </div>
      <div class="row justify-content-center" style="margin-top: 80px; margin-bottom : 120px">
        <div class="col-sm-7">
          <p style="font-size: small; font-family: bit";>
            Disclaimer
          </p>
          <p style="font-size: x-small";>
            Dans la partie Knowledge Base, concernant les notions abordées, il s’agit là d'une concentration d'informations tirées de différentes ressources lors de mon apprentissage. Ma Knowledge Base n’est en aucun cas, une référence absolue des thèmes que j’aborde. De même pour la partie Veille Informationnelle, où ce ne sont que des faits d’actualités qui m’ont marqués et auxquels je trouvais intéressant de partager, il ne s'agit pas là de la référence de l'actualité cyber. 
          </p>
        </div>
      </div>
    </div>
      
  </body>
  <?php //Inclusion du pied de page ?>
  <?php require_once('footer.php'); ?>
</html>