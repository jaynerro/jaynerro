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
    <title>OS - System call</title>
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
                            <li class="breadcrumb-item active" aria-current="page">System call</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    System call
                </h1>
                <p style="margin-top: 30px;"> 
                    Dans le monde actuel, les systèmes d'exploitation doivent offrir aux utilisateurs non seulement le plus grand confort possible, mais aussi une stabilité et une sécurité maximales. Les développeurs de systèmes tels que Linux ou Windows sont donc soucieux, entre autres, de minimiser le risque de complications potentielles du système dues à une négligence personnelle involontaire ou à des attaques ciblées de l'extérieur.</br></br>
                    Une des mesures les plus importantes prises à cet effet est la séparation stricte du noyau du système d'exploitation et des programmes d'application ou des processus utilisateur. Cela signifie que les programmes et les processus qui n'appartiennent pas au système n'ont pas d'accès direct à l'unité centrale et à la mémoire, mais dépendent de ce que l'on appelle les system calls.
                </p>
                <img src="../../../../images/system-call.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 50px;"/>
                <p style="margin-top: 30px;"> 
                    Un appel système ou syscall est une méthode utilisée par les programmes d'application pour communiquer avec le noyau du système. Dans les systèmes d'exploitation modernes, cette méthode est utilisée lorsqu'une application ou un processus utilisateur a besoin de transmettre des informations au matériel, à d'autres processus ou au noyau lui-même, ou de lire des informations à partir de ceux-ci. Ainsi, un tel appel est le lien entre lemode utilisateur (User Mode) et le mode noyau (Kernel mode), les deux modes de privilège et de sécurité essentiels pour le traitement des instructions du CPU dans les systèmes informatiques.</br></br>
                    Tant qu'un appel système n'a pas été traité et les données correspondantes transmises ou reçues, le noyau système prend le contrôle du programme ou du processus. L'exécution est interrompue pendant cette période. Une fois que l'action demandée par un appel système a été effectuée, le noyau abandonne le contrôle et le code de programme continue à partir du point où le syscall a été précédemment lancé.
                </p>
                <p style="margin-top: 40px; justify-content: start;">
                    <b>Note</b>
                </p>
                <p style="margin-top: 5px;">
                    Une majorité de systèmes d'exploitation modernes fournissent certains appels système sous la forme de fonctions de bibliothèque qui peuvent être exécutées via une interface de programmation également fournie. Cela facilite grandement le travail des développeurs de logiciels, car il n'est plus nécessaire de connaître avec précision le fonctionnement interne du logiciel système concerné.
                </p>
                <p style="margin-top: 40px; justify-content: start;">
                    <b>À quoi servent les appels système ?</b>
                </p>
                <p style="margin-top: 5px;">
                    La nécessité des appels système est étroitement liée au modèle moderne de système d'exploitation avec mode utilisateur et mode noyau, qui a été introduit en réponse au nombre croissant de processus s'exécutant simultanément dans la mémoire principale (RAM) des ordinateurs. Ainsi, chaque processus individuel dispose de ses propres données avec des droits d'accès spéciaux, et ce n'est qu'avec une répartition équitable des ressources qu'il est possible d'exécuter correctement le système et les programmes d'application.</br></br>
                    Le mode privilégié supérieur du noyau est ici l'instance de contrôle décisive, car - comme déjà indiqué - non seulement tous les services et processus du système lui-même y sont exécutés, mais aussi les actions critiques du système des programmes d'application qui sont bloqués en mode utilisateur. La condition préalable est le system call approprié par le programme respectif. Dans la plupart des cas, il s'agit simplement d'accéder à la puissance de calcul (CPU) ou aux structures de mémoire (mémoire de travail et espace disque dur). Par exemple, si une application nécessite plus de puissance de calcul ou d'espace de stockage, ou si un fichier non spécifique à l'application est demandé (ouverture, lecture, édition, etc.), les appels système sont indispensables.
                </p>
                <p style="margin-top: 40px; justify-content: start;">
                    <b>Quels sont les types d'appels système ?</b>
                </p>
                <p style="margin-top: 5px;">            
                    En principe, tous les appels système peuvent être utilisés comme unités de commande pour la communication entre les processus d'application et le système d'exploitation ou le matériel, comme mentionné ci-dessus. En outre, les appels de système établis peuvent également être classés en différentes catégories, les cinq types de classification suivants étant notamment établis :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Contrôle des processus : tous les processus d'un système informatique doivent être contrôlés de manière à pouvoir être arrêtés ou contrôlés par d'autres processus à tout moment. À cette fin, les appels système de cette catégorie surveillent, par exemple, le lancement ou l'exécution ou l'arrêt/la fin des processus.</li>
                    <li>Gestion des fichiers : les appels système de ce type sont nécessaires aux programmes d'application pour accéder aux opérations typiques des fichiers. Ces méthodes de manipulation de fichiers comprennent entre autres « create » (créer), « delete » (supprimer), « open » (ouvrir), « close » (fermer), « write » (écrire) et « read » (lire).</li>
                    <li>Gestion des périphériques : la catégorie « Gestion des périphériques » comprend tous les appels système qui servent à demander ou à gérer les ressources matérielles nécessaires, comme la puissance de calcul ou l'espace de stockage.</li>
                    <li>Gestion de l'information : les processus sont liés à une grande quantité d'information, où la rapidité et l'intégrité jouent un rôle important. Pour les échanger ou les demander, les programmes d'application utilisent des appels système pour la gestion ou la maintenance des informations.</li>
                    <li>Communication entre les processus : une interaction fluide entre le système d'exploitation et les différents programmes d'application actifs n'est garantie que si les différents processus sont bien coordonnés. Pour ce faire, la communication via des system calls correspondants est indispensable.</li>
                </ul>
                <p style="margin-top: 40px; justify-content: start;">
                    <b>Windows et Linux : les appels système en un coup d'œil</b>
                </p>
                <p style="margin-top: 5px;">   
                    La mesure dans laquelle les types d'appels système énumérés peuvent être mis en œuvre ou utilisés dépend principalement du matériel et de l'architecture du système utilisés, mais aussi du système d'exploitation utilisé. Sous Linux, par exemple, les appels système sont stockés directement dans le noyau Linux dans la « System Call Table ». Chaque entrée de cette table se voitattribuer un numéro unique et une fonction spécifique à exécuter en mode noyau. Pour exécuter un Linux system call, le numéro correspondant est chargé dans la mémoire du CPU puis chargé par l'interruption logicielle 128 (appel d'une sous-fonction du système d'exploitation qui interrompt l'exécution du programme en mode utilisateur).</br></br>
                    La fonctionnalité est similaire dans les systèmes Windows, où un appel système est toujours d'abord converti en interne : une fonction de bibliothèque de l'API Windows (WinAPI en abrégé) devient ainsi automatiquement un appel système lisible par le système d'exploitation, incluant un numéro unique qui se réfère à la fonction souhaitée en mode noyau.</br></br>
                    Quelques exemples d'appels système Windows et Linux concrets sont donnés dans le tableau suivant :
                </p>
                <img src="../../../../images/system-call-2.png" class="img-fluid mx-auto d-block" style="max-width: 95%; margin-top: 50px;"/>

            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.ionos.fr/digitalguide/serveur/know-how/que-sont-les-appels-systeme/" target="_blank">Ionos - System call : que sont les appels système et à quoi servent-ils ?</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/Appel_syst%C3%A8me" target="_blank">Wikipedia - Appel système</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>