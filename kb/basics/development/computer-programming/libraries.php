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
    <title>La programmation informatique - Les librairies</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Les librairies</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Les librairies
                </h1>
                <img src="../../../../images/code.jpg" class="img-fluid mx-auto d-block" style="max-width: 85%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    Le mot exact pour désigner une librairie est une bibliothèque. Comme son nom l’indique, c’est un ensemble de fonctions déjà compilé et prêt à être utilisé dans un langage défini. Il vous donne les moyens d’exécuter une tâche sans que vous ne le codiez.</br></br>
                    Pour utiliser une bibliothèque, il vous suffit de l’importer dans votre programme. Ces fichiers ont par exemple l’extension .dll, .ocx et bien d’autres encore. Le format diffère en fonction du langage.</br></br>
                    Une fois importé, vous pourriez faire appel à ses fonctions. D’habitude, chaque fonction possède une description détaillée sur son utilisation.</br></br>
                    Prenons par exemple ce programme en C :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/libraries.c'?></code></pre>

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