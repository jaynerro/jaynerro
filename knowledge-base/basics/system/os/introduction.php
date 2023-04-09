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
    <title>OS - Introduction</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Introduction</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Introduction
                </h1>
                <p style="margin-top: 30px;" id="OS"> 
                    Un système d'exploitation, ou logiciel système, ou Operating System (OS), est un logiciel qui, dans un appareil électronique, pilote les dispositifs matériels et reçoit des instructions de l'utilisateur ou d'autres logiciels (ou applications). Ces logiciels doivent être adaptés à un système d'exploitation.</br></br>
                    Dans un ordinateur, le système d'exploitation gère le ou les processeurs ainsi que la mémoire. Il fait fonctionner les périphériques (clavier, souris, surface tactile, écran, disque dur, lecteur de DVD, lecteur de cartes mémoire...). Dans un appareil photo, il fait fonctionner les différents mécanismes, gère l'affichage de l'écran et détecte les actions de l'utilisateur, etc.</br></br>
                    Les systèmes d'exploitation comportent aussi l'interface avec l'utilisateur. Dans un ordinateur, par exemple, c'est lui qui affichera les fenêtres et présentera le contenu des unités de stockage (disque dur, CD, DVD...).
                </p>
                <p style="margin-top: 30px;"> 
                    Il existe sur le marché des dizaines de systèmes d'exploitation différents, très souvent livrés avec l'appareil informatique. On peut les catégoriser en différents groupes : Les OS dit libres et les propriétaires (UNIXlike vs Windows/MacOS).
                    Certains OS sont adaptés à un usage desktop et d’autres plus serveurs, sans oublier les OS pour mobiles. </br></br>
                    Exemple d’OS : UNIX (MacOS, iOS), UNIXlike (Toutes les distributions Linux : Debian, Ubuntu, Red Hat, Android), Windows, etc.
                </p>
                <img src="../../../../images/os-1.png" class="img-fluid mx-auto d-block" style="max-width: 40%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Le système d'exploitation est un intermédiaire entre les logiciels d'application et le matériel.
                </p>
                <p style="margin-top: 30px;"> 
                    Fonctionnalités</br>
                    Le système d'exploitation offre une suite de services généraux facilitant la création et l'utilisation de logiciels applicatifs. Les services offerts sont en rapport avec l'utilisation des ressources de l'ordinateur par les programmes. Ils permettent en particulier d'exécuter des programmes, de lire et écrire des informations, de manipuler les fichiers, de communiquer entre ordinateurs et de déceler des erreurs. Ces services permettent à plusieurs usagers et plusieurs programmes de se partager les ressources de l'ordinateur. Le principal rôle du système d'exploitation est alors de gommer les différences entre les différentes architectures informatiques, et d'organiser l'utilisation des ressources de manière rationnelle.
                </p>
                <p style="margin-top: 50px;"> 
                    Utilisation des périphériques</br>
                    Chaque périphérique a ses propres instructions, avec lesquelles il peut être manipulé. Le système d'exploitation en tient compte. Il permet au programmeur de manipuler le périphérique par de simples demandes de lecture ou d'écriture, lui évitant la perte de temps de traduire les opérations en instructions propres au périphérique.
                </p>
                <p style="margin-top: 30px;"> 
                    Accès aux fichiers</br>
                    En plus des instructions propres à chaque périphérique (lecteur de disquette, disque dur, lecteur de CD-ROM, lecteur usb, lecteur de carte mémoire…), le système d'exploitation tient compte du format propre de chaque support servant au stockage de fichiers. Il offre également des mécanismes de protection permettant de contrôler quel utilisateur peut manipuler quel fichier.
                </p>
                <p style="margin-top: 30px;"> 
                    Accès aux ressources</br>
                    Une des fonctions du système d'exploitation est de protéger les ressources contre l'utilisation par des personnes non autorisées, et de résoudre les conflits lorsque deux utilisateurs demandent simultanément la même ressource.
                </p>
                <p style="margin-top: 30px;">
                    Détection et récupération en cas d'erreur</br>
                    Lorsqu'une erreur survient, qu'elle soit matérielle ou logicielle, le système d'exploitation traite l'erreur en adoucissant son impact sur le système informatique. Il peut tenter de réitérer l'opération, arrêter l'exécution du programme fautif, ou signaler le problème à l'utilisateur.
                </p>
                <p style="margin-top: 30px;">
                    Contrôle</br>
                    Un système d'exploitation peut tenir des statistiques d'utilisation des ressources, surveiller la performance, et les temps de réponse.
                </p>
                <p style="margin-top: 30px;">
                    Services</br>
                    Le système d'exploitation facilite le travail de programmation en fournissant une suite de services pouvant être utilisés par les logiciels applicatifs. Du point de vue du programmeur, son logiciel applicatif s'oriente en direction du système d'exploitation et du matériel, et les programmes sont considérés comme fonctionnant sur le système d'exploitation. Un système d'exploitation peut ainsi être vu comme une machine virtuelle. L'ensemble composé du matériel et du système d'exploitation forme la « machine » qui exécute le logiciel applicatif, une machine en partie simulée par du logiciel.</br>
                    Un système d'exploitation est composé d'une large palette de programmes. La composition exacte dépend de l'usage cible et du type d'appareil informatique auquel le système est destiné (ordinateur personnel, serveur, superordinateur ou encore système embarqué).
                </p>
                <p style="margin-top: 30px;">
                    Utilisation</br>
                    Les utilisateurs et les programmeurs peuvent demander des services au système d'exploitation par son interface de programmation, ses commandes ou son interface graphique.</br>
                </p>
                <p style="margin-top: 30px;">
                    Processeur</br>
                    Lorsqu’il est multitâche, le système d'exploitation permet à plusieurs utilisateurs de se servir de l'ordinateur et donne à chaque utilisateur l'impression qu'il est le seul à utiliser l'ordinateur. Pour ce faire, l'utilisation du processeur est planifiée : chaque programme est exécuté durant une tranche de temps déterminé, puis le système d'exploitation bascule sur l'exécution d'un autre programme.
                </p>
                <p style="margin-top: 30px;">
                    Mémoire</br>
                    Le système d'exploitation dirige l'utilisation de la mémoire. Il retient la liste des emplacements de mémoire utilisés, et par qui, ainsi que la liste des emplacements libres. Le système d'exploitation réserve un emplacement de mémoire lorsqu'un processus le demande, et le libère lorsqu'il n'est plus utilisé, par exemple lorsque le processus s'est arrêté.
                </p>
                <p style="margin-top: 30px;">
                    Périphériques</br>
                    Les périphériques sont tous les dispositifs informatiques qui permettent au processeur de communiquer avec l'extérieur : clavier, imprimante, carte réseau, mémoire, disque dur12. Ils permettent en particulier de recevoir des informations, d'en envoyer, ainsi que de stocker des informations — les collecter dans le but de les renvoyer plus tard.</br>
                    Une des responsabilités du système d'exploitation est de suivre l'état d'utilisation — libre ou réservé — de tout le matériel du système informatique. Lorsqu'un matériel libre est demandé par un processus, il est alors réservé à ce processus. Pour utiliser un périphérique, le système d'exploitation se sert d'un contrôleur et d'un pilote de périphérique.
                </p>
                <p style="margin-top: 30px;">
                    Fichiers</br>
                    Un fichier est une collection d'informations portant un nom, enregistrée sur un média tel qu'un disque dur, une bande magnétique ou un disque optique. Chaque médium a ses propres caractéristiques et sa propre organisation.</br>
                    Le système d'exploitation s'occupe de créer et de détruire des fichiers et des répertoires, de réserver de l'espace sur les médias ainsi que copier le contenu des fichiers de et vers la mémoire centrale. Il aide également les logiciels applicatifs à retrouver les fichiers, partager les fichiers entre plusieurs utilisateurs, modifier le contenu des fichiers et créer des répertoires (permettant de classer et d'organiser les fichiers). La vitesse du système informatique dépendra de la vitesse de manipulation des fichiers.
                </p>
                <p style="margin-top: 30px;">
                    Réseau</br>
                    Dans un réseau informatique, deux ordinateurs reliés communiquent dès lors que les communications se font de part et d'autre selon les mêmes protocoles réseau. Selon le modèle OSI, les différents protocoles existants sont répartis sur sept niveaux, où un protocole d'un niveau donné peut être combiné avec n'importe quel protocole des niveaux situés en dessus et en dessous (voir encapsulation).</br>
                    Un système d'exploitation contient typiquement plusieurs programmes nécessaires pour des échanges d'informations dans différents protocoles des niveaux 1 à 4. Tandis que les niveaux 5 à 7 sont pris en charge par les logiciels applicatifs et les middleware.</br>
                    Pour les échanges d'informations selon les protocoles de niveau 1 et 2, le système d'exploitation demande l'opération au matériel de l'ordinateur par l'intermédiaire d'un pilote informatique, pilote qui peut faire partie intégrante du système d'exploitation ou être fourni par le constructeur du matériel.
                </p>
                <p style="margin-top: 30px;">
                    Contrôle d'accès</br>
                    Les systèmes d'exploitation contemporains permettent à plusieurs usagers de se servir simultanément de l'ordinateur. Le système d'exploitation comporte des mécanismes destinés à contrôler l'utilisation des ressources par les utilisateurs, les processus et les programmes. Ces mécanismes permettent de certifier l'identité du programme ou de l'utilisateur et l'autoriser à accéder à une ressource en application de règlements de sécurité.</br>
                    Les mécanismes de sécurité du système d'exploitation servent à protéger le système informatique de l'intérieur comme de l'extérieur : les mécanismes de sécurité intérieure protègent les processus les uns des autres, et assurent la fiabilité du système informatique. Les mécanismes de sécurité extérieure protègent les données et les programmes enregistrés dans l'ordinateur contre des accès non autorisés et des erreurs de manipulation. Le système d'exploitation empêche la lecture par des personnes non autorisées, la falsification, la suppression de données, ainsi que l'utilisation non autorisée de périphériques.
                </p>
                <p style="margin-top: 30px;">
                    Interface utilisateur</br>
                    Un ensemble de programmes du système d'exploitation reçoit les informations envoyées par les logiciels applicatifs, et les place sur une image numérique qui sera envoyée au matériel par l'intermédiaire d'un pilote. En complément un autre ensemble de programmes reçoit les manipulations effectuées par l'usager par l'intermédiaire de pilotes puis les transmettent au logiciel concerné. Ces deux ensembles créent l'interface homme-machine qui permet à un usager de dialoguer avec la machine.</br>
                    Le système d'exploitation peut dialoguer avec un usager par l'intermédiaire d'un autre ordinateur ou d'un terminal (interface distribuée). 
                </p>
                <p style="margin-top: 30px;">
                    Logiciels utilitaires</br>
                    Un logiciel applicatif sert à assister l'utilisateur dans une activité. Les logiciels utilitaires sont des logiciels applicatifs qui permettent à l'utilisateur d'effectuer des manipulations basiques telles que démarrer des programmes, copier des fichiers ou modifier des paramètres de configuration. Divers logiciels utilitaires sont fournis avec les systèmes d'exploitation.</br>
                    Un interpréteur de commandes est un programme qui permet d'exécuter d'autres programmes en écrivant leur nom éventuellement suivi de divers paramètres. Il est accompagné de plusieurs programmes qui permettent la manipulation des fichiers (copie, changement de nom…). Ce type de programme est utilisé pour effectuer des manipulations ou exécuter des scripts — suites de manipulations pré-enregistrées (voir commande informatique). Ce type de programme est souvent fourni avec le système d'exploitation, mais rien n'y oblige, et on peut très bien en importer.</br>
                    Un environnement de bureau est un programme dans lequel les différents éléments de l'ordinateur (programmes, fichiers, disques durs) sont présentés sous forme de pictogrammes sur lesquels il est possible d'effectuer différentes actions. Il permet d'exécuter des programmes, d'effectuer différentes opérations sur les fichiers (copie, changement du nom, déplacement ou suppression).</br>
                    Certains programmes permettent à l'utilisateur de modifier les paramètres de configuration du système d'exploitation. Ceux-ci proposent des listes à choix multiples et effectuent des contrôles de validité avant le modifier les paramètres.</br>
                    D'autres programmes servent à installer des logiciels, c'est-à-dire copier les fichiers dans les emplacements prévus à cet effet, et effectuer les modifications de configuration nécessaire pour rendre le logiciel opérationnel. Ces programmes peuvent aussi servir à consulter la liste des logiciels actuellement installés dans l'ordinateur.
                </p>
                <img src="../../../../images/os-2.jpeg" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 50px;"/>

            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Syst%C3%A8me_d%27exploitation" target="_blank">Wikipedia - Système d'exploitation</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.futura-sciences.com/tech/definitions/informatique-systeme-exploitation-11820/" target="_blank">Futura - Système d’exploitation : qu'est-ce que c'est ?</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>