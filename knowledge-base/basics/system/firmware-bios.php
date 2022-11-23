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
    <link rel="stylesheet" href="../../../static/css/style.css">

    <?php // Titre de l'onget de la page ?>
    <title>Firmware et BIOS</title>
    <link rel="icon" type="image/png" href="../../../images/jaynerro-icon.png">
  </head>

  <?php // Corps de la page ?>
  <body class="dark">

    <?php //Inclusion de la barre de navigation ?>
    <?php require_once('../../../header.php'); ?>
    
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
                            <li class="breadcrumb-item active" aria-current="page">Firmware et BIOS</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Firmware et BIOS
                </h1>
                <p style="margin-top: 30px;"> 
                    Dans un système informatique, un firmware (ou micrologiciel, microprogramme, microcode, logiciel interne ou encore logiciel embarqué) est un programme intégré dans un matériel informatique (ordinateur, photocopieur, automate (API, APS), disque dur, routeur, appareil photo numérique, etc.) pour qu'il puisse fonctionner.
                </p>
                <img src="../../../images/firmware.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    Le firmware permet à un matériel informatique d’évoluer (via des mises à jour), d'intégrer de nouvelles fonctionnalités, sans avoir besoin de revoir complètement le design du hardware.</br></br>
                    La mémoire dans laquelle réside le firmware peut être :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>non volatile, stockant le programme et les données même lorsqu'elle n'est pas alimentée en électricité. C'est le cas le plus courant, avec des ROM, des EPROM ou une mémoire flash ;</li>
                    <li>volatile, donc effacée lorsqu'elle n'est plus alimentée en électricité. Dans ce cas, le firmware doit être chargé par un pilote à la mise sous tension.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Dans la plupart des cas, ce logiciel gère le fonctionnement interne du système électronique.</br></br>
                    D'une manière générale, le firmware cumule les avantages du logiciel, qu'il est possible de modifier, et du matériel, plus efficace. De son côté, le firmware interagit avec des composants matériels qui ne peuvent plus être modifiés une fois fabriqués, ce qui réduit la nécessité de le mettre à jour.</br></br>
                    On peut noter que :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>le firmware des ordinateurs (BIOS ou UEFI) est exécuté par son (ou ses) CPU interne (exemples : code de gestion de la carte mère, d'une carte vidéo ou SCSI) ;</li>
                    <li>le firmware interne à chaque périphérique est exécuté par le matériel que celui-ci contient (exemples : lecteur DVD, IDE ou SCSI, employant des micro-contrôleurs ou circuits de diverses familles).</li>
                </ul>
                <p style="margin-top: 30px;">
                    Cependant, les deux cas précédents sont parfois réunis, par exemple, lorsque la ROM d'un périphérique contient une partie du BIOS de l'ordinateur ainsi que le firmware destiné à la gestion de ce périphérique. Accessoirement, cela permet de mesurer le degré d'indépendance d'un périphérique vis-à-vis du type de machine hôte car toute extension munie d'un BIOS pour PC n'est utilisable que sur une machine de ce type alors que celles qui n'emploient qu'un firmware sont indépendantes de la machine hôte. C'est par exemple le cas des lecteurs/graveurs CD/DVD IDE, lesquels sont conformes à la norme ATAPI et fonctionnent donc sur toute machine IDE (PC, Mac…)
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    <b>Architecture d'un firmware</b>
                </p>
                <p style="margin-top: 20px;">
                    Plusieurs architectures sont connues en fonction du champ d’application du firmware, en partant des ordinateurs ou des équipements de grande utilité, mais aussi en fonction du type de firmware. Les différentes architectures de firmwares sont basées sur des bus entrées-sorties. Il est donc opportun de préciser qu’il n’existe pas d’architecture standard ni de modèle figé d’architecture des firmwares.</br></br>
                    Les firmwares, comme l’ensemble des systèmes à mémoire, se caractérisent généralement par la taille de la mémoire qui induit le temps de flashage, le flux de transfert et la méthode de mise à jour. Les firmwares peuvent être classés en deux grandes familles : le type « binaire », compressé ou non, et le type archive.</br></br>
                    Dans les systèmes embarqués, le firmware est généralement organisé comme représenté sur la figure ci-dessous. Au cours du processus de démarrage, le chargeur d'amorçage (bootloader en anglais), est maintenu. Il peut être amorcé en premier lieu lorsque le système est sous tension. Le noyau de l'OS suit de près.
                </p>
                <img src="../../../images/firmware-1.png" class="img-fluid mx-auto d-block" style="max-width: 40%; margin-top: 30px;"/>
                <p style="margin-top: 10px; font-size: small;">
                    Architecture standard d'un firmware
                </p>
                <p style="margin-top: 30px;">
                    Le bootloader initialise le matériel nécessaire et prépare les environnements logiciels de fonctionnement. Dans les détails, il divise le processus de chargement en deux parties. L’étape 1 est étroitement liée au matériel.</br></br>
                    Dans l'espace restant, les programmes d'applications sont stockés et généralement organisés par le système de fichiers et la mémoire vive. Avant de démarrer l'étape 2, le bootloader vérifie habituellement un premier code de 4 ko chargé par le matériel selon le processus de démarrage décrit.</br></br>
                    Ensuite, l'étape 2 est chargée et démarrée. Cette étape permet de lancer les fonctions plus sophistiquées. Le bootloader initialise les différents besoins pour le matériel (ports, les entrées et les sorties). Il va ensuite charger et démarrer le noyau du système chargé de la gestion des ressources du système, tels que les différents processus, la gestion de la mémoire. Ainsi, le système est démarré et les programmes d'application peuvent fonctionner sur la base des valeurs d'initialisation.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    Mise à jour
                </p>
                <p style="margin-top: 10px;">
                    L'utilisateur final n'a, d'ordinaire, pas accès directement au firmware mais peut parfois le modifier par l'installation de mises à jour pour profiter d'améliorations ou de corrections de bug. Pour cela il faut que le firmware réside dans certains types de mémoires ROM « reprogrammables », le plus souvent il s'agit d'EEPROM ou, depuis le milieu des années 1990, de mémoire flash (c'est-à-dire des EEPROM rapides).
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    Sécurité
                </p>
                <p style="margin-top: 10px;">
                    Les firmwares sont susceptibles d'être la cible d'actions malicieuses visant à rendre l'appareil inopérant ou à l'utiliser afin de s'introduire dans un réseau. Durant l'EUsecWest 2008, Rich Smith a mis en avant la possibilité de lancer une Attaque par déni de service permanent via une faille de sécurité sur les systèmes de mises à jour des firmwares des équipements faibles.</br></br>
                    Si une telle faille peut être exploitée afin de déployer une attaque par déni de service permanente, il est alors envisageable d'exploiter cette faille pour introduire une backdoor et s'introduire dans le système d'information. Ce sont souvent des équipements constamment en fonctionnement qui sont la cible de telles attaques.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    <b>Exemples</b>
                </p>
                <p style="margin-top: 10px; justify-content: start;">
                    Les BIOS
                </p>
                <p style="margin-top: 10px; justify-content: start;">
                    Les BIOS présents dans les ordinateurs de type PC sont des firmwares.
                </p>
                <p style="margin-top: 30px; justify-content: start;">
                    UEFI
                </p>
                <p style="margin-top: 10px;">
                    Les firmwares UEFI (de l'anglais Extensible Firmware Interface) sont amenés à remplacer les BIOS sur les cartes mères des PC car ils possèdent une simplicité de programmation que le BIOS n'a pas.
                </p>
                <p style="margin-top: 10px;">
                    Son inconvénient est d'ajouter une couche supplémentaire entre le hardware et l'utilisateur, compensée par une plus grande rapidité des processeurs et des mémoires.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    Autres exemples
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Open Firmware est un firmware présent dans les ordinateurs de type Macintosh basés sur un processeur PowerPC ;</li>
                    <li>Les programmes qui gèrent les composants d'un téléphone mobile, d'un lecteur de DVD, d'un baladeur MP3 ou d'une console de jeux ;</li>
                    <li>La gestion de l'injection électronique d'un moteur à explosion.</li>
                    <li>Un programme stocké dans une clef USB équipée d'un microprocesseur</li>
                    <li>Un programme stocké sur une machine à laver gérant les différents programmes</li>
                    <li>Le programme gérant la couche réseau d'une imprimante</li>
                    <li>Le programme faisant fonctionner la machine à voter ESF1</li>
                </ul>
                <p style="margin-top: 70px; justify-content: start;">
                    <b>BIOS (informatique)</b>
                </p>
                <p style="margin-top: 30px;">
                    Le BIOS, de l'anglais Basic Input Output System (en français : « système élémentaire d'entrée/sortie ») est un ensemble de fonctions, contenu dans la mémoire morte (ROM) de la carte mère d'un ordinateur, lui permettant d'effectuer des opérations de base, lors de sa mise sous tension. Par exemple l'identification des périphériques d’entrée/sortie connectés et la lecture d'un secteur sur un disque, un CD ou une partie d'une clé USB. Par extension, le terme est souvent utilisé pour décrire l'ensemble du micrologiciel de la carte mère. C'est en quelque sorte le centre de contrôle de la carte mère. Sur les cartes récentes il est remplacé par sa version moderne l'UEFI.
                </p>
                <img src="../../../images/bios.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Rôle du BIOS</br></br>
                    Le BIOS fournit un ensemble de services permettant de faire le plus possible abstraction de la couche matérielle. Ces services sont utilisés par le système d'exploitation et sont accessibles via certaines zones mémoires (40:00 par exemple) ou certaines interruptions logicielles (10h, 11h, 12h et 13h notamment). Cependant, dans la pratique, les systèmes d'exploitation modernes n'utilisent ces services que lors de l'amorçage ; ils utilisent ensuite soit leurs propres pilotes, soit les fonctions ACPI pour les opérations liées à la carte mère.</br></br>
                    Le BIOS a un rôle essentiel pour le fonctionnement de la carte mère :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>il initialise tous les composants de la carte mère, du chipset et de certains périphériques ;</li>
                    <li>il identifie tous les périphériques internes et externes qui lui sont connectés ;</li>
                    <li>si cela n'a pas déjà été fait il initialise l'ordre de priorité des périphériques d'entrée ;</li>
                    <li>il démarre le système d'exploitation dans l'ordre croissant des périphériques disponibles en contenant un (fonction dite bootstrap).</li>
                </ul>
                <p style="margin-top: 30px;">
                    Principales fonctionnalités</br></br>
                    L'objectif du BIOS est de rendre transparente, à tout système d'exploitation, la façon dont le fabricant a développé la carte mère (quels composants il a choisis et la manière dont ils sont interconnectés). Ainsi, en utilisant les mêmes fonctions du BIOS sur deux cartes mères différentes, on obtiendra le même résultat. Les systèmes d'exploitation peuvent utiliser ces fonctions, au moins pendant les premières étapes du démarrage de l'ordinateur, et ensuite lors du fonctionnement normal pour un accès direct au matériel.</br></br>
                    Le BIOS comprend également le logiciel nécessaire à l'amorçage de l'ordinateur. La première phase de l'amorçage (boot) est l'auto-configuration à l'allumage (POST de l’anglais Power-On Self-Test), qui compte la quantité de mémoire, teste les disques et configure les composants. La séquence d'amorçage continue avec la recherche d'un système d'exploitation, dans l'ordre des périphériques disponibles, avant de le lancer.</br></br>
                    Le BIOS prend en charge à bas niveau les communications avec les périphériques, néanmoins le système d'exploitation peut aussi s'adresser directement aux périphériques s'il le juge nécessaire. Parmi les prises en charge offertes par le BIOS, il y a celle du clavier, au moins dans un mode (pas forcément l'USB) et celle d'un mode d'affichage simplifié.</br></br>
                    Le BIOS contient également des outils de diagnostic pour vérifier sommairement l'intégrité des composants critiques comme la mémoire, le clavier, le disque dur, les ports d'entrée/sortie, etc.</br></br>
                    Certains paramètres du BIOS peuvent être réglés par l'utilisateur (ordre des périphériques à scruter pour détecter une zone de boot, type et fréquence du processeur, etc.). L'ensemble de ces paramètres est stocké de manière permanente grâce à une mémoire de taille réduite (quelques centaines d'octets) à faible consommation (type CMOS) alimentée par une pile (généralement au lithium) présente sur la carte mère. Cette mémoire est communément appelée, par abus, « CMOS ».</br></br>
                </p>
                <p style="margin-top: 30px;">
                    Fournisseurs</br></br>
                    Le BIOS est presque toujours développé par le fabricant de la carte mère à partir d'un code de référence fourni par un constructeur de BIOS (tel que AMI ou Phoenix Technologies) car il contient les paramètres spécifiques à l'initialisation de la carte mère, tels que la configuration des ports GPIO.</br></br>
                    Le code source des premiers PC et AT BIOS était inclus avec le Manuel des Références Techniques IBM. Aujourd'hui, la plupart des cartes mères sont livrées sans le code source du BIOS. L'utilisateur doit télécharger des mises à jour fournies par le constructeur. Ces mises à jour sont parfois nécessaires à la prise en charge de certains périphériques récents.</br></br>
                    Depuis 1999, la Fondation pour le logiciel libre soutient coreboot (ex-LinuxBIOS) un BIOS sous licence Licence publique générale GNU car on peut maintenant flasher le BIOS de sa carte mère pour le remplacer par un autre. L'avantage de ce système (machine fonctionnant avec un BIOS) est de ne pas devoir développer un système d'exploitation spécifique pour chaque carte mère.</br></br>
                    Le BIOS est généralement développé en langage assembleur.</br></br>
                </p>
                <p style="margin-top: 30px;">
                    Le BIOS pour amorcer</br></br>
                    Le signal Signal Power Good, signalant que les différentes tensions de l'alimentation sont stabilisées, déclenche l’exécution du BIOS.</br></br>
                    Le BIOS originel était conçu pour les systèmes CP/M et se limitait, à l'époque, à la gestion des entrées-sorties (comme son nom l'indique). Depuis l'introduction des PC compatibles IBM en août 1981, le BIOS émet les premières commandes au système durant la phase de démarrage.</br></br>
                    Le Power-on self-test (POST) signifiant auto-test au démarrage, désigne la première étape de ce processus plus général appelé amorçage.</br></br>
                    Lors de cette étape, le BIOS teste la présence des divers périphériques et tente de leur attribuer les ressources nécessaires à un fonctionnement sans conflit. Le POST terminé, le contrôle est cédé au chargeur d'amorçage, dont le rôle est de démarrer le système d'exploitation ou le premier périphérique amorçable disponible.</br></br>
                    En fonction de la liste des périphériques spécifiés en mémoire, le BIOS détermine sur quel support et à quel endroit de celui-ci trouver le chargeur d'amorçage (ou Boot loader) du système d'exploitation, en général Windows, Linux, Mac OS ou autre. Dans le cas de Windows, il s'agit du BCD, dans le cas d'un système en multiboot (possibilité de démarrer plusieurs systèmes d’exploitation sur un même ordinateur, par exemple Windows et Linux), il s'agit souvent du GRUB.
                </p>
                <p style="margin-top: 30px;">
                    Le BIOS en tant que firmware</br></br>
                    Le BIOS est un type de firmware, car il est très proche du hardware. Avant les années 1990, les BIOS étaient stockés sur des puces ROM qui ne pouvaient être modifiées. Au fur et à mesure que leur complexité, et le besoin de mises à jour se sont fait sentir, ils furent stockés sur des mémoires EEPROM ou Flash qui pouvaient être reprogrammée pour améliorer les fonctionnalités ou reconnaitre de nouveaux peripheriques.</br></br>
                    Ainsi, il est possible de mettre à jour, de manière logicielle, le BIOS d'un ordinateur. Cette action est appelée « Flasher le BIOS ». Un problème (coupure d'électricité, mauvaise version de ROM…) lors de cette opération peut rendre la carte mère définitivement inutilisable. Il est donc conseillé de ne flasher le BIOS que lorsque cette opération est vraiment nécessaire. Certaines cartes mères possèdent deux versions du BIOS : la version actuelle qu'il est possible de modifier logiciellement et une copie de sauvegarde, un cavalier permettant d'écraser la version actuelle par la version de sauvegarde. Il existe, de plus, des mécanismes permettant d'ajouter une deuxième mémoire flash à une carte mère n'en possédant qu'une, à condition que la puce initiale du BIOS soit extractible.
                </p>
                <p style="margin-top: 30px;">
                    Vulnérabilités du BIOS</br></br>
                    Le BIOS étant le firmware lancé au démarrage, il peut être la cible de logiciels malveillants. En 1999, le BIOS a connu sa première attaque d'envergure avec la propagation du virus CIH qui était très agressif puisqu'il rendait illisible par le système le contenu des disques. Depuis que les mises à jour du BIOS peuvent être réalisées à la volée via le programmateur interne de la carte mère, il est possible que ceux-ci soient la cible d'attaques de type homme du milieu.
                </p>
                <p style="margin-top: 30px;">
                    Extensible Firmware Interface</br></br>
                    L’Extensible Firmware Interface (EFI), aujourd'hui remplacé par l'UEFI (Unified EFI) est un logiciel intermédiaire entre le micrologiciel (firmware) et le système d'exploitation (OS) d'un ordinateur, et est néanmoins un véritable petit système d'exploitation. Cette interface est appelée à être le successeur du BIOS.
                </p>
                <img src="../../../images/uefi.png" class="img-fluid mx-auto d-block" style="max-width: 40%; margin-top: 30px;"/>

            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Firmware" target="_blank">Wikipedia - Firmware</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Vuln%C3%A9rabilit%C3%A9_des_firmwares_et_leurs_contre-mesures" target="_blank">Wikipedia - Vulnérabilité des firmwares et leurs contre-mesures</a>
                </h6>             

                <h6 style="margin-top: 30px;">
                    <a href="https://archive.wikiwix.com/cache/index2.php?url=http%3A%2F%2Fblogs.orange-business.com%2Fsecurite%2F2008%2F05%2Ffirmwares-des-equipements-besoin-de-les-securiser.html#federation=archive.wikiwix.com&tab=url" target="_blank">Orange Business Services - Firmwares des équipements : besoin de les sécuriser ?</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/BIOS_(informatique)" target="_blank">Wikipedia - BIOS</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/UEFI" target="_blank">Wikipedia - UEFI</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://en.wikipedia.org/wiki/Booting" target="_blank">Wikipedia - Booting</a>
                </h6>

                

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../footer.php'); ?>
</html>