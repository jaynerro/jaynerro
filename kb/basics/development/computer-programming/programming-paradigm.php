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
    <title>La programmation informatique - Les différents paradigmes</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Les différents paradigmes</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Les différents paradigmes
                </h1>
                <img src="../../../../images/paradigm.png" class="img-fluid mx-auto d-block" style="max-width: 85%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    Un concept à comprendre pour écrire des programmes informatiques est la notion de paradigme de programmation.</br></br>

                    Avant d'écrire un programme informatique, il faut savoir comment vous allez le structurer. Cela vous aidera plus tard à choisir le langage à adopter.</br></br>

                    Le paradigme de programmation est ce choix de structuration. C'est à l'aide du paradigme que vous allez formuler la manière dont le programme s'exécutera. Le choix dépendra de ce que vous souhaitez développer, des problèmes auxquels le résultat que vous souhaiter obtenir vous confronte et de la finalité de chaque action.</br></br>

                    Il existe plusieurs types de paradigmes de programmation :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>La programmation impérative : consiste à écrire une suite d'instructions qui sert à modifier l'état d'un programme. Il existe deux sous-ensembles de ce paradigme : la programmation procédurale qui introduit la notion de procédure et la programmation structurée</br></br></li>
                    <li>La programmation déclarative : un type de programmation qui vise à supprimer tout effet de bord. C'est-à-dire que les fonctions ne changent pas d'état. Les types de programmation compris dans ce paradigme sont la programmation fonctionnelle, que l'on utilise justement dans le Big Data, et la programmation logique.</br></br></li>
                    <li>La programmation orientée objet : sans doute le plus utilisé en ce moment. Elle consiste à définir chaque problème en différents objets. Les objets possèdent des méthodes et des attributs. La programmation orientée prototype et la programmation orientée classe font partie de ce paradigme.</li>
                </ul>

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