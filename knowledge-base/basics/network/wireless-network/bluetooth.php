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
                            <li class="breadcrumb-item"><a href="../../../../knowledge-base.php">Knowledge Base</a></li>
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
                    <b>Le gestionnaire de liaisons</b>
                </p>
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
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Bluetooth" target="_blank">Wikipedia - Bluetooth</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/IEEE_802.11i" target="_blank">Wikipedia - IEEE 802.11i</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>