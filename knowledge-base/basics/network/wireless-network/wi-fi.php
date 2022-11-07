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
    <title>Réseaux sans fil - Wi-fi</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Wi-fi</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Wi-fi
                </h1>
                <p style="margin-top: 30px;"> 
                  Le Wi-Fi, aussi orthographié wifi, est un ensemble de protocoles de communication sans fil régis par les normes du groupe IEEE 802.11 (ISO/CEI 8802-11). Un réseau Wi-Fi permet de relier par ondes radio plusieurs appareils informatiques (ordinateur, routeur, smartphone, modem Internet, etc.) au sein d'un réseau informatique afin de permettre la transmission de données entre eux.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="group col-sm-8">  
                <img src="../../../../images/wifi.png" class="img-fluid float-right" style="max-width: 49.5%; margin-left: 5.5%; margin-top: 30px;"/>
                <img src="../../../../images/wifi-2.png" class="img-fluid float-left" style="max-width: 35%; margin-left: 2%; margin-top: 30px;"/>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <p style="margin-top: 45px;"> 
                    Apparues pour la première fois en 1997, les normes IEEE 802.11 (ISO/CEI 8802-11), qui sont utilisées internationalement, décrivent les caractéristiques d’un réseau local sans fil (WLAN). La marque déposée « Wi-Fi » correspond initialement au nom donné à la certification délivrée par la Wi-Fi Alliance (« Wireless Ethernet Compatibility Alliance », WECA), organisme ayant pour mission de spécifier l’interopérabilité entre les matériels conformes à la norme 802.11 et de vendre le label « Wi-Fi » aux matériels répondant à ses spécifications. Pour des raisons de facilité d’usage (et de marketing) le nom de la norme se confond aujourd’hui avec le nom de la certification (c’est le cas en France, en Espagne, au Canada, en Suisse, en Tunisie…). Ainsi, un réseau Wi-Fi est en réalité un réseau répondant à une des normes IEEE 802.11. Dans d’autres pays (Allemagne et États-Unis par exemple) de tels réseaux sont aussi nommés par le terme générique WLAN : Wireless LAN (réseau local sans fil).</br></br>
                    Grâce aux normes Wi-Fi, il est possible de créer des réseaux locaux sans fil à haut débit. En pratique, le Wi-Fi permet de relier des smartphones, ordinateurs portables, des objets connectés ou autres périphériques à une liaison haut débit. Les débits se sont accrus avec les nouvelles normes Wi-Fi. Voici les débits maximums théoriques (et réels) pour les principales normes : 11 Mbit/s (6 Mbit/s) en 802.11b (1999), 54 Mbit/s (25 Mbit/s) en 802.11a (1999) et 802.11g (2003), 600 Mbit/s en 802.11n (2009), 1,3 Gbit/s en 802.11ac (Wi-Fi 5, 2013) et 10,5 Gbit/s en 802.11ax (Wi-Fi 6, 2021).</br></br>
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>IEEE 802.11</b>
                </p>
                <p style="margin-top: 45px;"> 
                    IEEE 802.11 est un ensemble de normes concernant les réseaux sans fil locaux (le Wi-Fi). Il a été mis au point par le groupe de travail 11 du comité de normalisation LAN/MAN de l'IEEE (IEEE 802). Le terme IEEE 802.11 est également utilisé pour désigner la norme d'origine 802.11.
                </p>
                <p style="margin-top: 40px; justify-content: start">
                    <b>Présentation de la norme</b>
                </p>
                <p style="margin-top: 45px;"> 
                    IEEE 802.11 fait partie d'un ensemble de normes édictées sous l'égide du comité de standardisation IEEE 802 à partir de 1997. Celui-ci constitue un tout cohérent servant de base de travail aux constructeurs développant des équipements et les services chargés de l'implémentation des infrastructures réseaux à liaison filaire et sans fil.</br></br>
                    Les schémas ci-dessous sont une adaptation du synopsis du standard IEEE 802 consigné dans la section "introduction" de la plupart des normes publiées sous ce standard. Celui-ci donne une vue d'ensemble des groupes de normes qui sont à la base du développement des technologies relatives à l'interconnexion des réseaux informatiques par liaison filaire ou sans fil. Toutes les normes du standard IEEE 802 sont développées en relation avec le Modèle OSI.
                    L'ensemble articulé autour de la norme IEEE 802.11 se décompose en éléments identifiés comme suit :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>802 : standard général de base pour le déploiement de réseaux numériques locaux ou métropolitains à liaison filaire ou sans fil ;</li>
                    <li>802.1 : gestion des réseaux ;</li>
                    <li>802.10 : sécurisation des échanges pour les systèmes à liaison filaire ou sans fil (Token Ring, Ethernet, Wi-Fi, WiMAX) ;</li>
                    <li>802.11 : spécifications pour l'implémentation de réseaux numériques locaux à liaison sans fil ;</li>
                    <li>802.2 : description générale de la sous-couche Logical Link Control.</li>
                </ul>
                <img src="../../../../images/wifi-6.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <img src="../../../../images/wifi-3.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    La norme 802.11 dans le modèle OSI
                </p>
                <p style="margin-top: 40px; justify-content: start">
                    <b>Tableau des principaux amendements du standard IEEE 802.11</b>
                </p>
                <p style="margin-top: 45px;"> 
                    Les standards 802.11 ont été complétés et améliorés à plusieurs reprises depuis l'approbation du standard initial par l'IEEE en 1997. Ces améliorations sont définies comme étant des amendements au standard initial, et leur rédaction est gérée et validée par le groupe de travail 802.11 de l'IEEE. La principale application commerciale est la technologie Wi-Fi qui s'appuie sur ces spécifications. Les principaux amendements applicables, qui modifient de manière significative les techniques de transmission utilisées (couche PHY), sont les suivants :
                </p>
                <img src="../../../../images/wifi-4.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 45px;"> 
                    D'autres amendements qui concernent principalement la couche MAC du standard, la sécurité d'accès ou l'interfonctionnement entre réseaux ont aussi été validés :
                </p>
                <img src="../../../../images/wifi-5.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 45px;"> 
                    En 2007, puis en 2012, 2016 et 2020 la plupart des amendements à la norme 802.11 (a, b, d, e, g, h, i, j puis r, y, w et n) ont été intégrés dans la norme par le groupe IEEE 802.11 et sont disponibles sous la forme d'un document unique.</br></br>
                    802.11ac</br></br>
                    IEEE 802.11ac (ou Wi-Fi 5) est le standard IEEE 802.11 publié en décembre 2013. Il permet un débit plus élevé dans la bande des 5 GHz. Cette spécification permet un débit global multistations de plusieurs gigabits par seconde et un débit crête typique pour une seule liaison d'au moins 430 mégabits par seconde (avec 4 canaux agrégés), en utilisant des bandes de fréquence radio plus larges, le MIMO (Multiple-Input Multiple-Output) et une modulation plus sophistiquée.</br></br>
                    802.11ax</br></br>
                    IEEE 802.11ax (ou Wi-Fi 6) est le dernier standard IEEE 802.11, publié le 19 mai 2021. Optimisant l'utilisation du spectre sur une bande plus large (potentiellement de 1 à 7,1 GHz), ce standard permet d'augmenter encore le débit nominal (37 % de mieux à bandes de fréquences égales) mais encore plus en crête (jusqu'à un facteur 4), tout en diminuant la latence (de potentiellement 75 %). Dès 2017 pour les points d'accès et 2019 pour les terminaux, certains constructeurs ont commencé à commercialiser du matériel compatible avec cette norme.
                </p>
                <p style="margin-top: 40px; justify-content: start">
                    <b>Comparaison des caractéristiques des normes IEEE 802.11</b>
                </p>
                <img src="../../../../images/wifi-7.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Technique</b>
                </p>
                <p style="margin-top: 35px;"> 
                    Structure (couches du protocole)
                    Les normes 802.11 s’attachent à définir les couches basses du modèle OSI pour une liaison sans fil utilisant des ondes électromagnétiques, c’est-à-dire :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>la couche physique (notée parfois couche PHY), proposant quatre types de codage de l’information ;</li>
                    <li>la couche liaison de données, constituée de deux sous-couches :</li>
                    <ul style="font-size: large; text-align: justify; color: white;">
                        <li>le contrôle de la liaison logique (Logical Link Control, ou LLC) ;</li>
                        <li>le contrôle d’accès au support (Media Access Control, ou MAC).</li>
                    </ul>
                </ul>
                <p style="margin-top: 35px;"> 
                    La couche physique définit la modulation des ondes radioélectriques et les caractéristiques de la signalisation pour la transmission de données, tandis que la couche liaison de données définit l’interface entre le bus de la machine et la couche physique, notamment une méthode d’accès proche de celle utilisée dans le standard Ethernet et les règles de communication entre les différentes stations. Les normes 802.11 proposent donc en réalité trois couches (une couche physique appelée PHY et deux sous-couches relatives à la couche liaison de données du modèle OSI), définissant des modes de transmission alternatifs que l'on peut représenter de la manière suivante :
                </p>
                <img src="../../../../images/wifi-8.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 35px;"> 
                    Il est possible d’utiliser n’importe quel protocole de transport basé sur IP sur un réseau 802.11 au même titre que sur un réseau Ethernet.
                </p>
                <p style="margin-top: 40px; justify-content: start">
                    <b>Modes de mise en réseau</b>
                </p>
                <p style="margin-top: 35px; justify-content: start">
                    Il existe différents modes de mise en réseau :
                </p>
                <p style="margin-top: 40px; justify-content: start">
                    Le mode « Infrastructure »
                </p>
                <p style="margin-top: 35px;">
                    Mode qui permet de connecter les ordinateurs équipés d’une carte Wi-Fi entre eux via un ou plusieurs points d’accès (PA) qui agissent comme des concentrateurs (exemple : répéteur ou commutateur en réseau Ethernet). Autrefois ce mode était essentiellement utilisé en entreprise. Dans ce cas, la mise en place d’un tel réseau oblige de poser à intervalles réguliers des bornes « Point d’accès » (PA) dans la zone qui doit être couverte par le réseau. Les bornes, ainsi que les machines, doivent être configurées avec le même nom de réseau (SSID = Service Set IDentifier) afin de pouvoir communiquer. L’avantage de ce mode, en entreprise, est de garantir un passage obligé par le Point d’accès: il est donc possible de vérifier qui accède au réseau. Actuellement les FAI, les boutiques spécialisées et les grandes surfaces fournissent aux particuliers des routeurs sans fil qui fonctionnent en mode « Infrastructure », tout en étant très faciles à configurer.
                </p>
                <p style="margin-top: 40px; justify-content: start">
                    Le mode « Ad hoc »
                </p>
                <p style="margin-top: 35px;">
                    Mode qui permet de connecter directement les ordinateurs équipés d’une carte Wi-Fi, sans utiliser un matériel tiers tel qu’un point d’accès (en anglais : Access Point, ou AP). Ce mode est idéal pour interconnecter rapidement des machines entre elles sans matériel supplémentaire (exemple : échange de fichiers entre portables dans un train, dans la rue, au café…). La mise en place d’un tel réseau consiste à configurer les machines en mode « Ad hoc » (au lieu du mode « Infrastructure »), la sélection d’un canal (fréquence), d’un nom de réseau (SSID) communs à tous et si nécessaire d'une clé de chiffrement. L’avantage de ce mode est de s’affranchir de matériels tiers, c'est-à-dire de pouvoir fonctionner en l'absence de point d'accès. Des protocoles de routage dynamique (exemples : OLSR, AODV…) rendent envisageable l'utilisation de réseaux maillés autonomes dans lesquels la portée ne se limite pas à ses voisins (tous les participants jouent le rôle du routeur).
                </p>
                <p style="margin-top: 40px; justify-content: start">
                    Le mode « Pont » (« Bridge »)
                </p>
                <p style="margin-top: 35px;">
                    Un point d'accès en mode « Pont » sert à connecter un ou plusieurs points d'accès entre eux pour étendre un réseau filaire, par exemple entre deux bâtiments. La connexion se fait au niveau de la couche 2 OSI. Un point d'accès doit fonctionner en mode « Racine » (« Root Bridge », généralement celui qui distribue l'accès Internet) et les autres s'y connectent en mode « Bridge » pour ensuite retransmettre la connexion sur leur interface Ethernet. Chacun de ces points d'accès peut éventuellement être configuré en mode « Pont » avec connexion de clients. Ce mode permet de faire un pont tout en accueillant des clients comme le mode « Infrastructure ».
                </p>
                <p style="margin-top: 40px; justify-content: start">
                    Le mode « Répéteur » (« Range-extender »)
                </p>
                <p style="margin-top: 35px;">
                    Un point d'accès en mode « Répéteur » permet de répéter un signal Wi-Fi plus loin (par exemple pour atteindre un fond de couloir en « L »). Contrairement au mode « Pont », l'interface Ethernet reste inactive. Chaque « saut » supplémentaire augmente cependant le temps de latence de la connexion. Un répéteur a également une tendance à diminuer le débit de la connexion. En effet, son antenne doit recevoir un signal et le retransmettre par la même interface ce qui en théorie divise le débit par deux.
                </p>
                <p style="margin-top: 40px; justify-content: start">
                    Moyens de protection
                </p>
                <p style="margin-top: 35px;">
                    Il est possible de choisir la méthode de codage de la communication sur l'interface radio. La plus ancienne était l'utilisation d'une clé dite Wired Equivalent Privacy (WEP), communiquée uniquement aux utilisateurs autorisés du réseau. Toutefois, il a été démontré que cette clé était facile à violer, avec l'aide de programmes tels que Aircrack.</br></br>
                    Pour améliorer la confidentialité, de nouvelles méthodes ont été proposées, comme Wi-Fi Protected Access (WPA), WPA2 ou plus récemment WPA3.</br></br>
                    Depuis l'adoption du standard 802.11i, on peut raisonnablement parler d'accès réseau sans fil sécurisé. En l'absence de 802.11i, on peut utiliser un tunnel chiffré (VPN) pour se raccorder au réseau de son entreprise sans risque d'écoute ou de modification. D'autres méthodes de sécurisation existent, avec, par exemple, un serveur Radius ou Diameter chargé de gérer les accès par nom d'utilisateur et par mot de passe.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>WEP, WPA, WPA2 et WPA3 : Différences et explication</b>
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    WEP
                </p>
                <p style="margin-top: 35px;">
                    Comme les réseaux sans fil transmettent les données par ondes radio, celles-ci peuvent être facilement interceptées, à moins que des mesures de sécurité ne soient mises en place. Apparu en 1997, Wired Equivalent Privacy (WEP) a été une première tentative de protection des réseaux sans fil. Le but était que les réseaux sans fil soient plus sécurisés en chiffrant les données. De cette manière, si des données sont interceptées, elles sont illisibles pour les pirates. Par conséquent, seuls les systèmes qui sont autorisés sur les réseaux peuvent reconnaître et décrypter les données, car ils utilisent le même algorithme de chiffrement.</br></br>
                    WEP permet de chiffrer le trafic grâce à une clé de 64 ou 128 bits, avec des caractères hexadécimaux. Il s’agit d’une clé statique, ce qui signifie que tout le trafic est chiffré grâce à une seule clé, quel que soit l’appareil. Une clé WEP permet aux ordinateurs sur un réseau d’échanger des messages codés, tout en dissimulant le contenu des messages aux personnes mal intentionnées. Cette clé est utilisée pour se connecter à un réseau sans fil sécurisé.</br></br>
                    Malgré les révisions du protocole et une augmentation de la taille de clé, plusieurs failles de sécurité ont été découvertes dans le protocole au fil du temps. Comme les ordinateurs devenaient plus puissants, il était plus facile, pour les criminels, d’exploiter ces failles. En raison de ces vulnérabilités, la Wi-Fi Alliance a officiellement retiré WEP en 2004. Aujourd’hui le protocole WEP est considéré comme obsolète, même s’il est encore parfois utilisé, soit parce que les administrateurs réseau n’ont pas modifié la sécurité par défaut sur les routeurs sans fil, soit parce que les appareils sont trop vieux pour supporter des méthodes de chiffrement plus récentes comme WPA.
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    WPA
                </p>
                <p style="margin-top: 35px;">
                    WPA ou Wi-Fi Protected Access a été présenté en 2003 par la Wi-Fi Alliance, pour remplacer le protocole WEP. Même si WPA partageait des similitudes avec WEP, il proposait des améliorations sur la gestion des clés de sécurité et l’autorisation des utilisateurs. Alors que WEP fournit à chaque système autorisé la même clé, WPA utilise le protocole d'intégrité de clé temporelle / Temporal Key Integrity Protocol (TKIP), qui modifie dynamiquement la clé utilisée par les systèmes. Cela permet d’éviter que des intrus ne créent leur propre clé de chiffrement correspondant à celle utilisée par le réseau sécurisé. Le protocole de chiffrement TKIP a été plus tard remplacé par Advanced Encryption Standard (AES).</br></br>
                    Par ailleurs, WPA comprenait des contrôles d'intégrité des messages afin de déterminer si un attaquant avait capturé ou modifié des paquets de données. Le protocole utilisait des clés de 256 bits. Une amélioration considérable par rapport aux clés de 64 et 128 bits utilisés dans le système WEP. Cependant, malgré des améliorations, des éléments du WPA ont fini par être exploités, ce qui a conduit au WPA2.</br></br>
                    On entend parfois le terme « clé WPA » quand on parle de WPA. Une clé WPA est un mot de passe que vous utilisez pour vous connecter à un réseau sans fil. Vous pouvez obtenir ce mot de passe auprès du gestionnaire du réseau. Dans certains cas, une phrase secrète ou un mot de passe WPA par défaut peut être imprimé sur le routeur sans fil. Si vous n’arrivez pas à déterminer quel est le mot de passe sur votre routeur, vous pouvez le réinitialiser.</br></br>
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    WPA2
                </p>
                <p style="margin-top: 35px;">
                    WPA2 a été introduit en 2004. Il s’agit d’une version mise à niveau de WPA. WPA2 est basé sur le mécanisme de réseau de sécurité robuste (RSN) et fonctionne sur deux modes :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Mode personnel ou clé pré-partagée (WPA2-PSK) – qui repose sur un code d'accès partagé et qui est généralement utilisé dans les environnements domestiques.</li>
                    <li>Mode entreprise (WPA2-EAP) – qui comme son nom l'indique, est plus adapté à un usage organisationnel ou professionnel.</li>
                </ul>
                <p style="margin-top: 35px;">
                    Les deux modes utilisent le protocole CCMP (Counter-Mode/CBC-Mac protocol), qui est basé sur l’algorithme Advanced Encryption Standard (AES). Celui-ci fournit un message d’authenticité et une vérification d’intégrité. CCMP est plus fort et plus fiable que le protocole d'intégrité de clé temporelle (TKIP) de WPA, ce qui rend la détection de schémas plus difficile pour les attaquants.</br></br>
                    WPA2 présente pourtant des inconvénients. Le protocole est par exemple vulnérable aux attaques de réinstallation de clé (KRACK). Cette attaque exploite une faiblesse dans WPA2, qui permet aux attaquants de créer un réseau clone et forcer la victime à s’y connecter. Les hackers peuvent ainsi déchiffrer un petit paquet de données agrégées pour craquer la clé de chiffrement. Toutefois, les dispositifs peuvent être corrigés et WPA2 est toujours considéré comme étant plus sûr que WEP ou WPA.
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    WPA3
                </p>
                <p style="margin-top: 35px;">
                    Chiffrement des données individuel : Lors de la connexion à un réseau public, WPA3 inscrit un nouvel appareil par un processus autre qu'un mot de passe partagé. WPA3 utilise un système Wi-Fi Device Provisioning Protocol (DPP) qui permet aux utilisateurs d'utiliser des étiquettes NFC (Near Field Communication) ou des codes QR pour autoriser les appareils sur le réseau. En outre, la sécurité WPA3 utilise le chiffrement GCMP-256 plutôt que le chiffrement 128 bits précédemment utilisé.</br></br>
                    Protocole d’authentification simultanée d'égaux : Ce protocole est utilisé pour créer une poignée de main sécurisée, où un périphérique réseau se connecte à un point d'accès sans fil et où les deux périphériques communiquent pour vérifier l'authentification et la connexion. Même si le mot de passe d'un utilisateur est faible, WPA3 fournit une poignée de main plus sûre grâce au Wi-Fi DPP.</br></br>
                    Meilleure protection contre les attaques par force brute : WPA3 protège contre les tentatives de deviner le mot de passe hors ligne en ne donnant à l'utilisateur qu'une seule tentative, ce qui l'oblige à interagir directement avec le dispositif wifi, ce qui signifie qu'il doit être physiquement présent chaque fois qu'il veut deviner le mot de passe. WPA2 ne dispose pas d'un système de chiffrement intégré ni d'un système de confidentialité sur les réseaux publics ouverts, ce qui rend le risque d’attaques par force brute important.</br></br>
                    Les appareils WPA3 sont devenus largement accessibles en 2019 et sont rétrocompatibles avec les appareils qui utilisent le protocole WPA2.</br></br>
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>IEEE 802.11i</b>
                </p>
                <p style="margin-top: 35px;">
                    IEEE 802.11i est un amendement à la norme IEEE 802.11 ratifié le 24 juin 2004 et publié le 23 juillet de la même année. Cet amendement plus connu sous le vocable de WPA2 (nom donné par la Wi-Fi Alliance pour les matériels gérant cet amendement) traite du renforcement de la sécurité des échanges au niveau des réseaux informatiques locaux utilisant une liaison sans fil (WLAN).
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    Description
                </p>
                <p style="margin-top: 35px;">
                    IEEE 802.11i définit un réseau de sécurité robuste (Robust Security Network ou RSN) comportant des améliorations par rapport au mode de sécurisation WEP (Wired Equivalent Privacy) préconisé par le standard IEEE 802.11. Cet amendement a amélioré les méthodes d'authentification et de chiffrement. La norme utilise les moyens d'authentification et de chiffrement suivants :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Le standard IEEE 802.1X qui permet de réaliser une authentification par contrôle de l'accès réseau au niveau du port (Port Based Network Access Control) et d'autoriser ou non une liaison physique entre un client et un point d'accès.</li>
                    <li>Le processus de chiffrement basé sur l'algorithme AES (Advanced Encryption Standard) permettant de réaliser le mode de sécurisation WPA2.</li>
                    <li>Le processus de chiffrement TKIP (Temporal Key Integrity Protocol) permettant d'obtenir le mode de sécurisation WPA (moins robuste que WPA2) à l'aide de clés de 128 bits dynamiques modifiées de manière aléatoire.</li>
                </ul>
                <p style="margin-top: 30px; justify-content: start">
                    Authentification
                </p>
                <p style="margin-top: 35px;">
                    L'authentification est le processus permettant à un Supplicant de s'authentifier auprès d'un Authentificator afin d'avoir accès à certains services. Dans le cas du Wifi, le Supplicant est une station (STA) cherchant à obtenir un accès à l'Internet auprès d'un point d'accès (PA). 802.11i ratifie deux méthodes d'authentification :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>PSK : Cette authentification est basée sur un secret partagé entre la STA et le PA. Tous deux sont en possession d'une clé symétrique appelée PSK (Pre-Shared Key). L'implémentation de cette authentification est appelé WPA-Personnel par la WiFi alliance.</li>
                    <li>802.1X : Cette authentification est basée sur le protocole IEEE 802.1X. Ici l'authentificator (PA) va simplement servir de relais entre la STA et un serveur d'authentification (AS) en utilisant par exemple le protocole RADIUS (également appelé AAA). L'implémentation de cette authentification est appelée WPA-Entreprise par la Wi-Fi Alliance.</li>
                </ul>
                <p style="margin-top: 35px;">
                    Dans les deux cas, l'authentification se fait au moyen du protocole EAP (Extensible Authentication Protocol). À l'issue de l'authentification, si cette dernière est un succès (c'est-à-dire qu'elle termine par un EAP-SUCCESS) la STA et l'AP sont tous deux en possession d'une clef appelée PMK (Pairwise Master Key). Cette PMK est soit la PSK (dans le cas d'une authentification basée sur PSK) soit les 256 premiers bits de la clef AAA (dans le cas d'une authentification basée sur 802.1X). La phase suivant l'authentification est appelée le 4-Way Handshake, elle consiste à la dérivation et à l'échange des clefs unicast/multicast à partir de la clef PMK. Le 4-Way Handshake permet également de sélectionner le protocole de chiffrement qui sera utilisé pour sécuriser les communications entre la STA et l'AP.
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    Chiffrement
                </p>
                <p style="margin-top: 35px;">
                    802.11i permet de définir un RSN mais est cependant rétro-compatible avec l'ancien mode de sécurisation WEP. Dans cet amendement sont introduits deux nouveaux procédés de chiffrement, le TKIP ainsi que le CCMP.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>WEP (Wired Equivalent Privacy) ;</li>
                    <li>TKIP (Temporal Key Integrity Protocol) ;</li>
                    <li>CCMP (CTR with CBC-MAC protocol).</li>
                </ul>
                <p style="margin-top: 35px;">
                    Il est à noter que le WEP est défini en tant que pré-RSN dans la mesure où il n'offre pas une sécurité suffisante pour un réseau sans-fil. TKIP est certifié RSN et est compatible avec le matériel pré-RSN, c'est une évolution plus robuste que le WEP permettant une transition douce vers un réseau totalement RSN (Robust Secure Network). CCMP est la méthode de chiffrement la plus sûre offerte par la norme 802.11i mais n'est pas compatible avec les vieux matériels.
                </p>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Wi-Fi" target="_blank">Wikipedia - Wi-fi</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/IEEE_802.11" target="_blank">Wikipedia - IEEE 802.11</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Wi-Fi" target="_blank">Wikipedia - IEEE 802</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.kaspersky.fr/resource-center/definitions/wep-vs-wpa" target="_blank">Kespersky - WEP, WPA, WPA2 et WPA3 : Différences et explication</a>
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