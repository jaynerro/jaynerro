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
    <link rel="stylesheet" type="text/css" href="../../../../static/css/prism.css"/>

    <?php // Titre de l'onget de la page ?>
    <title>OS - Daemons & Services</title>
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
                            <li class="breadcrumb-item"><a href="../../../../knowledge-base.php">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Système</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">OS</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Daemons & Services</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Daemons & Services
                </h1>
                <p style="margin-top: 30px;"> 
                    Dans les Linux, les daemons permettent de faire fonctionner des programmes dès le démarrage et en tâche de fond. On peut aussi les appeler services. Ils peuvent s’exécuter durant la phase de boot de Linux. Systemd est le gestionnaire de service qui succède à SysV init. C’est le système qui gère les services, daemons et initialise l’OS Linux.</br></br>
                    Les daemons sont souvent démarrés lors du chargement du système d'exploitation et servent en général à répondre à des requêtes du réseau, à l'activité du matériel ou à d'autres programmes en exécutant certaines tâches. Sous Microsoft Windows, ces fonctions sont exécutées par des programmes appelés « services ».</br></br>
                    Les systèmes d'exploitation de type Windows NT incluent de nombreux services. Les services sont rattachés à trois comptes d'utilisateur : le compte Système, le compte Service réseau et le compte Service local. Parce que les services sont associés à leurs propres comptes utilisateur dédiés, ils peuvent fonctionner sans qu'un utilisateur soit connecté au système d'exploitation. Les services sont souvent associés à des processus hôtes pour les services Windows. 
                </p>

                <img src="../../../../images/daemons.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 40px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Systemd de Linux
                </p>
                <img src="../../../../images/services.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 60px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Services Windows
                </p>
                 
                <p style="margin-top: 50px;"> 
                    Dans un système d'exploitation de type UNIX, un daemon est en général un processus dont le processus parent est init, le processus numéro 1. Un démon peut donc être créé soit par init lui-même, soit par un autre processus en utilisant le mécanisme suivant. Le processus génère un processus enfant grâce à l'appel système fork, puis se termine immédiatement. Le processus enfant orphelin se trouve alors adopté par init. Cette façon de faire est parfois résumée par la phrase "fork off and die".</br></br>
                    Dans l'usage commun, on appelle aussi daemon n'importe quel processus fonctionnant en arrière-plan, qu'il soit ou non un enfant de init.
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    Exemples
                </p>
                <p style="margin-top: 20px;"> 
                    Les programmes serveurs réseau, qui doivent fonctionner en permanence, sont des daemons. C'est par exemple le cas des serveurs de messagerie. Les courriels envoyés sans destinataire provoquent en général un message d'erreur provenant du serveur, avec l'adresse « mailer-daemon@serveur.exemple ».</br></br>
                    Les noms des logiciels serveurs se terminent souvent par un d comme daemon. Ainsi le terme httpd (« HTTP daemon ») apparaît parfois dans les noms de logiciels serveurs web (NCSA HTTPd, lighttpd, nom de domaine httpd.apache.org pour Apache HTTP Server, etc.), sous UNIX le serveur d'imprimante s'appelle lpd (Line Printer Daemon), etc.</br></br>
                    Les daemons peuvent aussi être utilisés pour configurer le matériel (comme devfsd sur les systèmes GNU/Linux), exécuter des tâches répétitives (comme crond) ou effectuer une variété d'autres tâches.</br></br>
                    Certains logiciels clients, comme Geneweb, fonctionnent avec un daemon : il faut lancer le daemon, contenant le cœur du logiciel et faisant office de serveur HTTP, puis ouvrir une page spécifique dans un navigateur pour atteindre l'interface utilisateur.</br></br>
                </p>
                <p style="margin-top: 50px;"> 
                    Sur Windows, pour être un service, un programme doit être écrit de telle manière qu'il peut traiter des messages démarrer, arrêter et mettre en pause provenant du Service Control Manager. Service Control Manager est un composant de Windows qui est responsable du démarrage et de l'arrêt des services.</br></br>
                    Remarque : La différence principale entre un service et un processus est que le service fonctionne toujours en arrière-plan et qu’il n’appartient pas à un utilisateur. Les services peuvent également démarrer / exécuter des processus et parfois des processus peuvent démarrer des services.
                </p>

            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Daemon_(informatique)" target="_blank">Wikipedia - Daemon (informatique)</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.malekal.com/systemd-service-linux-configuration-et-fonctionnement-daemon/" target="_blank">Malekal.com - Systemd : Configuration et fonctionnement des services Linux (daemon)</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Service_(Windows)" target="_blank">Wikipedia - Services (Windows)</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://commentouvrir.com/blog/quest-ce-quun-service-definition-dun-service-windows/" target="_blank">Commentouvrir.com - Qu’est-ce qu’un service ? (Définition d’un service Windows)</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://megastuces.com/quelle-la-difference-les-processus-les-services-windows/" target="_blank">Megaastuces.com - Quelle est la différence entre les processus et les services Windows</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>