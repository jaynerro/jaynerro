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

    <?php // Feuille de style ?>
    <link rel="stylesheet" href="../../../../static/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../../static/css/prism.css"/>


    <?php // Titre de l'onget de la page ?>
    <title>Les processeurs graphiques - Fonctionnement</title>
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
                            <li class="breadcrumb-item"><a href="../../../../knowledge-base">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Hardware</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Les processeurs graphiques</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Fonctionnement</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Fonctionnement
                </h1>
                <img src="../../../../images/gpu.jpeg" class="img-fluid mx-auto d-block" style="max-width: 40%; margin-top: 40px;"/>
                <p style="margin-top: 50px;" id="GPU">
                    Un processeur graphique, ou GPU (de l'anglais Graphics Processing Unit), également appelé coprocesseur graphique sur certains systèmes, est une unité de calcul assurant les fonctions de calcul d'image.</br></br>
                    Il peut être présent sous forme de circuit intégré (ou puce) indépendant, soit sur une carte graphique ou sur la carte mère, ou encore intégré au même circuit intégré que le microprocesseur général (on parle d'un SoC lorsqu'il comporte toutes les puces spécialisées).</br></br>
                    Dans la terminologie d'AMD un GPU intégré à la même puce que le processeur est appelé APU, et dans la terminologie d'Intel un IGP). La sortie peut être affichée à l'écran, ou retraité en RAM ou VRAM pour différents usages, telle que l'écriture sur mémoire de masse ou un nouveau traitement interne. Un processeur graphique a généralement une structure hautement parallèle qui le rend efficace pour une large palette de tâches graphiques comme le rendu géométrique 2D ou 3D, s'opérant généralement dans une mémoire vidéo dédiée. Une unité de traitement du signal vidéo peut être couplée à ce processeur pour le décodage ou l'encodage de vidéo dans différents formats tels que Mpeg, etc. Enfin, Ce parallélisme permet également le calcul intensif en général, lorsqu'il s'agit d'un GPGPU (anglais : General Purpose GPU, signifiant GPU à vocation généraliste).</br></br>
                    Leur parallélisme poussé les rend aussi intéressants comme processeurs de calcul matriciel, pour casser des codes en bruteforce, de minage de cryptomonnaies, ou pour la création de corpus d'intelligence artificielle.</br></br>
                    Les sommets de polyèdres (en anglais vertex) constituent les données élémentaires de la géométrie en trois dimensions et par là des processeurs graphiques. Ce sont les points entre lesquels seront tracées les arêtes d’un objet et par lesquels le processeur construit les objets multidimensionnels. Si les objets sont en deux dimensions, ou qu’il s’agit de vidéos, les données sont directement envoyées à la fenêtre d’affichage.
                    Pour accélérer le calcul, le processeur calcule les sommets invisibles (cachés par d’autres sommets, par les faces d’un objet ou autrement) et les supprime pour ne pas avoir à les gérer.</br></br>
                    Le processeur graphique applique ensuite aux faces des objets les textures puisées sur le disque dur grâce au logiduc graphique (Pixel Pipeline). Le moteur graphique envoie ensuite au processeur des données sur l’éclairage des polygones, que celui-ci se charge de mettre en œuvre pour éclairer la scène. Ensuite, la puce graphique applique à l’image les divers filtres (anticrénelage ou filtrage anisotrope), et envoie le résultat à la fenêtre d’affichage, qui « aplatit » l’image pour l’afficher à l’écran.
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
                    <a href="https://fr.wikipedia.org/wiki/Processeur_graphique" target="_blank">Wikipedia - Processeur graphique</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.tomshardware.fr/peut-on-casser-un-mot-de-passe-avec-une-carte-graphique/" target="_blank">Tom's Hardware - Peut-on casser un mot de passe avec une carte graphique ?</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>