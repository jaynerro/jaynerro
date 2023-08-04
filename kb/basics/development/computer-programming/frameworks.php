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
    <link rel="stylesheet" href="../../../../static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../static/vendor/fontawesome/all.min.css" />
    <link rel="stylesheet" href="../../../../static/css/tree.css">
    
    <?php // Feuille de style ?>
    <link rel="stylesheet" href="../../../../static/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../../static/css/prism.css"/>

    <?php // Titre de l'onget de la page ?>
    <title>La programmation informatique - Les frameworks</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">La programmation informatique</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Les frameworks</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Les frameworks
                </h1>
                <img src="../../../../images/code.jpg" class="img-fluid mx-auto d-block" style="max-width: 85%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    Un autre concept très important avec lequel vous devez être familier en programmation informatique c’est le framework. Un Framework est une base applicative composée de plusieurs bibliothèques. Utiliser des Frameworks est pertinent dans le sens où certaines structures sont déjà mises en place. Ces structures sont basées entre autres sur un langage défini, un patron de conception ou un paradigme de programmation.</br></br>
                    L’avantage est que vous n’aurez plus à réinventer la roue. Une architecture est déjà prête. Ce qui facilite votre travail.</br></br>
                    Plusieurs Frameworks existent, et ce pour tout type de langage de programmation. Par exemple, en Java, pour développer des microservices, il y’a le framework Spring Boot, pour le mapping objet/relationnel, il y’a le framework Hibernate, pour les tests unitaires, il y’a JUnit, etc. Pour les développeurs Python, il y a Django, Pyramid ou Bottle. En PHP, il y a Symfony, Laravel, CodeIgniter, etc. Pour les développeurs qui travaillent avec les produits Microsoft, il y’a le framework .NET. Même en Big Data on a des framework, comme Apache Spark, ou l’écosystème Hadoop pour le traitement massivement parallèle des données.</br></br>
                    Aujourd’hui, maîtriser un Framework est primordial pour développer un logiciel.
                </p>
                <script src="../../../../static/js/prism.js" type="text/javascript"></script>
            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Programmation_informatique" target="_blank">Wikipedia - Programmation informatique</a>
                </h6>             

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.data-transitionnumerique.com/programmation-informatique-guide-complet/" target="_blank">Data Transition Numérique - Apprendre à coder : le guide ultime de la programmation informatique</a>
                </h6>              

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>