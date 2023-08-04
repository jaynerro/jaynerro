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
    <title>La programmation informatique - IDE</title>
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
                            <li class="breadcrumb-item active" aria-current="page">IDE</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 id="IDE"> 
                    IDE
                </h1>
                <img src="../../../../images/code.jpg" class="img-fluid mx-auto d-block" style="max-width: 85%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    Après le langage de programmation, vous avez besoin d’un autre outil fondamental : l’environnement de développement intégré, en abrégé IDE (Integrated Development Environment).</br></br>
                    L’IDE est une plateforme qui rassemble dans une seule interface graphique les outils dont vous avez besoin pour l’intégralité du cycle de vie du développement de votre logiciel. Vous y retrouverez à l’intérieur les éléments suivants :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>un éditeur de texte : pour rédiger votre programme dans le langage que vous avez choisi</li>
                    <li>un debugger : un outil pour examiner les bugs qui surviennent dans votre programme</li>
                    <li>l’autocomplétion : qui propose automatiquement les instructions du langage de sorte que vous n’ayez plus à les saisir complètement à chaque fois.</li>
                    <li>Un outil de build : pour compiler votre application et générer son package déployable</li>
                    <li>un outil de versioning comme Git pour la gestion des versions de votre code et la collaboration avec les autres membres de l’équipe</li>
                </ul>
                <p style="margin-top: 30px;"> 
                    L’utilisation d’un IDE n’est pas obligatoire pour développer des applications, mais ils vous faciliteront le travail. Il existe plusieurs IDE et chacun d’entre eux est souvent spécifique à un ou plusieurs langages :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>Pour Java et Scala : Eclipse, IntelliJ, Netbeans, etc. ;</li>
                    <li>Pour PHP : Netbeans, Zend Studio, etc. ;</li>
                    <li>Pour les langages .Net : Visual Studio ;</li>
                    <li>Pour Python : Jupyter</li>
                </ul>
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