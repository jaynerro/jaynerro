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
    <title>Réseaux sans fil - Bluetooth</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux sans fil</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Bluetooth</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Bluetooth
                </h1>
                <p style="margin-top: 30px;">
                    Bluetooth est une norme de télécommunications permettant l'échange bidirectionnel de données à courte distance en utilisant des ondes radio UHF sur la bande de fréquence de 2,4 GHz. Son but est de simplifier les connexions entre les appareils électroniques à proximité en supprimant des liaisons filaires. Elle peut remplacer par exemple les câbles entre ordinateurs, tablettes, haut-parleurs, téléphones mobiles entre eux ou avec des imprimantes, scanneurs, claviers, souris, manettes de jeu vidéo, téléphones portables, assistants personnels, systèmes avec mains libres pour microphones ou écouteurs, autoradios, appareils photo numériques, lecteurs de code-barres et bornes publicitaires interactives.
                </p>
                <img src="../../../../images/bluetooth-1.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 50px;"/>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Couches protocolaires</b>
                </p>
                <p style="margin-top: 45px;"> 
                    Les éléments fondamentaux d'un produit Bluetooth sont définis dans les deux premières couches protocolaires :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>la couche radio ;</li>
                    <li>et la couche bande de base.</li>
                </ul>
                <p style="margin-top: 30px;"> 
                    Ces couches prennent en charge les tâches matérielles comme le contrôle du saut de fréquence et la synchronisation des horloges.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>La couche radio</b>
                </p>
                <p style="margin-top: 30px;"> 
                    La couche radio (la couche la plus basse) est gérée au niveau matériel. C'est elle qui s'occupe de l'émission et de la réception des ondes radio. Elle définit les caractéristiques telles que la bande de fréquence et l'arrangement des canaux, les caractéristiques du transmetteur, de la modulation, du récepteur, etc.</br></br>
                    Le système Bluetooth opère dans les bandes de fréquences ISM (Industrial, Scientific and Medical) 2,4 GHz dont l'exploitation ne nécessite pas de licence vu la faible puissance d'émission et le risque faible d'interférences. Cette bande de fréquences est comprise entre 2 400 et 2 483,5 MHz. Un transceiver à sauts de fréquence est utilisé pour limiter les interférences et l'atténuation.</br></br>
                    Pour le Bluetooth classique (hors version BLE), deux modulations sont définies : une obligatoire utilisant une modulation de fréquence binaire (FSK) pour minimiser la complexité de l'émetteur ; une modulation optionnelle (mode EDR) utilise une modulation de phase (PSK à quatre et huit symboles). La rapidité de modulation est de 1 Mbaud pour toutes les modulations. La transmission duplex utilise une division temporelle.</br></br>
                    Les 79 canaux RF du Bluetooth classique (40 en mode BLE) sont numérotés de 0 à 78 et séparés de 1 MHz en commençant par 2 402 MHz. Le codage de l'information se fait par sauts de fréquence et la période est de 625 µs, ce qui permet 1 600 sauts par seconde.</br></br>
                    En Bluetooth classique, il existe trois classes de modules radio Bluetooth sur le marché :
                </p>
                <img src="../../../../images/bluetooth-2.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    La plupart des fabricants d'appareils électroniques utilisent des modules de classe 2.</br></br>
                    En mode Bluetooth basse consommation (BLE), la puissance d'émission peut varier de 0,01 mW (-20 dBm) à 10 mW (10 dBm)17. La modulation utilisée est de type GFSK (Gaussian FSK).
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>La bande de base</b>
                </p>
                <p style="margin-top: 30px;"> 
                    La bande de base (ou baseband en anglais) est gérée au niveau matériel. C'est au niveau de la bande de base que sont définies les adresses matérielles des périphériques (équivalentes à l'adresse MAC d'une carte réseau). Cette adresse est nommée BD_ADDR (Bluetooth Device Address) et est codée sur 48 bits.</br></br>
                    Ces adresses sont gérées par la IEEE Registration Authority.</br></br>
                    C'est également la bande de base qui gère les différents types de communication entre les appareils. Les connexions établies entre deux appareils Bluetooth peuvent être synchrones ou asynchrones, ces connexions sont appelées « Liens Logiques » (Logical Link).</br></br>
                    La bande de base peut donc gérer deux types majeurs de liens logiques :</br></br>
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>les liens SCO (Synchronous Connection-Oriented) ;</li>
                    <li>les liens ACL (Asynchronous Connection-Less).</li>
                </ul>
                <p style="margin-top: 30px;"> 
                    Les données transportées sur ces liens logiques sont sous forme de paquets. Il existe divers types de paquets, qui peuvent être utilisés par les deux liens logiques ou seulement par un seul type de lien.</br></br>
                    Chaque paquet est composé globalement de la même manière.</br></br>
                    On retrouve trois parties essentielles :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Le code d'accès → 72 ou 68 bits ;</li>
                    <li>L'entête (Header) → 54 bits ;</li>
                    <li>La charge utile (Payload = les données utiles) → de 0 à 2 745 bits.</li>
                </ul>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Picoréseau</b>
                </p>
                <p style="margin-top: 30px;">
                    Un picoréseau (en anglais piconet) est un mini-réseau qui se crée de manière instantanée et automatique quand plusieurs périphériques Bluetooth sont dans un même rayon. Un picoréseau est organisé selon une topologie en étoile : il y a un « maître » et plusieurs « esclaves ».</br></br>
                    Un périphérique « maître » peut administrer jusqu'à :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>7 esclaves « actifs » ;</li>
                    <li>les liens ACL (Asynchronous Connection-Less).</li>
                </ul>
                <p style="margin-top: 30px;"> 
                    La communication est directe entre le « maître » et un « esclave ». Les « esclaves » ne peuvent pas communiquer entre eux.</br></br>
                    Tous les « esclaves » du picoréseau sont synchronisés sur l'horloge du « maître ». C'est le « maître » qui détermine la fréquence de saut pour tout le picoréseau.
                </p>
                <img src="../../../../images/bluetooth-3.png" class="img-fluid mx-auto d-block" style="max-width: 40%; margin-top: 30px;"/>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Inter-réseau Bluetooth</b>
                </p>
                <p style="margin-top: 30px;">
                    Les périphériques « esclaves » peuvent avoir plusieurs « maîtres » : les différents piconets peuvent donc être reliés entre eux.</br></br>
                    Le réseau ainsi formé est appelé un scatternet (littéralement « réseau dispersé »).
                </p>
                <img src="../../../../images/bluetooth-4.png" class="img-fluid mx-auto d-block" style="max-width: 40%; margin-top: 30px;"/>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Le contrôleur de liaisons</b>
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    Il encode et décode les paquets bluetooth selon la charge utile et les paramètres liés au canal physique, transport logique et liaisons logiques.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Le gestionnaire de liaisons</b>
                </p>
                <p style="margin-top: 30px;">
                    Il crée, gère et détruit les canaux L2CAP pour le transport des protocoles de services et les flux de données applicatives. Il utilise le protocole L2CAP pour interagir avec son homologue sur les équipements distants.</br></br>
                    Cette couche gère les liens entre les périphériques « maîtres » et « esclaves » ainsi que les types de liaisons (synchrones ou asynchrones).</br></br>
                    C'est le gestionnaire de liaisons qui implémente les mécanismes de sécurité comme :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>l'authentification ;</li>
                    <li>l'appairage (l'association) ;</li>
                    <li>la création et la modification des clés ;</li>
                    <li>et le chiffrement.</li>
                </ul>
                <p style="margin-top: 50px; justify-content: start">
                    L'interface de contrôle de l'hôte
                </p>
                <p style="margin-top: 30px;">
                    Cette couche fournit une méthode uniforme pour accéder aux couches matérielles. Son rôle de séparation permet un développement indépendant du matériel et du logiciel.</br></br>
                    Les protocoles de transport supportés sont Universal Serial Bus (USB) ; PC-Card ; RS-232 ; UART.</br></br>
                    HCI permet un transfert de données à débit maximum, soit 720 kbit/s pour la norme 1.2, et un débit trois fois plus élevé pour la norme 2.0+EDR.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    La couche L2CAP
                </p>
                <p style="margin-top: 30px;">
                    La couche L2CAP (Logical Link Control & Adaptation Protocol) fournit les services de multiplexage des protocoles de niveau supérieur et la segmentation et le réassemblage des paquets ainsi que le transport des informations de qualité de service. Les protocoles de haut niveau peuvent ainsi transmettre et recevoir des paquets jusqu'à 64 Ko. Elle autorise un contrôle de flux par canal de communication.</br></br>
                    La couche L2CAP utilise des canaux logiques.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    Les services</br></br>
                    RFCOMM
                </p>
                <p style="margin-top: 30px;">
                    RFCOMM : signifie « Radio frequency communication (en) ». Ce service est basé sur les spécifications RS-232, qui émule des liaisons séries. Il peut notamment servir à faire passer une communication IP par Bluetooth. RFCOMM est utilisé lorsque le débit des données n'atteint pas plus de 360 kbit/s (par exemple, téléphones mobiles).
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    SDP
                </p>
                <p style="margin-top: 30px;">
                    SDP : signifie « Service Discovery Protocol (en) ». Ce protocole permet à un appareil Bluetooth de rechercher d'autres appareils et d'identifier les services disponibles. Il s'agit d'un élément particulièrement complexe de Bluetooth.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    OBEX
                </p>
                <p style="margin-top: 30px;">
                    OBEX : signifie « OBject EXchange ». Ce service permet de transférer des objets grâce au protocole d'échange développé pour l'IrDA.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    Les profils
                </p>
                <p style="margin-top: 30px;">
                    Un profil correspond à une spécification fonctionnelle d'un usage particulier. Les profils peuvent également correspondre à différents types de périphériques.</br></br>
                    Les profils ont pour but d'assurer une interopérabilité entre tous les appareils Bluetooth.</br></br>
                    Ils définissent :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>la manière d'implémenter un usage défini ;</li>
                    <li>les protocoles spécifiques à utiliser ;</li>
                    <li>les contraintes et les intervalles de valeurs de ces protocoles.</li>
                </ul>
                <p style="margin-top: 30px; justify-content: start">
                    Les différents profils sont :
                </p>
                <ol style="font-size: large; text-align: justify; color: white;">
                    <li>GAP : Generic Access Profile</li>
                    <li>SDAP : Service Discovery Application Profile</li>
                    <li>SPP : Serial Port Profile</li>
                    <li>HSP : Headset Profile</li>
                    <li>DUN : Profile : Dial-up Networking Profile</li>
                    <li>LAN : Access Profile : ce profil est maintenant obsolète ; il est remplacé par le profil PAN</li>
                    <li>ESP : Environmental Sensing Profile</li>
                    <li>Fax Profile</li>
                    <li>GOEP : Generic Object Exchange Profile</li>
                    <li>SP : Synchronization Profile</li>
                    <li>OPP : Object Push Profile</li>
                    <li>FTP : File Transfer Profile</li>
                    <li>CTP : Cordless Telephony Profile</li>
                    <li>IP : Intercom Profile</li>
                    <li>A2DP : Advanced Audio Distribution Profile (profil de distribution audio avancée)</li>
                    <li>AVRCP : Audio Video Remote Control Profile (Commande à distance)</li>
                    <li>HFP : HandsFree Profile</li>
                    <li>PAN : Personal Area Network Profile</li>
                    <li>VDP : Video Distribution Profile</li>
                    <li>BIP : Basic Imaging Profile</li>
                    <li>BPP : Basic Printing Profile</li>
                    <li>SYNC : Synchronisation Profile</li>
                    <li>SAP : SIM Access Profile (permet l'accès à la carte SIM par le téléphone de la voiture et l'utilisation de l'antenne externe)</li>
                    <li>PBAP : PhoneBook Access Profile</li>
                    <li>HIDP : Human Interface Device Profile</li>
                    <li>MAP : Message Access Profile</li>
                </ol>
                <p style="margin-top: 30px;">
                    Treize profils sont définis dans la version 1.1 des spécifications Bluetooth. Ces profils correspondent au comportement général des appareils afin de communiquer entre eux. Ils décrivent une base pour les différents types d'usages et définissent les protocoles à utiliser pour les futurs usages.</br>
                    Depuis la version 2.0 du Bluetooth de nombreux profils ont été ajoutés.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    Le profil d'accès générique
                </p>
                <p style="margin-top: 30px;">
                    Le profil d'accès générique (GAP) est le profil de base dont tous les autres profils héritent. Il définit les procédures génériques de recherche d'appareils, de connexion et de sécurité.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    Mise en œuvre
                </p>
                <p style="margin-top: 30px;">
                    Afin d'échanger des données, les appareils doivent être appairés. L'appairage se fait en lançant la découverte à partir d'un appareil et en échangeant un code. Dans certains cas, le code est libre, et il suffit aux deux appareils de saisir le même code. Dans d'autres cas, le code est fixé par l'un des deux appareils (appareil dépourvu de clavier, par exemple), et l'autre doit le connaître pour s'y raccorder. Par la suite, les codes sont mémorisés, et il suffit qu'un appareil demande le raccordement et que l'autre l'accepte pour que les données puissent être échangées.</br></br>
                    Afin de limiter les risques d'intrusion, les appareils qui utilisent un code préprogrammé (souvent 0000 ou 1234) doivent être activés manuellement, et l'appairage ne peut se faire que durant une courte période.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    Cas de partage d'un périphérique
                </p>
                <p style="margin-top: 30px;">
                    Dans le cas de partages successifs (par exemple un casque audio sans fil connecté à un PC qu'on désire ensuite utiliser avec un téléphone), le premier appareil devra arrêter sa connexion avec le périphérique Bluetooth, tout en conservant les informations à son sujet pour une connexion ultérieure. Ensuite, on a juste à connecter ce périphérique au deuxième appareil, en le faisant découvrir au passage s'il n'est pas déjà enregistré sur celui-ci.</br></br>
                    Les choses se compliquent sensiblement si on a à la fois deux périphériques émetteurs ou plus (par exemple : téléphone, tablette, PC, clavier sans fil...) et deux périphériques récepteurs ou plus (enceintes Bluetooth, casque audio, appareil de salon télécommandé...), car un nouveau couplage sera théoriquement refusé si l'un quelconque des deux appareils a été auparavant couplé ailleurs, même si la connexion (mais non le couplage !) a pris fin27 et que l'émetteur initialement couplé est hors tension. Il doit être mis fin à celui-ci.</br></br>
                    Un appareil n'a en effet pas deux états possibles, mais quatre : éteint, activé, appairé, connecté (et dans les deux derniers cas, à un autre appareil).
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    Différences par rapport au Wi-Fi
                </p>
                <p style="margin-top: 30px;">
                    Le Bluetooth utilise une des plages de fréquences qu'utilise aussi le Wi-Fi (2,4 GHz), ce qui fait qu'un réseau peut brouiller ou perturber l'autre, ou limiter son débit. Le Bluetooth consomme moins d'énergie que le WI-FI, mais il a une portée maximale plus faible, de 10 m dans de bonnes conditions, avec des fonctionnalités réduites et un plus faible nombre de périphériques connectables simultanément.</br></br>
                    Contrairement au Bluetooth, le Wi-Fi impose généralement l'utilisation d'un point d'accès, mais certains constructeurs permettent la connexion directe entre périphériques en utilisant le Wi-Fi Direct, similaire à un Bluetooth à très grande bande passante.
                </p>
                <p style="margin-top: 50px; justify-content: start" id="BLE">
                    <b>Bluetooth à basse consommation</b>
                </p>
                <p style="margin-top: 30px;">
                    Bluetooth à basse consommation ou Bluetooth à basse énergie (en anglais : Bluetooth Low Energy — BLE ou BTLE), anciennement connu sous le nom de Wibree, puis devenu la marque déposée Bluetooth Smart. C'est une technique de transmission sans fil créée par Nokia en 2006 sous la forme d’un standard ouvert basé sur le Bluetooth, qu'il complète mais sans le remplacer. Il est intégré aux normes Bluetooth depuis la version v4.0 publiée en juin 2010 par le Bluetooth SIG.
                </p>
                <img src="../../../../images/bluetooth-5.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Logo du Bluetooth à basse consommation
                </p>
                <p style="margin-top: 30px;">
                    Cette technologie est utilisée en particulier par les applications Covid-19 qui font de la recherche des contacts.</br></br>
                    Elle peut aussi être employée pour assurer un réseau de capteurs sans fil.</br></br>
                    En 2021, Reuters a démenti que cette technologie était employée comme marqueur des vaccinés contre la Covid via une adresse MAC visible avec l'application de détection des périphériques Bluetooth.
                </p>
                <h1 style="margin-top: 70px;"> 
                    Sécurité des protocoles Bluetooth
                </h1>
                <p style="margin-top: 30px;">
                    La sécurité des protocoles Bluetooth est la protection des périphériques et des données transmises selon les normes du standard Bluetooth.</br></br>
                    Bluetooth est un standard de communication dont le but est d'établir des connexions rapidement et sans fil. Différentes normes composent ce standard, afin de donner aux constructeurs de périphériques les informations nécessaires au bon fonctionnement de Bluetooth. Certaines de ces normes définissent de quelle manière la sécurité doit être implémentée. Cela est vrai tant pour le périphérique en lui-même que pour les protocoles de communication à utiliser. Elles indiquent également comment les clefs permettant l'authentification et le maintien des connexions doivent être générées et stockées.</br></br>
                    Malgré ces précautions, la nature même des réseaux créés grâce à Bluetooth rend possible plusieurs types de menaces. On peut en effet craindre que le réseau ne soit scanné pour en découvrir la topologie, ou encore que les données transitant sur les ondes ne soient interceptées. Il se pourrait également que quelqu'un tente d'empêcher un appareil de communiquer. Les menaces sur un réseau si volatile, fonctionnant qui plus est par ondes, sont donc très nombreuses., un nombre important d'attaques ont vu le jour depuis le début de l'utilisation de Bluetooth. Pour chaque catégorie de menaces, une faille dans les spécifications du standard Bluetooth a été trouvée. À l'aide d'outils adaptés, les pirates ont ainsi pu pénétrer des réseaux Bluetooth ou empêcher des périphériques de fonctionner normalement.</br></br>
                    Néanmoins, quelques règles permettent de repérer relativement facilement des attaques en cours, et ainsi protéger son périphérique ou ses données. La détection d'une attaque peut alors déclencher une procédure de prévention afin que cette attaque en particulier ne puisse plus être reproduite sur le même périphérique. Des bonnes pratiques permettent à l'utilisateur de réduire également les risques d'attaque sur ses périphériques.</br></br>
                    Il ne faut néanmoins pas se reposer sur ces contre-mesures, car les spécifications du Bluetooth évoluent sans cesse, et les pirates continuent de les analyser afin d'y trouver de nouvelles vulnérabilités.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Normes</b>
                </p>
                <p style="margin-top: 30px;">
                    Le but du Bluetooth est d'établir une connexion ad hoc ou peer-to-peer entre plusieurs appareils afin d'échanger des données dans un picoréseau, dans la bande de fréquence des 2,4 GHz.</br></br>
                    Il existe plusieurs versions du Bluetooth :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Bluetooth Basic Rate/Enhanced Data Rate (BR/EDR) : Établit une connexion sans fil continue sur des distances relativement courtes (10 m) ;</li>
                    <li>Bluetooth à faible énergie (LE) Permet de courtes rafales de connexions radio, ce qui le rend idéal pour les applications Internet de type (IoT) qui ne nécessitent pas de connexion continue, mais demandent une longue durée de vie de la batterie ;</li>
                </ul>
                <p style="margin-top: 30px;">
                    La mise en œuvre d’un système Bluetooth est spécifiée à partir des normes constituant l’architecture de base du protocole Bluetooth. Le cœur d’un système Bluetooth est divisé en deux parties : la couche contrôleur implémentant la partie matérielle et une couche hôte implémentant la partie logicielle.</br></br>
                    La couche contrôleur est implémentée physiquement via un module RF radio qui permet d’envoyer et recevoir les signaux radio entre deux appareils. La couche liaison est définie dans les systèmes Bluetooth comme la couche assurant le transport des paquets entre les appareils d’un même picoréseau à travers plusieurs canaux :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Basic channel : Canal pour la communication entre deux appareils ;</li>
                    <li>Adapted channel : Canal pour la communication dans le picoréseau ;</li>
                    <li>Inquiry scan : Canal pour l'acquisition des appareils bluetooth aux alentours ;</li>
                    <li>Page scan Canal pour la connexion avec un nouvel appareil ;</li>
                </ul>
                <p style="margin-top: 30px;">
                    Les paquets possèdent un champ header pour distinguer le picoréseau de l’appareil des autres picoréseaux. De plus, les paquets doivent avoir un champ LT_ADDR dans leur header qui spécifie quel transport logique ce paquet utilise. Plusieurs types de transports logiques sont définis via plusieurs protocoles :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>ACL (Asynchronous Connection Less) ;</li>
                    <li>SCO (Synchronous Connection Oriented) ;</li>
                    <li>ASB (Active Slave Broadcast) ;</li>
                    <li>PSB (Parked Slave Broadcast) ;</li>
                    <li>LC (Link Control protocol) ;</li>
                    <li>LMP (Link Manager Protocol) ;</li>
                    <li>LELL (Low-energy Link Layer) ;</li>
                </ul>
                <p style="margin-top: 30px;">
                    L'interface host-controller (HCI) fait la liaison entre la couche hôte et la couche contrôleur en assurant le transfert des événements et des paquets de données. Cette interface assure le transfert d’information pour que la couche hôte puisse découvrir, ajouter et gérer les appareils dans un picoréseau. Sur certains appareils Bluetooth les couches hôte et contrôleur sont implémentées sur le même microprocesseur, l’interface HCI existe mais devient obsolète.</br></br>
                    Les paquets reçus par le HCI sont traités par le protocole L2CAP (Logical Link Control and Adaptation Protocol), dans le cas d’un appareil sans HCI les paquets sont directement envoyés par les liens ACL, PSB et ASB. Ce protocole assure le transports des paquets vers les couches supérieures, la segmentation et le ré-assemblage des paquets.</br></br>
                    Attribute protocol (ATT) définit l’aspect clients/serveur du picoréseau pour assurer l'échange des données une fois la connexion établie.
                </p>
                <img src="../../../../images/bluetooth-6.jpeg" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Description de l'architecture d'un système bluetooth
                </p>
                <p style="margin-top: 30px;">
                    Treize profils sont définis dans la version 1.1 des spécifications Bluetooth. Ces profils correspondent au comportement général des appareils afin de communiquer entre eux. Ils décrivent une base pour les différents types d'usages et définissent les protocoles à utiliser pour les futurs usages. Depuis la version 2.0 du Bluetooth de nombreux profils ont été ajoutés.</br></br>
                    Format des paquets</br></br>
                    Tous les paquets possèdent un header de 8 bit, suivi par une adresse de 32 bits qui correspond a un identifiant unique pour une connexion donnée, enfin une suite variable de bits avec un PDU (Protocol Data Unit) de 2 a 39 octets (en BLE 4.0 et 4.1) contenant la charge utile du message suivi d'un CRC (Cyclic redundancy check) de 24 bits.
                </p>
                <img src="../../../../images/bluetooth-7.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Implémentation de la sécurité</b>
                </p>
                <p style="margin-top: 30px;">
                    Modes de sécurité</br></br>
                    Les appareils Bluetooth sont implémentés selon le GAP (Generic Access Profile) correspondant à un ensemble d’exigences obligatoires que doivent respecter les appareils Bluetooth pour qu'ils puissent communiquer entre eux. Plusieurs niveaux de sécurité sont définis dans le GAP :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Mode 1 :</li>
                    <ul>
                        <li>Ce mode est non sécurisé pour toute opération</li>
                        <li>Aucune procédure d’initialisation sécurisée</li>
                        <li>Les appareils qui utilisent ce mode ne peuvent communiquer qu’avec les appareils de ce même mode.</li>
                    </ul>
                    <li>Mode 2</li>
                    <ul>
                        <li>Fournit un niveau de sécurité au niveau application après établissement d'une liaison avec un autre appareil.</li>
                        <li>Il n’y a aucune procédure sécurisée avant l’établissement d’un canal de communication.</li>
                        <li>Niveau de sécurité implémenté au niveau du protocole minimal d’échange de donnée L2CAP.</li>
                    </ul>
                    <li>Mode 3</li>
                    <ul>
                        <li>Fournit un niveau de sécurité avant l’établissement du canal de communication.</li>
                        <li>Chiffrement sécurisé au niveau de la liaison avec un autre équipement Bluetooth : LMP protocol.</li>
                    </ul>
                </ul>
                <p style="margin-top: 30px;">
                    Si un service ou un service connexe effectue une demande avec un mode de sécurité différent, le mode de sécurité le plus élevé est forcé afin de traiter la demande.</br></br>
                    Gestions des clés</br></br>
                    La gestion et l'utilisation des clés permet aux protocoles Bluetooth d'établir et de maintenir une connexion entre plusieurs appareils d'un même picoréseau.</br></br>
                    Les clés de communication peuvent être des combinaisons de plusieurs types de clés, les Unit keys, les clés de combinaisons, les clés maîtres et les clés d’initialisation.</br></br>
                    Plusieurs entités permettent d’assurer une communication sécurisée entre plusieurs équipements Bluetooth : une adresse publique unique de 48 bit (BD-ADDR - Bluetooth Device address) utilisée pour identifier quel appareil est en train d'envoyer les données, aucun autre appareil ne doit avoir cette adresse. Cette adresse est définie par l’IEEE (Institute of Electrical and Electronics Engineers).</br></br>
                    Une clé secrète d'authentification de 128 bit, l’appareil qui génère aléatoirement cette clé.</br></br>
                    Une seconde clé secrète pour le chiffrement des données, la longueur de cette clé dépend du niveau de sécurité de la transaction, cette longueur varie entre 8 et 128 bit. Un nombre aléatoire est généré à chaque transaction de données, l’appareil génère automatiquement ce nombre pour l'utiliser dans les différentes processus de chiffrement et d'authentification.
                </p>
                <img src="../../../../images/bluetooth-8.jpg" class="img-fluid mx-auto d-block" style="max-width: 75%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Gestion des clés dans les protocoles bluetooth
                </p>
                <p style="margin-top: 30px;">
                    Clé de liaison</br></br>
                    La clé de liaison est un nombre de 128 bit généré aléatoirement, elle est échangée entre plusieurs appareils Bluetooth pour effectuer toutes les transactions sécurisées. La clé est utilisée pour la routine d’authentification et c’est l’un des paramètres pour créer la clé de chiffrement.</br></br>
                    C’est une clé semi-permanente, elle est stockée dans la mémoire vive de l’appareil et peut dont être réutilisée lorsque la session est terminée. La clé de liaison peut s'utiliser dans le processus d'authentification entre plusieurs appareils Bluetooth. La durée de vie de cette clé dépend uniquement de la durée de vie d’une session.</br></br>
                    Clé d’initialisation</br></br>
                    La clé d’initialisation est utilisée pendant l’initialisation d’une communication entre deux appareils Bluetooth quand aucune clé de liaison ou autre combinaison de clé n'existe. Durant l’étape d’initialisation le code PIN des deux appareils doit être saisi. La clé est le résultat de l'algorithme E22 avec le code PIN de l'appareil, l’adresse de l’autre appareil Bluetooth et un nombre 128 bit généré aléatoirement en entrée.
                </p>
                <img src="../../../../images/bluetooth-9.jpeg" class="img-fluid mx-auto d-block" style="max-width: 65%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Clé Initialisation
                </p>
                <p style="margin-top: 30px;">
                    Clé de combinaison</br></br>
                    La clé de combinaison est construite à partir d’informations de deux appareils. Elle est créée durant la phase d’initialisation, les deux appareils génèrent leur clé en même temps. Les deux appareils utilisent l’algorithme E21 avec un nombre généré aléatoirement et leur BD_ADDR en entrée. Ils échangent ensuite leurs nombre aléatoire de manière sécurisée afin de calculer leur clé de combinaison.</br></br>
                    Clé Maître</br></br>
                    La clé maître est une clé temporaire remplaçant l’actuelle clé de liaison. Elle est utilisée quand l'appareil maître veut transmettre des informations à plus d’un destinataire. L’appareil maître génère une clé maître avec l’algorithme E22 et 2 nombres aléatoires de 128 bit.
                </p>
                <img src="../../../../images/bluetooth-10.jpeg" class="img-fluid mx-auto d-block" style="max-width: 65%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Construction de la clé maître dans le protocole bluetooth
                </p>
                <p style="margin-top: 30px;">
                    Appairage</br></br>
                    L’appairage (ou pairing en anglais) permet l’association entre deux terminaux Bluetooth. Les clefs de liaison, permettant de sécuriser les canaux de communication entre les deux terminaux, sont créés lors de cette phase.</br></br>
                    Deux méthodes sont proposées : le « Legacy pairing » et le « Secure simple pairing ».</br></br>
                    Le Legacy pairing est utilisé uniquement si un des terminaux n’est pas compatible avec une version supérieure à 2.0. Il se base sur un code PIN à 4 chiffres. La clef de liaison est générée à partir du code PIN. Ce mode n’offre pas de protection contre les attaques de l’intercepteur.</br></br>
                    Le Secure simple pairing est utilisé par les terminaux supportant une norme supérieure à 2.0. Il se base sur un secret partagé par l’algorithme Diffie-Hellman. La clef de liaison est générée à partir de ce secret partagé. Ce mode offre une protection contre les attaques de l’intercepteur et contre les écoutes passives.</br></br>
                    Les différentes phases du Secure simple pairing, définies par la norme 5.0, sont :
                </p>
                <ol style="font-size: large; text-align: justify; color: white;">
                    <li>Échange des paramétrages d’entrée/sortie</li>
                    <li>Échange d’un secret via l’algorithme Diffie-Hellman</li>
                    <li>Première phase d’authentification via la vérification du code PIN généré par les terminaux. Quatre modèles d’association peuvent être utilisés</li>
                    <ul>
                        <li>Comparaison numérique : peut être utilisée si les deux terminaux peuvent afficher un code PIN. Ce dernier est généré et est affiché par les deux terminaux. L’association continue après confirmation manuelle que les codes PIN sont identiques sur les deux terminaux</li>
                        <li>« Just work » : peut être utilisé si un des deux terminaux ne peut pas afficher de code PIN. Celui-ci est généré et l’association continue après confirmation manuelle sans vérifier que les codes PIN sont identiques. Cette méthode ne permet pas de protéger la communication de l'attaque de l'homme au milieu</li>
                        <li>Passphrase : peut être utilisé si un des deux terminaux peut afficher des chiffres et si l'autre permet d'entrer des chiffres mais n’offre pas d’affichage. L’association continue si le code PIN entré dans le deuxième terminal est identique à celui du premier terminal</li>
                        <li>Out-of-Band : la découverte de terminaux et l'échange des données cryptographiques pour la création des clefs sont faits hors ligne, par exemple via NFC</li>
                    </ul>
                    <li>Création des clefs de liaison à partir du secret partagé lors de l’étape 2.</li>
                    <li>Deuxième phase d’authentification via la vérification que les 2 terminaux partagent la même clef de liaison, décrite ci-dessous</li>
                    <li>Création de la clef de chiffrement si l’option est activée</li>
                </ol>
                <p style="margin-top: 30px;">
                    Authentification</br></br>
                    L'authentification bluetooth utilise une technique de question/réponse, un appareil vérifie si l'autre appareil connait la clé de liaison. Le programme procède ensuite à l'authentification avec la clé de liaison actuelle, le processus nécessite que les deux parties partagent la même clé de liaison.</br></br>
                    Pour l'étape d'authentification, le maître envoie un numéro aléatoire au demandeur. Ensuite, les deux parties utilisent la fonction d'authentification avec le numéro généré aléatoirement et la clé de liaison pour produire une réponse signée, enfin le maître vérifie que les deux réponses sont valides.</br></br>
                    Si l'authentification échoue, une nouvelle tentative est initialisée après une courte période, cette période est doublée pour chaque tentatives supplémentaires sur la même adresse.
                </p>
                <img src="../../../../images/bluetooth-11.jpeg" class="img-fluid mx-auto d-block" style="max-width: 65%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Authentification Bluetooth
                </p>
                <p style="margin-top: 30px;">
                    Chiffrement des données</br></br>
                    Les données utilisateurs sont protégées par un chiffrement du paquet du payload. Le code d’accès et l'entête ne sont jamais chiffrés. Le chiffrement du payload est effectué par un algorithme de chiffrement E0 qui se resynchronise à chaque nouveau payload.</br></br>
                    L'algorithme de chiffrement E0 est réalisé en trois blocs :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Initialisation de la clé du payload</li>
                    <li>Génération des keys stream</li>
                    <li>Réalisation du chiffrement et déchiffrement</li>
                </ul>
                <img src="../../../../images/bluetooth-12.jpeg" class="img-fluid mx-auto d-block" style="max-width: 65%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Chiffrement des données depuis un système bluetooth
                </p>
                <p style="margin-top: 30px;">
                    Le bloc d'initialisation combine les bits entrants dans un ordre approprié et les décale dans les 4 LFSRs du bloc de génération des key stream. Plusieurs modes de chiffrements sont possibles si l'appareil utilise une clé semi-permanente ou la clé maître, dans le cas où l’appareil utilise une clé semi-permanente, la diffusion en broadcast n'est pas chiffrée car la clé est utilisée pour plus d'une session donc potentiellement moins sécurisée. Individuellement, le trafic peut être chiffré ou non. Dans le cas où la clé maître est utilisée, soit rien n'est chiffré, soit la diffusion en broadcast n'est pas chiffrée mais individuellement le trafic est chiffré avec la clé maître, soit tout le trafic est chiffré avec la clé maître.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Catégories de menaces</b>
                </p>
                <p style="margin-top: 30px;">
                    Le Bluetooth est devenu un des principaux standards de communication sans fil. Cependant, cette technologie de par sa nature ouverte présente de nombreuses menaces sur ses divers périphériques, notamment sur les téléphones portables.</br></br>
                    Les menaces peuvent être classées selon les catégories suivantes :</br></br>
                    Surveillance</br>
                    Le but principal de la surveillance est d'observer et / ou de collecter des informations du réseau des périphériques Bluetooth comme leur position, les autres appareils avec lesquels ils communiquent ou toute donnée venant du réseau en lui-même. Les éléments récupérés servent à une prévision d'attaque ou une étude du réseau afin d'en connaître l'architecture ou les acteurs principaux.</br></br>
                    Range extension</br>
                    La Range Extension ou extension de portée n'est pas une menace directe en elle-même puisque son seul but est d'étendre la portée d'un signal Bluetooth. Elle est donc utilisée pour permettre à d'autres menaces d'être mise à l’œuvre depuis une position plus éloignée ou sur une plus grande échelle. En effet, la portée de Bluetooth étant limitée, 240 m pour la version 5, un attaquant souhaitera augmenter sa portée maximum pour réaliser son attaque ou se distancer de la source de l'attaque.</br></br>
                    Obfuscation</br>
                    L'obfuscation est une technique utilisée pour brouiller l’identité de l'attaquant en ajoutant des informations inutiles, corrompues ou chiffrées à l'information. L'utilité de brouiller son identité est de passer au travers la surveillance d'un réseau ou de communiquer sans que le message soit clairement lisible. Cette menace est d'autant plus faisable puisque quelle que soit la version de Bluetooth, il n'existe pas d'authentification par utilisateur sauf pour l'appareil en lui-même.</br></br>
                    Fuzzer</br>
                    Le Fuzzer consiste à envoyer des données non standard afin de recevoir une réponse différente ou non prévue du périphérique Bluetooth. Il peut être utile pour découvrir des bugs ou des failles de sécurité sur l'appareil. Le comportement voulu est de provoquer un Buffer Overflow, une Attaque par déni de service ou des injections SQL soit pour arrêter, rendre hors-service ou obtenir des informations grâce à la mauvaise réaction face à l'envoi d'une erreur.</br></br>
                    Sniffing</br>
                    Le Sniffing est l'action de capturer des informations du trafic Bluetooth entre deux appareils sans aucune interaction directe avec ceux-ci. Elle est utilisée pour identifier les acteurs de la communication, récupérer les données d'un échange ou se faire passer par un des deux communicants et essayer une attaque de l'homme du milieu. Une fois l'adresse du périphérique Bluetooth obtenue (la BD_ADDR) on peut l'associer à un utilisateur et suivre ses activités ce qui enfreint les principes de vie privée.</br></br>
                    DoS</br>
                    L'Attaque par déni de service (Denial Of Service) consiste à saturer le trafic de données jusqu'à ce que le matériel refuse toute communication. Cette attaque peut être facilement réalisée et implémentée dans différents langages. Une interaction avec le périphérique et le programme réalisant le DoS suffit pour mettre en place ce type d'attaque.</br></br>
                    Malware</br>
                    Les menaces de type logiciel malveillant sont des attaques portées grâce à un logiciel dont le seul but est d'endommager ou d'extraire des informations d'un appareil. Le malware peut être par exemple un cheval de Troie qui s'introduit dans l'appareil Bluetooth voire les autres périphériques connectés pour les infecter.</br></br>
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Faiblesses connues</b>
                </p>
                <p style="margin-top: 30px;">
                    À travers son évolution, le protocole Bluetooth a connu de nombreuses vulnérabilités due à sa communication sans fil. Bien que certaines furent corrigées, il existe toujours dans les versions actuelles, des failles qui peuvent être exploitées.</br></br>
                    Dans les versions antérieures à 2.1
                </p>
                <img src="../../../../images/bluetooth-13.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 30px; justify-content: start">
                    Dans les versions antérieures à 4.0
                </p>
                <img src="../../../../images/bluetooth-14.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 30px; justify-content: start">
                    Depuis sa création jusqu'à la version actuelle
                </p>
                <img src="../../../../images/bluetooth-15.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Attaques</b>
                </p>
                <p style="margin-top: 30px;">
                    Exemples d'attaques</br></br>
                    Bluejacking</br>
                    Le Bluejacking (de l'anglais « Blue » de Bluetooth et « to jack », prendre en otage), est une attaque consistant à envoyer un message visible non désiré à un appareil mobile via la fonctionnalité vCard. Ce type d'attaque est inoffensif pour l'appareil cible car l'attaquant n'obtient a aucun moment le contrôle de celui-ci, toutefois le possesseur du terminal peut penser être victime d'une intrusion dans sa vie privée. Cette pratique est utilisée, entre autres, pour diffuser des publicités sur les appareils à portée d'un magasin.</br></br>
                    Bluesnarfing</br>
                    Le Bluesnarfing (de l'anglais « to snarf », manger consommer gloutonnement), est une attaque consistant à extraire des informations personnelles d'un terminal. Dans ces informations on peut retrouver des données facilement accessibles sur mobile notamment, telles que le calendrier, les images, les contacts ainsi que les SMS. Contrairement au Blue Jacking cette attaque ne se contente pas d'envoyer des informations inoffensives aux terminaux mais elle a pour but le vol des informations privées.</br>
                    Une version avancée du BlueSnarf appelée BlueSnarf++ permet également d’accéder au système de fichier de l'appareil cible.</br></br>
                    Bluebugging</br>
                    Le Bluebugging (en) (de l'anglais « bugging », l'action de placer un mouchard), est une attaque similaire au Blue Snarfing, où l'attaquant ne se content pas de voler des informations disponible sur le terminal attaqué, mais laisse derrière lui un mouchard capable d'envoyer des informations même lorsque le lien Bluetooth est rompu, permettant à l'attaquant de récupérer et d'écouter des appels passés depuis l'appareil attaqué.</br></br>
                    Bluetracking</br>
                    Le Bluetracking (de l'anglais « track », suivre), est une technique qui consiste à placer un appareil qui écoute et enregistre le passage de tous les autres appareils à sa portée. L'attaquant peut donc se construire une base de données contenant les adresses MAC de terminaux, leur position et la durée durant laquelle ils sont à portée. Cette pratique ne laisse pas de traces et peut servir pour de futures attaques puisque l'on peut déterminer l'emplacement d'un certain terminal s'il se rend régulièrement au même endroit sur une même plage horaire.</br></br>
                    Bluesnipping</br>
                    Le Bluesnipping est une technique utilisée pour améliorer grandement la portée d'un signal Bluetooth afin de porter une attaque depuis une distance éloignée.</br></br>
                    Man-in-the-Middle Attack</br>
                    L'attaque Man-in-the-Middle est une attaque où un intrus se connecte à deux terminaux et fait croire à ces terminaux qu'ils sont connectés directement l'un à l'autre, il contrôle pourtant le trafic et peut écouter ou modifier les échanges entre les deux terminaux.</br></br>
                    Épuisement de batterie</br>
                    Diverses attaques permettent de vider rapidement la batterie d'un appareil connecté en Bluetooth en provoquant une utilisation intensive et inutile du protocole. Parmi ces attaques on peut retrouver: Ping of Death Flood, BlueSpam Flood, Blueper Flood ou encore BlueSmack Flood. Les attaques Blueper Flood ou BlueSmack Flood peuvent être qualifiées de DDoS, mais lorsque la quantité de requêtes est contrôlée, le service continue de marcher normalement et consomme de la batterie.</br></br>
                    Cabir</br>
                    Cabir est le nom d'un ver informatique infectant les mobiles, développé pour infecter des terminaux tournant sous Symbian OS, il utilise la fonction "Object Push Profile" pour se propager via Bluetooth sur les autres terminaux à portée. Ce virus est inoffensif car il ne fait que se répliquer et affiche le message "Caribe" au démarrage du téléphone, il est pourtant une preuve de concept sur le développement de virus sur mobile pouvant se répandre entre les terminaux et reste le premier ver pouvant infecter les mobiles découverts.</br></br></br>
                    Outils d'attaque</br></br>
                    Pour mettre en place les différentes attaques citées ci-dessus, de nombreux outils ont vu le jour. En voici quelques exemples ainsi que l'utilisation qui peut en être faite.</br></br>
                    BlueScanner</br>
                    BlueScanner est un programme écrit en Bash qui permet de récupérer des informations sur les dispositifs Bluetooth alentours sans demander d'appariement.</br></br>
                    Blooover</br>
                    Trifinite a publié en décembre 2005 Blooover II, la seconde version de son logiciel d'attaques Bluetooth qui fonctionne sur téléphone. Cet outil permet notamment à un attaquant de se connecter aux systèmes d'oreillettes sans fil des voitures vulnérables et d'enregistrer les conversations en cours dans cette voiture.</br></br>
                    Bluetooth Stack Smasher</br>
                    Publié par SecuObs en 2006, BSS (Bluetooth Stack Smasher) est un outil qui permet de stresser le protocole L2CAP d'un dispositif Bluetooth afin d'obtenir des informations sur ce dernier, ou le rendre non-fonctionnel. Bien que le résultat le plus courant de ce genre d'attaques soit un simple arrêt de l'appareil, BSS représente néanmoins un pas en avant pour ceux qui souhaitent implémenter des logiciels plus robustes de détection de failles d'implémentation des protocoles Bluetooth.</br></br>
                    BT-Crack</br>
                    BT-Crack est un outil qui permet de reproduire d'implémenter l'attaque Cracking the Bluetooth PIN.</br></br>
                    Kali Linux</br>
                    Kali Linux est la nouvelle version de Backtrack. Kali Linux est une plateforme permettant des tentatives d'intrusion qui tourne sur Debian et est disponible en Live CD. C'est à ce jour un des outils les plus puissants pour faire des tentatives d'intrusions. Il possède notamment des extensions comme Redfang qui permet de dévoiler les appareils Bluetooth non-visibles à proximité.</br></br></br>
                    Avec l'arrivée de la version 4 et 5 de Bluetooth qui ont considérablement augmenté sa portée, le nombre d'outils a crû rapidement. L'intégration de Bluetooth aux appareils de l'internet des objets rend également les attaques plus intéressantes pour les pirates. C'est pourquoi cette liste n'est pas exhaustive et continuera de grandir à mesure que de nouveaux outils et méthodes de tests d'intrusions verront le jour.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Contre-mesures</b>
                </p>
                <p style="margin-top: 30px;">
                    Afin de se prémunir contre les attaques sur Bluetooth, il faut tout d'abord trouver des méthodes de détection de ces attaques. Quelques techniques permettent de repérer un trafic anormal lors d'échanges de données. Une fois ces attaques découvertes, on peut alors mettre en place des systèmes permettant de contrer l'attaque. Cela signifie qu'il faut la stopper tout en protégeant le périphérique, tout en réduisant au maximum les perturbations sur les échanges en cours. Des mesures doivent également être mises en place afin d'empêcher l'attaquant de réitérer son attaque. Certaines mesures simples permettent également à l'utilisateur de limiter au maximum les risques de subir une attaque.</br></br>
                    Détection des attaques</br></br>
                    L'analyse du trafic d'un appareil permet de déceler des anomalies dans l'utilisation de Bluetooth, et ainsi repérer des tentatives d'intrusions. Quelques règles simples d'analyse permettent de détecter des attaques de différents types :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Les tentatives de connexion répétées qui échouent peuvent indiquer une attaque en ligne visant à découvrir le PIN de la victime;</li>
                    <li>Des connexions et déconnexions répétées peuvent indiquer une attaque par déni de service;</li>
                    <li>Un nombre important de transmissions NAK peut indiquer une attaque Big NAK. Cela va causer une boucle de retransmission infinie sur le périphérique;</li>
                    <li>Des délais anormalement longs peuvent indiquer une attaque par le milieu car l'attaquant perd un certain temps pour retransmettre les paquets à la destination;</li>
                    <li>Des réceptions répétées de paquets POLL peuvent indiquer qu'un périphérique tente d'empêcher votre appareil de passer en mode veille. En effet, un paquet POLL est normalement envoyé par un maître pour vérifier si l'esclave est toujours en vie. Un périphérique esclave recevant un paquet POLL est obligé de répondre. Dans le cadre d'une attaque, cela peut forcer la victime à ne pas entrer en mode d'économie d'énergie ou en mode veille;</li>
                    <li>Un taux anormal d'erreurs de bits peut indiquer que l'attaquant brouille la couche physique;</li>
                    <li>Un trafic élevé entre deux périphériques. Cela peut indiquer que l'attaquant tente une attaque par épuisement de la batterie;</li>
                    <li>Deux BD_ADDR identiques dans la portée de vulnérabilité peuvent indiquer que l'attaquant utilise une attaque de duplication du BD_ADDR pour empêcher les victimes d'échanger des données, ou même se faire passer pour elles;</li>
                    <li>Une requête L2CAP pour le plus grand taux de données possible ou la plus faible latence possible est suspecte. Si une telle requête est acceptée, alors les périphériques légitimes ne pourront pas avoir accès au service dans un temps raisonnable car tout le débit sera réservé pour l'attaquant;</li>
                    <li>Des tentatives de connexion surprenantes ou les requêtes de transfert de données depuis des hôtes inconnus peuvent indiquer qu'un virus ou un ver tente d'infecter le périphérique;</li>
                    <li>Des périphériques qui demandent une clef de chiffrement inférieure à 128bits souhaitent probablement attaquer le système cryptographique de l'appareil;</li>
                    <li>Une discordance dans les signatures des ondes radio indique une tentative d'usurpation d'identité. En effet, chaque appareil ayant une signature radio qui lui est propre, un changement de signature pendant une connexion est le signe que l'émetteur n'est plus celui qu'il prétend être;</li>
                    <li>Les demandes de connexion en mode JW quand l'appareil peut utiliser un mode plus sécurisé sont à proscrire. Cela peut indiquer qu'une attaque par l'homme du milieu est en cours.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Un système de surveillance peut alors être implémenté. Ce système aurait besoin de connaître certaines informations concernant les autres périphériques du picoréseau auquel l'appareil est connecté, comme la signature de ses ondes radio par exemple. Ainsi, ce système pourrait détecter les tentatives d'attaques et ainsi déclencher un système de prévention des attaques manuel ou automatique. Un système automatique est fortement recommandé. Cependant, si aucun système de prévention d'attaques n'est implémenté, l'utilisateur serait néanmoins immédiatement prévenu.</br></br></br>
                    Prévention des attaques</br></br>
                    Afin de traiter les attaques détectées par le système de détection, un système de prévention d'attaques doit être implémenté. Ce système a pour but d'empêcher l'attaque de continuer, tout en permettant au périphérique de fonctionner le plus normalement possible. Cela fonctionne en deux étapes.</br></br>
                    Tout d'abord, ce système recevrait un message d'alerte de la part du système de détection d'erreur. Il doit alors instantanément déconnecter le périphérique afin de stopper l'attaque au plus vite. Certains types d'attaques nécessitant également des demandes répétées de connexion, le système doit refuser toute demande d'appariement pendant un temps prédéterminé.</br></br>
                    Dans un second temps, il sera possible de retenir un maximum d'informations possible concernant l'attaquant afin d'empêcher de nouvelles tentatives d'attaques de sa part. On peut notamment garder l'adresse de l'attaquant, son nom public, les aptitudes du périphérique attaquant ainsi que sa signature d'ondes radio.</br></br>
                    Il faut cependant prendre garde, car l'implémentation de ces solutions n'est pas possible sur tous les périphériques. En effet, Bluetooth est implémenté dans des appareils qui possèdent parfois trop peu de mémoire ou de capacité de calcul pour permettre une utilisation de solutions de détection et de traitement des attaques. C'est sur ce point que se basent la majorité des attaques afin de ne pas être bloquées.</br></br></br>
                    Bonnes pratiques d'utilisation</br></br>
                    Pour se prémunir contre les attaques sur son périphérique Bluetooth, plusieurs solutions doivent être mises en place. Tout d'abord, d'un point de vue de l'utilisateur, il est important de ne pas utiliser son périphérique n'importe où et n'importe comment. Il faut éteindre son périphérique quand il n'est pas utilisé, et le rendre non-détectable par les périphériques alentours sauf quand c'est souhaité. Il ne faut pas accepter toutes les connexions, et taper son mot de passe à l'abri des regards indiscrets. Les mots de passe doivent être suffisamment longs et aléatoires pour ne pas être devinés. Lorsqu'un périphérique est perdu ou volé, il faut supprimer la connexion à ce périphérique sur tous les appareils qui s'y sont déjà connecté.</br></br>
                    Ensuite, il faut configurer son périphérique. En effet, les paramètres par défaut ne sont souvent pas suffisamment sécurisés. L'installation d'un antivirus peut également permettre de se prémunir contre les vers. Le mode non-secure et le modèle Just Work ne doivent pas être utilisés pour transmettre des données confidentielles. L'authentification mutuelle doit être activée lors de l'appairage. Le chiffrement pour toutes les communications en broadcast doit être également activé. Enfin, il faut régler la puissance des appareils au minimum nécessaire, afin que la portée du périphérique n'excède pas celle escomptée.</br></br>
                    Concernant les clefs d'appairage et de chiffrement, il ne faut pas utiliser de clef unique mais des combinaisons de clefs pour éviter la réutilisation de la clef d'appairage. Les clefs de chiffrement doivent avoir une longueur d'au moins 128bits pour empêcher les attaques par force brute. Une longueur supérieure augmentera encore le temps nécessaire à une telle attaque.</br></br>
                </p>

            </div>
        </div>


        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.bluetooth.com/learn-about-bluetooth/tech-overview/" target="_blank">Bluetoot.com - Bluetooth Technology Overview</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Bluetooth" target="_blank">Wikipedia - Bluetooth</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Bluetooth_%C3%A0_basse_consommation" target="_blank">Wikipedia - Bluetooth à basse consommation</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/S%C3%A9curit%C3%A9_des_protocoles_Bluetooth" target="_blank">Wikipedia - Sécurité des protocoles Bluetooth</a>
                </h6>

                

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>