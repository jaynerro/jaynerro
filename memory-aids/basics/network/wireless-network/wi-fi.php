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
    <link rel="stylesheet" href="../../../../static/css/style.css">

    <?php // Titre de l'onget de la page ?>
    <title>Réseaux sans fil - Wi-fi</title>
  </head>

  <?php // Corps de la page ?>
  <body class="dark">

    <?php //Inclusion de la barre de navigation ?>
    <?php require_once('header.php'); ?>
    
    <div class="container" style="margin-top: 30px;">
    <?php // Mise en place d'un fil d'Arianne ?>
      <div class="row justify-content-center">
        <div class="col">
          <div class="breadcrumb">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="../../../../knowledge-base.php">Knowledge Base</a></li>
                      <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                      <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux</p></li>
                      <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux sans fil</p></li>
                      <li class="breadcrumb-item active" aria-current="page">Wi-fi</li>
                  </ol>
              </nav>
          </div> 
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <h1> 
            Wi-fi
          </h1>

        </div>
      </div>

      
      
      <div class="row justify-content-center">
        <div class="group col-sm-8">
         

          <h3 style="margin-top: 100px;">
            Références
          </h3>

          <h6 style="margin-top: 30px; margin-bottom: 200px;">
            "Apprenez le fonctionnement des réseaux TCP/IP" de Eric Lalitte - Collection OpenClassrooms
          </h6>
        </div>
      </div>

  </body>
  <?php //Inclusion du pied de page ?>
  <?php require_once('footer.php'); ?>
</html>