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
    <title>Langages de programmation - Javascript</title>
    <link rel="icon" type="image/png" href="../../../../images/jaynerro-icon.png">
  </head>

  <?php // Corps de la page ?>
  <body class="dark">

    <?php //Inclusion de la barre de navigation ?>
    <?php require_once('../../../../header.php'); ?>
    
    <div class="container" style="margin-top: 30px;">
    <?php // Mise en place d'un fil d'Arianne ?>
        <div class="row justify-content-center">
            <div class="col">
                <div class="breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../../../../../knowledge-base">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Développement</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Langages de programmation</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Javascript</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Javascript
                </h1>
                <img src="../../../../images/js.png" class="img-fluid mx-auto d-block" style="max-width: 65%; margin-top: 20px;"/>
                <p style="margin-top: 30px;"> 
                   Ne voulant pas m'attarder sur les explications du langage, voici ci-dessous des liens vers des sites détaillant l'ensemble de ce dernier :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>
                        <h6 style="margin-top: 30px;">
                            <a href="https://openclassrooms.com/fr/courses/7696886-apprenez-a-programmer-avec-javascript" target="_blank">Openclassrooms - Apprenez à programmer avec JavaScript</a>
                        </h6> 
                    </li>
                    <li>
                        <h6 style="margin-top: 30px;">
                            <a href="https://openclassrooms.com/fr/courses/7697016-creez-des-pages-web-dynamiques-avec-javascript" target="_blank">Openclassrooms - Créez des pages web dynamiques avec JavaScript</a>
                        </h6>
                    </li>
                    <li>
                        <h6 style="margin-top: 30px; margin-bottom: 180px;">
                            <a href="https://www.sitedudev.com/cours/js" target="_blank">Sitedudev - Apprendre le JS</a>
                        </h6> 
                    </li>
                </ul>
            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>