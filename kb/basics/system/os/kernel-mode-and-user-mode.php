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
    <title>OS - User mode vs Kernel mode</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Système</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">OS</p></li>
                            <li class="breadcrumb-item active" aria-current="page">User mode vs Kernel mode</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    User mode vs Kernel mode
                </h1>
                <p style="margin-top: 30px;"> 
                    Un processeur sur un ordinateur exécutant Windows a deux modes différents : le mode utilisateur et le mode noyau.</br></br>
                    Le processeur bascule entre les deux modes en fonction du type de code en cours d’exécution sur le processeur. Les applications s’exécutent en mode utilisateur et les composants principaux du système d’exploitation s’exécutent en mode noyau. Bien que de nombreux pilotes s’exécutent en mode noyau, certains pilotes peuvent s’exécuter en mode utilisateur.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    <b>User mode</b>
                </p>
                <p style="margin-top: 10px;">
                    Lorsqu'une application informatique est en cours d'exécution, elle est en mode utilisateur. Quelques exemples sont les applications type PowerPoint, lecture d'un fichier PDF ou la navigation sur Internet. Ce sont des programmes d'application pour que l'ordinateur soit en mode utilisateur. Lorsque le processus est en mode utilisateur et nécessite une ressource matérielle, cette demande est envoyée au noyau. Comme il y a un accès limité au matériel dans ce mode, il est connu comme mode moins privilégié, mode esclave ou mode restreint.</br>
                    En mode utilisateur, les processus ont leur propre espace d'adressage et ne peuvent pas accéder à l'espace d'adressage qui appartient au noyau. Ainsi, l'échec d'un processus n'affectera pas le système d'exploitation. S'il y a une interruption, cela n'affecte que ce processus particulier.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    <b>Kernel mode</b>
                </p>
                <p style="margin-top: 10px;">
                    Un noyau est un logiciel utilisé pour accéder aux composants matériels d'un système informatique. Le noyau fonctionne comme un logiciel intermédiaire pour le matériel et les logiciels d'application / programmes utilisateur. Le mode noyau est généralement réservé aux fonctions de confiance de bas niveau du système d'exploitation.</br>
                    Lorsque le processus s'exécute en mode utilisateur et si ce processus nécessite des ressources matérielles telles que la RAM, l'imprimante, etc., ce processus doit envoyer une requête au noyau. Ces demandes sont envoyées via des appels système. Ensuite, l'ordinateur entre en mode noyau à partir du mode utilisateur. Lorsque la tâche est terminée, le mode repasse en mode utilisateur à partir du mode noyau. Cette transition est connue sous le nom de "changement de contexte». Le mode noyau est également appelé mode système ou mode privilégié. Il n'est pas possible d'exécuter tous les processus en mode noyau car si un processus échoue, tout le système d'exploitation peut échouer.
                </p>
                <img src="../../../../images/user-kernel-mode.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 50px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Communication entre les composants en mode utilisateur et en mode noyau
                </p>
                
                
            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://learn.microsoft.com/fr-fr/windows-hardware/drivers/gettingstarted/user-mode-and-kernel-mode" target="_blank">Microsoft - Mode utilisateur et mode noyau</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.strephonsays.com/user-mode-and-vs-kernel-mode-13225" target="_blank">STREPHONSAYS - Différence entre le mode utilisateur et le mode noyau</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>