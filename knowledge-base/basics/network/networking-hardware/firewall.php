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
    <title>Équipements réseau - Le Firewall</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Équipements réseau</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Le Firewall</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Le Firewall
                </h1>
                <p style="margin-top: 30px;"> 
                    Le firewall (pare-feu en français), est un programme, ou un matériel, chargé de faire respecter la politique de sécurité du réseau, celle-ci définissant quels sont les types de communications autorisés sur ce réseau informatique. Il surveille et contrôle les applications et les flux de données (paquets).
                </p>

            </div>
        </div>

        <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="group col-sm-8">  
                <img src="../../../../images/firewall.png" class="img-fluid float-left" style="max-width: 57%; margin-left: 0.3%; margin-top: 30px;"/>
                <img src="../../../../images/hardware-firewall.png" class="img-fluid float-right" style="max-width: 40.8%; margin-left: 0.4%; margin-top: 30px;"/>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-8">

                <p style="margin-top: 55px; justify-content: start">
                    <b>Fonctionnement général</b>
                </p>
                <p style="margin-top: 30px;">
                    Le pare-feu est considéré comme un des éléments essentiels de la sécurité d'un réseau informatique. Il permet d'appliquer une politique d'accès aux ressources réseau (serveurs).</br></br>
                    Il a pour principale tâche de contrôler le trafic entre différentes zones de confiance, en filtrant les flux de données qui y transitent. Généralement, les zones de confiance incluent Internet (une zone dont la confiance est nulle) et au moins un réseau interne (une zone dont la confiance est plus importante).</br></br>
                    Le but est de fournir une connectivité contrôlée et maîtrisée entre des zones de différents niveaux de confiance, grâce à l'application de la politique de sécurité et d'un modèle de connexion basé sur le principe du moindre privilège.</br></br>
                    Le filtrage se fait selon divers critères. Les plus courants sont :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>l'origine ou la destination des paquets (adresse IP, ports TCP ou UDP, interface réseau, etc.) ;</li>
                    <li>les options contenues dans les données (fragmentation, validité, etc.) ;</li>
                    <li>les données elles-mêmes (taille, correspondance à un motif, etc.) ;</li>
                    <li>les utilisateurs pour les plus récents.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Un pare-feu fait souvent office de routeur et permet ainsi d'isoler le réseau en plusieurs zones de sécurité appelées zones démilitarisées ou DMZ. Ces zones sont séparées suivant le niveau de confiance qu'on leur porte.</br></br>
                    Enfin, le pare-feu est également souvent situé à l'extrémité de tunnel IPsec ou TLS. L'intégration du filtrage de flux et de la gestion du tunnel est en effet nécessaire pour pouvoir à la fois protéger le trafic en confidentialité et intégrité et filtrer ce qui passe dans le tunnel.
                </p>
                <img src="../../../../images/firewall-1.png" class="img-fluid mx-auto d-block" style="max-width: 65%; margin-top: 30px;"/>
                <p style="margin-top: 55px; justify-content: start">
                    <b>Les différents types de firewall</b>
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    Les firewalls sont un des plus vieux équipements de sécurité informatique et, en tant que tel, ont subi de nombreuses évolutions. Suivant la génération du pare-feu ou son rôle précis, on peut les classer en différentes catégories.
                </p>
                <p style="margin-top: 55px; justify-content: start">
                    <b>1 - Filtrage simple de paquet / Pare-feu sans état (stateless firewall)</b>
                </p>
                <p style="margin-top: 30px;">
                    C'est le plus vieux dispositif de filtrage réseau, introduit sur les routeurs. Il regarde chaque paquet indépendamment des autres et le compare à une liste de règles préconfigurées.
                    Cela consiste à accorder ou refuser le passage de paquet d’un réseau à un autre en se basant sur :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>L’adresse IP Source/Destination.</li>
                    <li>Le numéro de port Source/Destination.</li>
                    <li>Et bien sûr le protocole de niveau 3 ou 4.</li>
                </ul>
                <p style="margin-top: 30px; justify-content: start">
                    Ces règles peuvent avoir des noms très différents en fonction du pare-feu :
                </p>
                <div id="ACL">
                    <ul style="font-size: large; text-align: justify; color: white;">
                        <li>« ACL » pour Access Control List (certains pare-feux Cisco),</li>
                        <li>politique ou policy (pare-feu Juniper/Netscreen),</li>
                        <li>filtres,</li>
                        <li>règles ou rules,</li>
                    </ul>
                </div>
                <p style="margin-top: 30px;">
                    La configuration de ces dispositifs est souvent complexe et l'absence de prise en compte des machines à états des protocoles réseaux ne permet pas d'obtenir une finesse du filtrage très évoluée. Ces pare-feux ont donc tendance à tomber en désuétude mais restent présents sur certains routeurs ou systèmes d'exploitation.
                </p>
                <p style="margin-top: 55px; justify-content: start">
                    <b>2 - Le filtrage de paquet avec état (Stateful firewall)</b>
                </p>
                <p style="margin-top: 30px;">
                    L’amélioration par rapport au filtrage simple, est la conservation de la trace des sessions et des connexions dans des tables d’états internes au Firewall. Le Firewall prend alors ses décisions en fonction des états de connexions, et peut réagir dans le cas de situations protocolaires anormales. Les pare-feux à états vérifient donc la conformité des paquets à une connexion en cours. Ce filtrage permet aussi de se protéger face à certains types d’attaques DoS.</br></br>
                    Dans l’exemple précédent sur les connexions Internet, on va autoriser l’établissement des connexions à la demande, ce qui signifie que l’on aura plus besoin de garder tous les ports supérieurs à 1024 ouverts. Pour les protocoles UDP et ICMP, il n’y a pas de mode connecté. La solution consiste à autoriser pendant un certain délai les réponses légitimes aux paquets envoyés. Les paquets ICMP sont normalement bloqués par le Firewall, qui doit en garder les traces. Cependant, il n’est pas nécessaire de bloquer les paquets ICMP de type 3 (destination inaccessible) et 4 (ralentissement de la source) qui ne sont pas utilisables par un attaquant. Ils savent donc aussi filtrer intelligemment les paquets ICMP qui servent à la signalisation des flux IP. On peut donc choisir de les laisser passer, suite à l’échec d’une connexion TCP ou après l’envoi d’un paquet UDP.
                </p>
                <img src="../../../../images/stateful-firewall.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Enfin, si les ACL autorisent un paquet UDP caractérisé par un quadruplet (ip_src, port_src, ip_dst, port_dst) à passer, un tel pare-feu autorisera la réponse caractérisée par un quadruplet inversé, sans avoir à écrire une ACL inverse. Ceci est fondamental pour le bon fonctionnement de tous les protocoles fondés sur l'UDP, comme DNS par exemple. Ce mécanisme apporte en fiabilité puisqu'il est plus sélectif quant à la nature du trafic autorisé. Cependant dans le cas d'UDP, cette caractéristique peut être utilisée pour établir des connexions directes (P2P) entre deux machines (comme le fait Skype par exemple).</br></br>
                    Pour le protocole FTP (et les protocoles fonctionnant de la même façon), c’est plus délicat puisqu’il va falloir gérer l’état de deux connexions. En effet, le protocole FTP, gère un canal de contrôle établi par le client, et un canal de données établi par le serveur. Le Firewall devra donc laisser passer le flux de données établi par le serveur. Ce qui implique que le Firewall connaisse le protocole FTP, et tous les protocoles fonctionnant sur le même principe. Cette technique est connue sous le nom de filtrage dynamique (Stateful Inspection) et a été inventée par Checkpoint. Mais cette technique est maintenant gérée par d’autres fabricants.
                </p>
                <img src="../../../../images/FTP-firewall-stateful.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 30px; justify-content: start">
                    Pour résumer en un schéma la différence entre Data plane et control plane : 
                </p>
                <img src="../../../../images/stateful-firewall-1.jpeg" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 55px; justify-content: start">
                    <b>3 - Le filtrage applicatif (ou pare-feu de type proxy ou proxying applicatif)</b>
                </p>
                <p style="margin-top: 30px;">
                    Le filtrage applicatif est comme son nom l’indique réalisé au niveau de la couche Application. Pour cela, il faut bien sûr pouvoir extraire les données du protocole de niveau 7 pour les étudier. Les requêtes sont traitées par des processus dédiés, par exemple une requête de type Http sera filtrée par un processus proxy Http. Le pare-feu rejettera toutes les requêtes qui ne sont pas conformes aux spécifications du protocole.</br></br>
                    Par exemple, avec HTTP la vérification complète de la conformité du paquet du protocole permet de vérifier que seul le protocole HTTP passe par le port TCP 80. Ce traitement est très gourmand en temps de calcul dès que le débit devient très important. Il est justifié par le fait que de plus en plus de protocoles réseaux utilisent un tunnel TCP afin de contourner le filtrage par ports.</br></br>
                    Une autre raison de l'inspection applicative est l'ouverture de ports dynamique. Certains protocoles comme FTP, en mode passif, échangent entre le client et le serveur des adresses IP ou des ports TCP/UDP. Ces protocoles sont dits « à contenu sale » ou passant difficilement les pare-feux, car ils échangent au niveau applicatif (FTP) des informations du niveau IP (échange d'adresses) ou du niveau TCP (échange de ports). Ce qui transgresse le principe de la séparation des couches réseaux. Pour cette raison, les protocoles à contenu sale passent difficilement, voire pas du tout, les règles de NAT dynamiques, à moins qu'une inspection applicative ne soit faite sur ce protocole.</br></br>
                    Cela implique que le pare-feu proxy connaisse toutes les règles protocolaires des protocoles qu’il doit filtrer. Chaque application est gérée par un module différent pour pouvoir les activer ou les désactiver. Or, chaque type de pare-feu sait inspecter un nombre limité d'applications.  La terminologie pour le concept de module est différente pour chaque type de pare-feu. Par exemple : Le protocole HTTP permet d'accéder en lecture sur un serveur par une commande GET, et en écriture par une commande PUT. Un pare-feu applicatif va être en mesure d'analyser une connexion HTTP et de n'autoriser les commandes PUT qu'à un nombre restreint de machines.
                </p>
                <p style="margin-top: 55px; justify-content: start">
                    <b>4 - Pare-feu identifiant</b>
                </p>
                <p style="margin-top: 30px;">
                    Un pare-feu réalise l’identification des connexions passant à travers le filtre IP. L'administrateur peut ainsi définir les règles de filtrage par utilisateur et non plus par adresse IP ou adresse MAC, et ainsi suivre l'activité réseau par utilisateur.</br></br>
                    Plusieurs méthodes différentes existent qui reposent sur des associations entre IP et utilisateurs réalisées par des moyens variés. On peut par exemple citer authpf (sous OpenBSD) qui utilise ssh pour faire l'association. Une autre méthode est l'identification connexion par connexion (sans avoir cette association IP = utilisateur et donc sans compromis sur la sécurité), réalisée par exemple par la suite NuFW, qui permet d'identifier également sur des machines multi-utilisateurs.</br></br>
                    On pourra également citer Cyberoam qui fournit un pare-feu entièrement basé sur l'identité (en réalité en réalisant des associations adresse MAC = utilisateur) ou Check Point avec l'option NAC Blade qui permet de créer des règles dynamiques basée sur l'authentification Kerberos d'un utilisateur, l'identité de son poste ainsi que son niveau de sécurité (présence d'antivirus, de patchs particuliers).
                </p>
                <p style="margin-top: 55px; justify-content: start">
                    <b>5 - Pare-feu personnel</b>
                </p>
                <p style="margin-top: 30px;">
                    Les pare-feux personnels, généralement installés sur une machine de travail, agissent comme un pare-feu à états. Bien souvent, ils vérifient aussi quel programme est à l'origine des données. Le but est de lutter contre les virus informatiques et les logiciels espions.
                </p>
                <p style="margin-top: 55px; justify-content: start">
                    <b>6 - Portail captif</b>
                </p>
                <p style="margin-top: 30px;">
                    Les portails captifs sont des pare-feux dont le but est d'intercepter les usagers d'un réseau de consultation afin de leur présenter une page web spéciale (par exemple : avertissement, charte d'utilisation, demande d'authentification, etc.) avant de les laisser accéder à Internet. Ils sont utilisés pour assurer la traçabilité des connexions et/ou limiter l'utilisation abusive des moyens d'accès. On les déploie essentiellement dans le cadre de réseaux de consultation Internet mutualisés filaires ou Wi-Fi.
                </p>
                <img src="../../../../images/captive-portal.png" class="img-fluid mx-auto d-block" style="max-width: 65%; margin-top: 30px;"/>
                <p style="margin-top: 55px; justify-content: start" id="FW">
                    <b id="NGFW">6 - NGFW (Next-generation firewall)</b>
                </p>
                <p style="margin-top: 30px;">
                    Un pare-feu traditionnel se limite à des fonctions telles que le filtrage des paquets, la traduction des adresses de réseau et de port (NAT) et les VPN. Il prend ses décisions en fonction des ports, des protocoles et des adresses IP. Aujourd'hui, il n'est plus pratique ni fiable de mettre en œuvre des politiques de sécurité d'une manière aussi inflexible et non transparente. Une nouvelle approche était nécessaire et les NGFWs fournissent cette approche en ajoutant plus de contexte aux politiques de sécurité. Les systèmes basés sur le contexte sont conçus pour utiliser intelligemment des informations telles que la localisation, l'identité, l'heure, etc... dans le but de prendre des décisions de sécurité plus efficaces.</br></br>
                    Les pare-feu de nouvelle génération se distinguent également des pare-feu traditionnels en ajoutant des fonctions telles que le filtrage des URL, l'antivirus/anti-malware, les systèmes de prévention des intrusions (IPS), etc. Au lieu d'utiliser plusieurs solutions ponctuelles différentes, un NGFW simplifie et améliore considérablement l'efficacité de la mise en œuvre des politiques de sécurité dans un monde informatique de plus en plus complexe.</br></br>
                    Les pare-feux récents embarquent de plus en plus de fonctionnalités, parmi lesquelles on peut citer :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Filtrage sur adresses IP / protocole,</li>
                    <li>Inspection stateful et applicative,</li>
                    <li>Intelligence artificielle pour détecter le trafic anormal,</li>
                    <li>Filtrage applicatif :
                        <ul style="font-size: large; text-align: justify; color: white;">
                            <li>HTTP (restriction des URL accessibles),</li>
                            <li>Courriel (Anti-pourriel),</li>
                            <li>Logiciel antivirus, anti-logiciel malveillant</li>
                        </ul>
                    </li>
                    <li>Traduction d'adresse réseau,</li>
                    <li>Tunnels IPsec, PPTP, L2TP,</li>
                    <li>Identification des connexions,</li>
                    <li>Serveurs de protocoles de connexion (telnet, SSH), de protocoles de transfert de fichier (SCP),</li>
                    <li>Clients de protocoles de transfert de fichier (TFTP),</li>
                    <li>Serveur Web pour offrir une interface de configuration agréable,</li>
                    <li>Serveur mandataire (« proxy » en anglais),</li>
                    <li>Système de détection d'intrusion (« IDS » en anglais)</li>
                    <li>Système de prévention d'intrusion (« IPS » en anglais)</li>
                </ul>
                <img src="../../../../images/ngfw.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>
                <p style="margin-top: 55px; justify-content: start" id="UTM">
                    <b>Bonus : UTM</b>
                </p>
                <p style="margin-top: 30px;">
                    En sécurité informatique, Unified threat management, ou UTM (en français : gestion unifiée des menaces) fait référence à des pare-feu réseau possédant de nombreuses fonctionnalités supplémentaires qui ne sont pas disponibles dans les pare-feu traditionnels.</br></br>
                    Parmi les fonctionnalités présentes dans un UTM, outre le pare-feu traditionnel, on cite généralement le filtrage anti-spam, un logiciel antivirus, un système de détection ou de prévention d'intrusion (IDS ou IPS), et un filtrage de contenu applicatif (filtrage URL).</br></br>
                    Toutes ces fonctionnalités sont regroupées dans un même boîtier, généralement appelé appliance.</br></br>
                    Éditeurs de solutions UTM</br>
                    On trouve parmi les principaux éditeurs de solutions UTM :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Check Point</li>
                    <li>Fortinet</li>
                    <li>Juniper Networks</li>
                    <li>Stormshield</li>
                    <li>Sophos</li>
                    <li>Symantec</li>
                    <li>Netgate : PfSense (Open source)</li> 
                </ul>
                <img src="../../../../images/ngfw-utm-scale.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>

                
            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Pare-feu_(informatique)" target="_blank">Wikipedia - Pare-feu (informatique)</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.frameip.com/firewall/" target="_blank">FRAMEIP - Les Firewalls</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.illumio.com/blog/firewall-stateful-inspection" target="_blank">Illumio - Understanding Stateful vs Stateless Firewalls for Stateful Protocol Inspection</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.wallarm.com/what/the-concept-of-a-firewall" target="_blank">Wallarm - What Is A Firewall ?</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.orangecyberdefense.com/be/blog/waf-vs-ngfw" target="_blank">Orange Cyberdefense - WAF vs NGFW</a>
                </h6>
                
                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Unified_threat_management" target="_blank">Wikipedia - UTM</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.watchguard.com/fr/wgrd-resource-center/help-me-choose" target="_blank">Watchguard - NGFW ou UTM : Que choisir ?</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.lemagit.fr/conseil/UTM-vs-NGFW-de-vraies-differences" target="_blank">LeMagIT - UTM vs NGFW : de vraies différences ?</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>