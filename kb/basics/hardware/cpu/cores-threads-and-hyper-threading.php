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
    <title>Hardware - Coeurs, Threads & Hyper Threading</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Les processeurs</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Coeurs, Threads & Hyper Threading</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Coeurs, Threads & Hyper Threading
                </h1>
                <img src="../../../../images/cpu.png" class="img-fluid mx-auto d-block" style="max-width: 55%; margin-top: 40px;"/>
                <p style="margin-top: 50px;" id="CPU">
                    Le processeur ou CPU (Central Processing Unit) est le composant de votre ordinateur qui exécute les instructions qui lui sont données par votre système d’exploitation. Quand vous exécutez un logiciel, décompressez une archive ZIP ou regardez une vidéo en haute définition, vous faites travailler en priorité le processeur. Pour répondre à vos demandes les plus exigeantes, le processeur peut être doté des plusieurs cœurs.</br></br>
                    Un processeur standard possède un cœur (on dit qu’il est single-core). Un processeur avec un seul cœur ne peut traiter qu’une seule instruction à la fois, une instruction étant une tâche que l’on demande au processeur d’exécuter : convertir une vidéo, compresser des fichiers volumineux, exécuter un logiciel, etc.
                    Plusieurs instructions peuvent être traitées par le cœur d’un processeur mais ce sera toujours en série, c’est-à-dire une instruction à la fois.</br></br>
                    Un processeur multi-cœur est composé de deux ou plusieurs cœurs indépendants, chacun étant capable de traiter des instructions individuellement. Un processeur dual-core contient deux cœurs, un processeur quad-core quatre cœurs, un processeur hexa-core six cœurs, etc.</br></br>
                    Un processeur multi-cœur permet à l’utilisateur d’exécuter plusieurs tâches en même temps sans subir de ralentissements ! Autrement dit, les cœurs sont utiles si vous utilisez plusieurs logiciels à la fois. Quand un programme (un logiciel de retouche photo par exemple) est en cours d’exécution et traité par un cœur, vous pouvez solliciter un autre cœur pour utiliser votre navigateur Web ou écrire un document, sans subir de ralentissements.
                    Avoir plusieurs cœurs est aussi utile lorsque vous utilisez un logiciel qui peut utiliser plus d’un cœur. En effet, la majorité des programmes est conçue pour n’utiliser qu’un seul et unique cœur. Un logiciel qui est compatible avec le multi-cœur fonctionne lui beaucoup plus rapidement puisqu’il peut exécuter plusieurs instructions en même temps. C’est le cas notamment des logiciels de retouche photo mais aussi certains jeux vidéo.
                </p>
                <p style="margin-top: 60px; margin-left: 40px; font-size: x-large; justify-content: start">
                    <b>Threads & Hyper Threading</b>
                </p>
                <p style="margin-top: 30px;">
                    Lorsque vous exécutez un programme, un (ou plusieurs) processus est créé dans la liste des processus de Windows afin de s’assurer qu’il reçoit bien du temps processeur et de la mémoire. Chacun de ces processus comprend au moins un thread, une séquence d’instructions que le processeur doit traiter. Un thread est donc un fil d’exécution, une tâche que doit exécuter le processeur.</br></br>
                    Un cœur ne peut exécuter qu’un seul thread à la fois. Donc, si un processeur a deux cœurs, deux threads (deux tâches) peuvent être exécutées simultanément et ainsi de suite.</br></br>
                    Cependant, Intel a implémenté la technique SMT (Simultaneous Multi Threading) à deux voies dans certains de ses processeurs, technique qui permet à un cœur d’exécuter parallèlement deux threads au lieu d’un seul, afin d’améliorer l’utilisation des ressources. Hyper-Threading est le nom donné par Intel à cette implémentation du SMT dans ses processeurs.</br></br>
                    Pour chaque cœur physiquement présent, le système d’exploitation va adresser deux cœurs logiques et partager la charge de travail entre eux lorsque cela est possible. Schématiquement, cette technique permet de « simuler » deux cœurs physiques. Dans le Gestionnaire des tâches de Windows, vous pouvez voir combien de processeurs logiques existent sur votre système. Dans l’exemple ci-dessous, on voit que l’Hyper-Threading permet au processeur quad-core Intel Core i7-6700HQ d’avoir 8 processeurs logiques au lieu de 4.</br></br>
                </p>
                <img src="../../../../images/cpu2.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 20px;"/>
                <script src="../../../../static/js/prism.js" type="text/javascript"></script>
            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://lecrabeinfo.net/le-role-des-processeurs-et-de-leurs-coeurs.html" target="_blank">Le Crabe Info - Le rôle des processeurs et de leurs cœurs</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://lecrabeinfo.net/les-indices-de-performances-des-processeurs-intel-core-frequence-coeur-memoire-cache-hyper-threading-turbo-boost.html" target="_blank">Le Crabe Info - Les indices de performances des processeurs Intel Core : Hyper-Threading, Turbo Boost…</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/Processeur" target="_blank">Wikipedia - Processeur</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>